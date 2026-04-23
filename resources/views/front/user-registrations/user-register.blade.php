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
                    <h2 class="reg_from_heading ">Select Your Role</h2>
                    <p class="reg_from_subheading">How will you be using CCL Platform?</p>

                    <form method="post" action="{{ route('user.role') }}" id="registrationForm">
                        @csrf
                        <div class="role-option mb-4">
                            <input type="radio" name="role" value="player" id="rolePlayer" class="btn-check"
                                checked>
                            <label class="role-card d-flex align-items-center p-3" for="rolePlayer">
                                <div class="role-icon-wrap me-3">
                                    <img src="{{ asset('assets/frontend/img/player-outline.svg') }}" alt="Player">
                                </div>
                                <div class="role-details">
                                    <h5 class="mb-1">Player</h5>
                                    <small class="text-secondary">Track stats, join teams, view fixtures.</small>
                                </div>
                            </label>
                        </div>

                        <div class="role-option mb-5">
                            <input type="radio" name="role" value="team_captain" id="roleCaptain"
                                class="btn-check">
                            <label class="role-card d-flex align-items-center p-3" for="roleCaptain">
                                <div class="role-icon-wrap me-3">
                                    <img src="{{ asset('assets/frontend/img/captain-outline.svg') }}" alt="Captain">
                                </div>
                                <div class="role-details">
                                    <h5 class="mb-1">Team Captain</h5>
                                    <small class="text-secondary">Manage squad, tactics, transfers.</small>
                                </div>
                            </label>
                        </div>

                        <button type="submit" class="cta1 w-100 ">Create My Account</button>

                        <div class="text-center mt-3">
                            <p class="text-secondary small">Step back into the game. <a href="{{ route('sign-in') }}"
                                    class="text-info text-decoration-none fw-bold">Sign In</a></p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
