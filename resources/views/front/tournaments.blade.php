@include('front.includes.header-links')

@include('front.includes.header')

<main class="inner_pages_main">

    <section class="innerpage-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="innerpage_banner_heading">Compete in
                        <br>
                        <span>Tournaments.</span>
                    </h1>
                    <p>Join leagues, challenge teams, and play your way to the top.</p>

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



    <section class="tournaments-section py-5 bg-black">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-5">
                <div class="header-group">
                    <span class="sub-heading"><i class="bi bi-chevron-left"></i> Compete</span>
                    <h2 class="main-heading ">Tournaments</h2>
                </div>
                <!-- <button class="cta2">View All</button> -->
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="tournament-card">
                        <div class="card-inner">
                            <div class="d-flex justify-content-between mb-4">
                                <img src="{{ asset('assets/frontend/img/mens-worldcup.svg') }}" alt="League Logo" class="league-icon">
                                <span class="status-badge open">Open</span>
                            </div>
                            <div class="date-chip mb-3">10 - 6 - 2026 - Tuesday</div>

                            <h4 class="tournament-name">CCL Premier Cup 2025</h4>
                            <p class="location-text"><i class="bi bi-geo-alt"></i> Delhi NCR — Multiple Venues</p>

                            <div class="tournament-stats d-flex mt-4">
                                <div class="stat-box"><span>₹12,000</span><small>Entry Fee</small></div>
                                <div class="stat-box"><span>T20</span><small>Format</small></div>
                                <div class="stat-box border-0"><span>32/40</span><small>Teams</small></div>
                            </div>

                            <button class="cta1 w-100 mt-3">Register Team</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="tournament-card">
                        <div class="card-inner">
                            <div class="d-flex justify-content-between mb-4">
                                <img src="{{ asset('assets/frontend/img/ipl.svg') }}" alt="League Logo" class="league-icon"> <span class="status-badge soon">Soon</span>
                            </div>
                            <div class="date-chip mb-3">10 - 6 - 2026 - Tuesday</div>

                            <h4 class="tournament-name">Monsoon Bash 2025</h4>
                            <p class="location-text"><i class="bi bi-geo-alt"></i> Mumbai — Wankhede Complex</p>

                            <div class="tournament-stats d-flex mt-4">
                                <div class="stat-box"><span>₹8,000</span><small>Entry Fee</small></div>
                                <div class="stat-box"><span>T10</span><small>Format</small></div>
                                <div class="stat-box border-0"><span>1/24</span><small>Teams</small></div>
                            </div>

                            <button class="cta1 w-100 mt-3">Register Team</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="tournament-card">
                        <div class="card-inner">
                            <div class="d-flex justify-content-between mb-4">
                                <img src="{{ asset('assets/frontend/img/wpl.svg') }}" alt="League Logo" class="league-icon">


                                <span class="status-badge live">Live</span>
                            </div>
                            <div class="date-chip mb-3">10 - 6 - 2026 - Tuesday</div>

                            <h4 class="tournament-name">Spring Series Championship</h4>
                            <p class="location-text"><i class="bi bi-geo-alt"></i> Bangalore — Chinnaswamy Area</p>

                            <div class="tournament-stats d-flex mt-4">
                                <div class="stat-box"><span>₹15,000</span><small>Entry Fee</small></div>
                                <div class="stat-box"><span>ODI</span><small>Format</small></div>
                                <div class="stat-box border-0"><span>16/16</span><small>Teams</small></div>
                            </div>

                            <button class="cta-closed w-100 mt-3" disabled>Registrations Closed</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    @include('front.includes.get-started')


</main>

@include('front.includes.footer')