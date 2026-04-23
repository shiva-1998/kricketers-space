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

                    <h2 class="reg_from_heading">Your Cricket Profile</h2>
                    <p class="reg_from_subheading">Help us understand your playing style.</p>

                    <form action="{{ route('user-profile.update') }}" method="post" id="cricketProfileForm"
                        class="text-start mt-5">

                        @csrf

                        <div class="mb-4">
                            <label class="form-label text-secondary small ms-2">Your Role</label>
                            <div class="custom-input-wrap position-relative">
                                <select name="your_role" class="form-select custom-input">
                                    <option value="all_rounder">All-Rounder</option>
                                    <option value="batsman">Batsman</option>
                                    <option value="bowler">Bowler</option>
                                    <option value="wicketkeeper">Wicketkeeper</option>
                                </select>
                                <i class="bi bi-chevron-down select-icon"></i>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-secondary small ms-2">Batting Style</label>
                            <div class="custom-input-wrap position-relative">
                                <select name="batting_style" class="form-select custom-input">
                                    <option value="right_hand">Right-Handed</option>
                                    <option value="left_hand">Left-Handed</option>
                                </select>
                                <i class="bi bi-chevron-down select-icon"></i>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-secondary small ms-2">Bowling Type</label>
                            <div class="custom-input-wrap position-relative">
                                <select name="bowling_type" class="form-select custom-input">
                                    <option value="fast">Fast</option>
                                    <option value="spin">Spin</option>
                                    <option value="medium">Medium Fast</option>
                                    <option value="leg_break">Leg Break</option>
                                </select>
                                <i class="bi bi-chevron-down select-icon"></i>
                            </div>
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="cta1 w-100  mb-4">Continue</button>

                            <div class="d-flex align-items-center justify-content-between progress-container">
                                <div class="custom-progress-bar flex-grow-1 me-3">
                                    <div class="progress-fill" style="width: 50%;"></div>
                                </div>
                                <span class="text-secondary small">2 <span class="text-muted">/ 4</span></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
