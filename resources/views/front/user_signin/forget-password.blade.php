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
                    <i class="fa fa-arrow-left me-1"></i> Back
                </a>

                <h2 class="reg_from_heading">Forgot Password</h2>
                <p class="reg_from_subheading">No worries, we’ll help you reset it</p>

                <form id="recoveryForm" class="mt-5">
                    <div class="mb-4">
                        <label class="form-label text-secondary small ms-2">Enter your work email</label>
                        <div class="custom-input-wrap">
                            <input type="email" class="form-control custom-input" placeholder="your@company.com" required>
                        </div>
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="cta1 w-100 mb-4">Verify </button>
                    </div>
<!-- 
                    <div class="text-center mt-3">
                        <p class="text-secondary small">
                            Having trouble? <a href="#" class="text-info text-decoration-none fw-bold">Contact Support</a>
                        </p>
                    </div> -->
                </form>
                </div>
            </div>

        </div>
    </div>
</section>