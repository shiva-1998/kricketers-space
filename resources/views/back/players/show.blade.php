@include('back.includes.header')



    <div class="page-wrapper">
        <div class="page-content">

            <div class="card shadow-sm border-0">
                <div class="card-body">

                    <h5 class="fw-bold mb-4">Player Full Details</h5>

                    <div class="row">

                        <div class="col-md-4 text-center">
                            <img src="{{ asset($player->profile_pic) }}" class="rounded mb-3"
                                width="150">
                        </div>

                        <div class="col-md-8">

                            <table class="table table-bordered">
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $player->email }}</td>
                                </tr>

                                <tr>
                                    <th>Role</th>
                                    <td>{{ $player->role }}</td>
                                </tr>

                                <tr>
                                    <th>Your Role</th>
                                    <td>{{ $player->your_role }}</td>
                                </tr>

                                <tr>
                                    <th>Batting Style</th>
                                    <td>{{ $player->batting_style }}</td>
                                </tr>

                                <tr>
                                    <th>Bowling Type</th>
                                    <td>{{ $player->bowling_type }}</td>
                                </tr>

                                <tr>
                                    <th>Team Name</th>
                                    <td>{{ $player->team_name }}</td>
                                </tr>

                                <tr>
                                    <th>Team Logo</th>
                                    <td>
                                        <img src="{{ asset($player->team_logo) }}" width="80">
                                    </td>
                                </tr>

                                <tr>
                                    <th>Registered At</th>
                                    <td>{{ $player->created_at }}</td>
                                </tr>

                            </table>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

@include('back.includes.footer')
