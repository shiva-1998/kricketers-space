@include('front.includes.header-links')


<section class="registration-page vh-100 d-flex align-items-center">
    <div class="container-fluid h-100">
        <div class="row h-100">

            <div class="col-lg-6 d-none d-lg-flex flex-column justify-content-between p-5 left-panel position-relative">
                <div class="brand-top">
                    <img src="{{ asset('assets/frontend/img/logo/logo.svg') }}" alt="CCL Logo" class="brand-logo mb-4">
                    <div class="mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-chevron-left text-info"></i>
                        <span class="text-info text-uppercase fw-bold small">Season 2026 Open</span>
                    </div>
                    <h1 class="registration-heading">
                        Join The Ultimate <br>
                        <span class="text-info">Corporate Cricket</span> <br>
                        League.
                    </h1>
                    <p class="text-light lead">Compete • Track • Win</p>
                </div>

            </div>

            <div class="col-lg-6 d-flex align-items-center justify-content-center right-panel p-5">
                <div class="form-container w-100" style="max-width: 450px;">
                    <a href="#" class="text-secondary text-decoration-none small mb-4 d-inline-block">
                        <i class="fa fa-arrow-left me-1"></i> Back to Sign In
                    </a>

                    <h1 class="reg_from_heading">Set Your Password</h1>
                    <p class="reg_from_subheading">Choose a secure password to continue</p>

                    <form action="{{ route('user-password.save') }}" method="post" id="passwordForm"
                        class="text-start">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label text-secondary small ms-2">Enter your Password</label>
                            <div class="custom-input-wrap">
                                <input type="password" name="password" class="form-control custom-input"
                                    id="newPassword" placeholder="****************" required>
                            </div>
                            <small id="passwordError" class="text-danger"></small>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-secondary small ms-2">Re-enter your password</label>
                            <div class="custom-input-wrap">
                                <input type="password" name="password_confirmation" class="form-control custom-input"
                                    id="confirmPassword" placeholder="****************" required>
                            </div>
                            <small id="confirmError" class="text-danger"></small>
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="cta1 w-100 ">Continue</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
<script>
    let passwordInput = document.getElementById('newPassword');
    let confirmInput = document.getElementById('confirmPassword');

    let passwordError = document.getElementById('passwordError');
    let confirmError = document.getElementById('confirmError');

    let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/;

    // Password validation while typing
    passwordInput.addEventListener('keyup', function() {
        let password = passwordInput.value;

        if (!regex.test(password)) {
            passwordError.innerText =
                "Must include uppercase, lowercase, number, special character & 8+ chars";
        } else {
            passwordError.innerText = "";
        }

        checkConfirm(); // also check confirm field
    });

    // Confirm password validation while typing
    confirmInput.addEventListener('keyup', checkConfirm);

    function checkConfirm() {
        let password = passwordInput.value;
        let confirmPassword = confirmInput.value;

        if (confirmPassword.length > 0 && password !== confirmPassword) {
            confirmError.innerText = "Passwords do not match";
        } else {
            confirmError.innerText = "";
        }
    }

    // Prevent submit if errors exist
    document.getElementById('passwordForm').addEventListener('submit', function(e) {
        if (passwordError.innerText || confirmError.innerText) {
            e.preventDefault();
        }
    });
</script>
