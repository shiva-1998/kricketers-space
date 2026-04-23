@include('back.includes.header')

<div class="page-wrapper">
    <div class="page-content">

        <!-- Captain Info -->
        <div class="card mb-3">
            <div class="card-body text-center">

                <h4 class="mb-3">Team Captain Details</h4>

                <!-- Captain Image -->
                @if ($player->profile_pic)
                    <img src="{{ asset($player->profile_pic) }}" width="100" height="100" class="rounded-circle mb-3"
                        style="object-fit:cover;">
                @else
                    <img src="{{ asset('default-user.png') }}" width="100" height="100"
                        class="rounded-circle mb-3">
                @endif

                <p><strong>Email:</strong> {{ $player->email }}</p>
                <p><strong>Role:</strong> {{ $player->role }}</p>
                <p><strong>Team Name:</strong> {{ $player->team_name }}</p>
                <p><strong>Batting Style:</strong> {{ $player->batting_style }}</p>
                <p><strong>Bowling Type:</strong> {{ $player->bowling_type }}</p>

            </div>
        </div>

        <!-- Team Members (Static for now) -->
        <div class="card">
            <div class="card-header bg-dark text-white">
                Team Members
            </div>

            <div class="card-body">

                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Player Name</th>
                            <th>Role</th>
                            <th>Batting</th>
                            <th>Bowling</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rohit Sharma</td>
                            <td>Batsman</td>
                            <td>Right-hand</td>
                            <td>Off-spin</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Virat Kohli</td>
                            <td>Batsman</td>
                            <td>Right-hand</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Hardik Pandya</td>
                            <td>All-rounder</td>
                            <td>Right-hand</td>
                            <td>Fast</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Jasprit Bumrah</td>
                            <td>Bowler</td>
                            <td>-</td>
                            <td>Fast</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ravindra Jadeja</td>
                            <td>All-rounder</td>
                            <td>Left-hand</td>
                            <td>Spin</td>
                        </tr>
                    </tbody>

                </table>

                <!-- Back Button -->
                <div class="text-end">
                    <a href="{{ url()->previous() }}" class="btn btn-dark">
                        Back
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

@include('back.includes.footer')
