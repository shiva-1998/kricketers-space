@include('front.includes.header-links')

@include('front.includes.header')

<main class="inner_pages_main">

    <section class="innerpage-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="innerpage_banner_heading">Your Team.
                  
                    <br>
                    <span>  Your Legacy.</span>
                    </h1>
                    <p>Bring your squad together, manage players, and make every match count.</p>

                </div>

            </div>
        </div>

    </section>

    <section class="search-filter-section bg-black pt-5 pb-3">
        <div class="container">
            <div class="filter-wrapper d-flex flex-wrap align-items-center p-2 gap-2">
                <div class="search-box  position-relative">
                    <i class="fa fa-search position-absolute top-50 start-0 translate-middle-y ms-3 text-secondary"></i>
                    <input type="text" class="form-control ps-5" placeholder="Search Tournaments">
                </div>

                <div class="filter-dropdown">
                    <select class="form-select">
                        <option selected>All</option>
                        <option>Men's</option>
                        <option>Women's</option>
                    </select>
                </div>

                <div class="filter-dropdown">
                    <div class="position-relative">
                    

                        <i class="fa-solid fa-location-dot position-absolute top-50 start-0 translate-middle-y ms-2 text-secondary"></i>
                        <select class="form-select ps-4">
                            <option selected>Hyderabad</option>
                            <option>Delhi</option>
                            <option>Mumbai</option>
                        </select>
                    </div>
                </div>

                <div class="filter-dropdown">
                    <select class="form-select">
                        <option selected>Entry Fee</option>
                        <option>Free</option>
                        <option>Paid</option>
                    </select>
                </div>

                <button class="cta1">Apply Filters</button>
            </div>
        </div>
    </section>


    <section class="teams-section py-5 bg-black text-white">
        <div class="container">

            <div class="d-flex justify-content-between align-items-end mb-5">
                <div class="header-container">
                    <span class="sub-heading"><i class="bi bi-chevron-left"></i> Season 2025 - 26</span>
                    <h2 class="main-heading">All Teams</h2>
                </div>

            </div>

            <div class="row g-4">

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="card-inner">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <img src="{{ asset('assets/frontend/img/chennai.svg') }}" alt="TCS"
                                    class="team-logo">
                                <div class="stats-badge">
                                    <span class="win text-success">W 8</span> — <span class="loss text-danger">L
                                        2</span>
                                </div>
                            </div>
                            <h4 class="team-name">TCS Titans</h4>
                            <p class="company-text">Tata Consultancy Services</p>

                            <div class="captain-box mt-4 pt-3 border-top border-secondary">
                                <label class="text-secondary small">Captain</label>
                                <h5 class="captain-name">Rohit Sharma</h5>
                                <p class="text-secondary small">14 registered players</p>
                            </div>
                            <button class="btn-squad-action w-100 mt-2">View Squad</button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="card-inner">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <img src="{{ asset('assets/frontend/img/rcb.svg') }}" alt="Infosys"
                                    class="team-logo">
                                <div class="stats-badge">
                                    <span class="win text-success">W 7</span> — <span class="loss text-danger">L
                                        3</span>
                                </div>
                            </div>
                            <h4 class="team-name">Infosys Eagles</h4>
                            <p class="company-text">Infosys Technologies</p>

                            <div class="captain-box mt-4 pt-3 border-top border-secondary">
                                <label class="text-secondary small">Captain</label>
                                <h5 class="captain-name">Ajay Kumar</h5>
                                <p class="text-secondary small">13 registered players</p>
                            </div>
                            <button class="btn-squad-action w-100 mt-2">View Squad</button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="card-inner">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <img src="{{ asset('assets/frontend/img/mi.svg') }}" alt="Wipro"
                                    class="team-logo">
                                <div class="stats-badge">
                                    <span class="win text-success">W 6</span> — <span class="loss text-danger">L
                                        4</span>
                                </div>
                            </div>
                            <h4 class="team-name">Wipro Waves</h4>
                            <p class="company-text">Wipro Limited</p>

                            <div class="captain-box mt-4 pt-3 border-top border-secondary">
                                <label class="text-secondary small">Captain</label>
                                <h5 class="captain-name">Suresh Menon</h5>
                                <p class="text-secondary small">15 registered players</p>
                            </div>
                            <button class="btn-squad-action w-100 mt-2">View Squad</button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="card-inner">
                            <div class="d-flex justify-content-between align-items-start mb-4">
                                <img src="{{ asset('assets/frontend/img/srh.svg') }}" alt="Google"
                                    class="team-logo">
                                <div class="stats-badge">
                                    <span class="win text-success">W 9</span> — <span class="loss text-danger">L
                                        2</span>
                                </div>
                            </div>
                            <h4 class="team-name">Google Knights</h4>
                            <p class="company-text">Google India Pvt. Ltd.</p>

                            <div class="captain-box mt-4 pt-3 border-top border-secondary">
                                <label class="text-secondary small">Captain</label>
                                <h5 class="captain-name">Vikram Menon</h5>
                                <p class="text-secondary small">14 registered players</p>
                            </div>
                            <button class="btn-squad-action w-100 mt-2">View Squad</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    @include('front.includes.get-started')


</main>

@include('front.includes.footer')