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
                    <h2 class="reg_from_heading">Welcome Back</h2>
                    <p class="reg_from_subheading">Securely access your account and continue your experience.</p>

                    <form action="{{ route('user.login.submit') }}" method="post" id="signInForm" class="text-start mt-5">

                        @csrf

                        <div class="mb-4">
                            <label class="form-label text-secondary small ms-2">Enter your work email</label>
                            <div class="custom-input-wrap">
                                <input type="email" name="email" class="form-control custom-input"
                                    placeholder="your@company.com  @error('email') is-invalid @enderror" required>
                                        @error('email')
            <small class="text-danger">{{ $message }}</small>
        @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-secondary small ms-2">Enter your Password</label>
                            <div class="custom-input-wrap">
                                <input type="password" name="password" class="form-control custom-input @error('password') is-invalid @enderror"
                                    placeholder="****************" required>
                                      @error('password')
            <small class="text-danger">{{ $message }}</small>
        @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-5 px-2">
                            <div class="form-check">
                                <input class="form-check-input custom-checkbox" type="checkbox" id="rememberMe">
                                <label class="form-check-label text-secondary small" for="rememberMe">
                                    Remember Me
                                </label>
                            </div>
                            <a href="#" class="text-secondary text-decoration-none small">Forgot Password?</a>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="cta1 w-100  mb-4">Sign In</button>
                        </div>

                        <div class="text-center mt-3">
                            <p class="text-secondary small">
                                New here? <a href="{{ route('register') }}" class="text-cyan text-decoration-none fw-bold">Continue to
                                    create account</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
