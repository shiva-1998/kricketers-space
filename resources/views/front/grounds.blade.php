@include('front.includes.header-links')

@include('front.includes.header')

<main class="inner_pages_main">

    <section class="innerpage-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="innerpage_banner_heading">RESERVE YOUR ARENA.
                    <br>
                    <span>OWN THE GAME.</span>
                    </h1>
                    <p>Seamless ground booking with real-time slots and instant confirmation..</p>

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


    <section class="grounds-section py-5 bg-black text-white">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <div>
                    <span class=" clr_green sub-heading">
                        <i class="bi bi-chevron-left small"></i> premium venues
                    </span>
                    <h2 class="main-heading">Book a Ground</h2>
                </div>
           
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="ground-card">
                        <img src="{{ asset('assets/frontend/img/dlff.webp') }}" class="card-img-top"
                            alt="DLF Ground">
                        <div class="card-body">
                            <span class="status-tag available"><i class="bi bi-chevron-left"></i> Available</span>
                            <h4 class="card-title mt-2">DLF Cricket Ground</h4>
                            <p class="location-text"><i class="bi bi-geo-alt-fill"></i> DLF Phase 3, Gurugram</p>

                            <p class="slot-label mt-3">Pick a time slot — Mar 25</p>
                            <div class="time-slots mb-4">
                                <span class="slot active">9 - 11 AM</span>
                                <span class="slot active">11 - 1 PM</span>
                                <span class="slot disabled">1 - 3 PM</span>
                                <span class="slot active">3 - 5 PM</span>
                            </div>
                            <button class="btn-confirm cta1 w-100">Confirm Booking</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="ground-card">
                        <img src="{{ asset('assets/frontend/img/ambedkar-stadium.webp') }}" class="card-img-top"
                            alt="Ambedkar Stadium">
                        <div class="card-body">
                            <span class="status-tag full"><i class="bi bi-chevron-left"></i> Mostly Full</span>
                            <h4 class="card-title mt-2">Ambedkar Stadium</h4>
                            <p class="location-text"><i class="bi bi-geo-alt-fill"></i> ITO, New Delhi</p>

                            <p class="slot-label mt-3">Pick a time slot — Mar 25</p>
                            <div class="time-slots mb-4">
                                <span class="slot disabled">1 - 3 PM</span>
                                <span class="slot disabled">1 - 3 PM</span>
                                <span class="slot disabled">1 - 3 PM</span>
                                <span class="slot active">3 - 5 PM</span>
                            </div>
                            <button class="btn-confirm cta1 w-100">Confirm Booking</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="ground-card">
                        <img src="{{ asset('assets/frontend/img/dlf-ground.webp') }}" class="card-img-top"
                            alt="DLF Ground">
                        <div class="card-body">
                            <span class="status-tag available"><i class="bi bi-chevron-left"></i> Available</span>
                            <h4 class="card-title mt-2">DLF Cricket Ground</h4>
                            <p class="location-text"><i class="bi bi-geo-alt-fill"></i> DLF Phase 3, Gurugram</p>

                            <p class="slot-label mt-3">Pick a time slot — Mar 25</p>
                            <div class="time-slots mb-4">
                                <span class="slot active">9 - 11 AM</span>
                                <span class="slot active">11 - 1 PM</span>
                                <span class="slot disabled">1 - 3 PM</span>
                                <span class="slot active">3 - 5 PM</span>
                            </div>
                            <button class="btn-confirm cta1 w-100">Confirm Booking</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    @include('front.includes.get-started')


</main>

@include('front.includes.footer')