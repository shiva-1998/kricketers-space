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

                <h1 class="reg_from_heading">New Password</h1>
                <p class="reg_from_subheading">Choose a secure password to continue</p>

                <form id="passwordForm" class="text-start">
                    <div class="mb-4">
                        <label for="newPassword" class="form-label text-secondary small ms-2">Enter your Password</label>
                        <div class="custom-input-wrap">
                            <input type="password" class="form-control custom-input" id="newPassword" placeholder="****************" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="confirmPassword" class="form-label text-secondary small ms-2">Re-enter your password</label>
                        <div class="custom-input-wrap">
                            <input type="password" class="form-control custom-input" id="confirmPassword" placeholder="****************" required>
                        </div>
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