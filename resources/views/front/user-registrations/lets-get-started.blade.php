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

                <h2 class="reg_from_heading">Let’s Get Started</h2>
                <p class="reg_from_subheading">Tell us a bit about yourself to set up your profile.</p>

                <form id="profileForm" class="text-start mt-5">
                    <div class="mb-4">
                        <label class="form-label text-secondary small ms-2">Full Name</label>
                        <div class="custom-input-wrap">
                            <input type="text" class="form-control custom-input" placeholder="e.g. Abhishek Sharma">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-secondary small ms-2">Phone Number</label>
                        <div class="custom-input-wrap d-flex align-items-center">
                            <div class="country-select px-3 border-end border-secondary">
                                <img src="{{ asset('assets/frontend/img/world.svg') }}" alt="IN" width="20" class="me-1">
                                <i class="bi bi-caret-down-fill small text-secondary"></i>
                            </div>
                            <input type="tel" class="form-control custom-input" placeholder="+91 9876543210">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-secondary small ms-2">Location</label>
                        <div class="custom-input-wrap">
                            <input type="text" class="form-control custom-input" placeholder="Hyderabad">
                        </div>
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="cta1 w-100 mb-4">Continue</button>
                        
                        <div class="d-flex align-items-center justify-content-between progress-container">
                            <div class="custom-progress-bar flex-grow-1 me-3">
                                <div class="progress-fill" style="width: 25%;"></div>
                            </div>
                            <span class="text-secondary small">1 <span class="text-muted">/ 4</span></span>
                        </div>
                    </div>
                </form>

                </div>
            </div>

        </div>
    </div>
</section>