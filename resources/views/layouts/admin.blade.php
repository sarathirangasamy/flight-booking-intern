<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Flight Booking</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    <!-- Sidebar -->
    <div class="d-flex" id="wrapper">
        <div class="bg-dark border-right text-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 fs-4 fw-bold text-uppercase">
                <i class="fas fa-user-shield"></i> Admin Panel
            </div>
            <div class="list-group list-group-flush">
                <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
                <a href="{{ route('admin.bookings') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="fas fa-plane"></i> Bookings
                </a>
                <a href="{{ route('admin.users') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="fas fa-users"></i> Users
                </a>
                <a href="{{ route('logout') }}" class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-bars"></i></button>
                <span class="ms-auto me-3">Welcome, Admin</span>
            </nav>

            <div class="container-fluid mt-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("wrapper").classList.toggle("toggled");
        });
    </script>

    <style>
        #wrapper {
            display: flex;
        }
        #sidebar-wrapper {
            min-width: 250px;
            max-width: 250px;
            height: 100vh;
            position: fixed;
        }
        #page-content-wrapper {
            margin-left: 250px;
            flex-grow: 1;
        }
        .toggled #sidebar-wrapper {
            margin-left: -250px;
        }
    </style>

</body>
</html>
