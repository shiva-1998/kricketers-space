<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>

    <h2>Welcome, {{ $user->email }}</h2>

    <p>Role: {{ $user->role }}</p>
    <p>Your Role: {{ $user->your_role }}</p>

    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('user.logout.submit') }}" method="POST" style="display: none;">
        @csrf
    </form>

</body>

</html>
