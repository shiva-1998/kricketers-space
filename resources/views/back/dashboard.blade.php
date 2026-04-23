@include('back.includes.header')

<div class="page-wrapper">
    <div class="page-content">

        {{-- TOP CARDS --}}
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">

            <div class="col">
                <div class="card radius-10 border-start border-0 border-4 border-primary">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Tournaments</p>
                            <h4 class="my-1 text-primary">12</h4>
                        </div>
                        <div class="widgets-icons-2 bg-gradient-primary text-white ms-auto">
                            <i class='bx bx-trophy'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card radius-10 border-start border-0 border-4 border-success">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Teams</p>
                            <h4 class="my-1 text-success">24</h4>
                        </div>
                        <div class="widgets-icons-2 bg-gradient-ohhappiness text-white ms-auto">
                            <i class='bx bx-group'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card radius-10 border-start border-0 border-4 border-info">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Players</p>
                            <h4 class="my-1 text-info">320</h4>
                        </div>
                        <div class="widgets-icons-2 bg-gradient-blues text-white ms-auto">
                            <i class='bx bx-user'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card radius-10 border-start border-0 border-4 border-danger">
                    <div class="card-body d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Total Matches</p>
                            <h4 class="my-1 text-danger">58</h4>
                        </div>
                        <div class="widgets-icons-2 bg-gradient-burning text-white ms-auto">
                            <i class='bx bx-cricket-ball'></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- SECOND ROW --}}
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 mt-3">

            <div class="col">
                <div class="card radius-10 border-start border-0 border-4 border-warning">
                    <div class="card-body">
                        <p class="mb-0 text-secondary">Total Grounds</p>
                        <h4 class="my-1 text-warning">10</h4>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card radius-10 border-start border-0 border-4 border-success">
                    <div class="card-body">
                        <p class="mb-0 text-secondary">Total Revenue</p>
                        <h4 class="my-1 text-success">₹1,25,000</h4>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card radius-10 border-start border-0 border-4 border-info">
                    <div class="card-body">
                        <p class="mb-0 text-secondary">Reports Generated</p>
                        <h4 class="my-1 text-info">35</h4>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card radius-10 border-start border-0 border-4 border-danger">
                    <div class="card-body">
                        <p class="mb-0 text-secondary">Live Matches</p>
                        <h4 class="my-1 text-danger">3</h4>
                    </div>
                </div>
            </div>

        </div>

        {{-- RECENT MATCHES --}}
        <div class="card radius-10 mt-4">
            <div class="card-header">
                <h6 class="mb-0">Recent Matches</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Match ID</th>
                                <th>Teams</th>
                                <th>Ground</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>#M001</td>
                                <td>Team A vs Team B</td>
                                <td>Hyderabad</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td>10 Apr 2026</td>
                            </tr>

                            <tr>
                                <td>#M002</td>
                                <td>Team C vs Team D</td>
                                <td>Vizag</td>
                                <td><span class="badge bg-warning text-dark">Upcoming</span></td>
                                <td>18 Apr 2026</td>
                            </tr>

                            <tr>
                                <td>#M003</td>
                                <td>Team E vs Team F</td>
                                <td>Chennai</td>
                                <td><span class="badge bg-danger">Live</span></td>
                                <td>Today</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- QUICK ACTIONS --}}
        <div class="row mt-4">

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class='bx bx-plus-circle font-30 text-primary'></i>
                        <h6 class="mt-2">Add Tournament</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class='bx bx-group font-30 text-success'></i>
                        <h6 class="mt-2">Add Team</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class='bx bx-user-plus font-30 text-info'></i>
                        <h6 class="mt-2">Add Player</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class='bx bx-calendar font-30 text-danger'></i>
                        <h6 class="mt-2">Schedule Match</h6>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<a href="javaScript:;" class="back-to-top">
    <i class='bx bxs-up-arrow-alt'></i>
</a>

@include('back.includes.footer')