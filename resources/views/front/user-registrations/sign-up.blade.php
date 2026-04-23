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
                    <h2 class="reg_from_heading ">Step Into the Arena</h2>
                    <p class="reg_from_subheading">Build your profile, join teams, and compete</p>

                    <form method="post" action="{{ route('user-signup') }}" id="signupForm" class="text-start">
                        @csrf
                        <div class="custom-input-wrap">
                            <input type="email" name="email"
                                class="form-control custom-input @error('email') is-invalid @enderror" id="workEmail"
                                placeholder="your@company.com" value="{{ old('email') }}" required>
                        </div>

                        @error('email')
                            <small class="text-danger ms-2">{{ $message }}</small>
                        @enderror

                        <div class="mt-5">
                            <button type="submit" class="cta1 w-100 ">Verify your Email</button>
                        </div>

                        <div class="text-center mt-4">
                            <p class="text-secondary small">Step back into the game. <a href="#"
                                    class="text-info text-decoration-none fw-bold">Sign In</a></p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
