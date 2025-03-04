<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Flight Booking</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* Sidebar styles */
        #wrapper {
            display: flex;
        }
        #sidebar-wrapper {
            width: 250px;
            min-height: 100vh;
            background: #343a40;
            color: white;
            transition: all 0.3s ease-in-out;
        }
        #sidebar-wrapper .list-group-item {
            background: #343a40;
            color: white;
            border: none;
        }
        #sidebar-wrapper .list-group-item:hover {
            background: #495057;
        }
        #page-content-wrapper {
            flex-grow: 1;
            transition: all 0.3s ease-in-out;
        }
        /* Toggle behavior */
        .toggled #sidebar-wrapper {
            margin-left: -250px;
        }
        .toggled #page-content-wrapper {
            margin-left: 0;
        }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            #sidebar-wrapper {
                margin-left: -250px;
                position: absolute;
                z-index: 1000;
            }
            .toggled #sidebar-wrapper {
                margin-left: 0;
            }
        }

        hr {
            margin: 0;
            border: 0;
            height: 1px;
            background-color: #ccc;
        }
    </style>
</head>
<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
            <div  class="sidebar-heading text-center py-2 fs-6 fw-bold text-uppercase">
                <i class="fas fa-user-shield"></i> Admin Panel
            </div>
            <div class="list-group list-group-flush">

                <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-dashboard"></i> Dashboard
                </a>
                <hr>

                <a href="{{ route('service') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-wrench"></i> Service
                </a>
                <hr>

                <a href="{{ route('admin.bookings') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-plane"></i> Bookings
                </a>
                <hr>

                <a href="{{ route('admin.users') }}" class="list-group-item list-group-item-action">
                    <i class="fas fa-users"></i> Users
                </a>
                <hr>

                <a href="{{ route('logout') }}" class="dropdown-item list-group-item list-group-item-action" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
         
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
    
            </div>

        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <span class="ms-auto me-3">Welcome, Admin</span>
            </nav>

            <div class="container-fluid mt-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- JavaScript for Sidebar Toggle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        document.addEventListener("DOMContentLoaded", function () {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 3000
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: "{{ session('error') }}",
                    showConfirmButton: true
                });
            @endif
        });


        document.getElementById("menu-toggle").addEventListener("click", function() {
            document.getElementById("wrapper").classList.toggle("toggled");
        });
    </script>


</body>
</html>
