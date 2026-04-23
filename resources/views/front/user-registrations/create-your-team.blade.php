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
                        <i class="bi bi-arrow-left me-1"></i> Back
                    </a>

                    <h2 class="reg_from_heading">Create Your Team</h2>
                    <p class="reg_from_subheading">As captain, set up your squad and let the games begin.</p>

                    <form action="{{ route('user.team') }}" method="post" id="createTeamForm" class="text-start mt-5"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label text-secondary small ms-2">Team Name</label>
                            <div class="custom-input-wrap">
                                <input type="text" name="team_name"
                                    class="form-control custom-input @error('team_name') is-invalid @enderror"
                                    placeholder="Sunrise Hyderabad">
                            </div>
                        </div>

                        <div
                            class="upload-dropzone p-4 d-flex flex-column align-items-center justify-content-center mb-5">
                            <p class="text-secondary small mb-3">Upload team logo (optional)</p>

                            <!-- Hidden file input -->
                            <input type="file" name="team_logo" id="teamLogoInput" accept="image/*"
                                style="display: none;">
                            @error('team_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <!-- Custom button -->
                            <button type="button" id="choosePhotoBtn" class="cta-secondary-notched px-4">
                                Choose Photo
                            </button>

                            <!-- Preview -->
                            <img id="logoPreview" style="display:none; width:100px; margin-top:10px;">
                            @error('team_logo')
                                <small class="text-danger mt-2 d-block">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="cta1 w-100 py-3 fw-bold mb-3">Complete Profile</button>

                            <div class="text-center mb-4">
                                <a href="#" class="text-secondary text-decoration-none small">Skip for now, create
                                    team later</a>
                            </div>

                            <div class="d-flex align-items-center justify-content-between progress-container">
                                <div class="custom-progress-bar flex-grow-1 me-3">
                                    <div class="progress-fill" style="width: 100%;"></div>
                                </div>
                                <span class="text-secondary small">4 <span class="text-muted">/ 4</span></span>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        const btn = document.getElementById('choosePhotoBtn');
        const input = document.getElementById('teamLogoInput');
        const preview = document.getElementById('logoPreview');

        btn.addEventListener('click', function() {
            input.click();
        });

        input.addEventListener('change', function(e) {
            const file = e.target.files[0];

            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        });

    });
    document.getElementById('teamLogoInput').addEventListener('change', function(event) {
        const file = event.target.files[0];

        if (file) {
            const preview = document.getElementById('logoPreview');
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        }
    });
</script>
