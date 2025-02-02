<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AID OF ANGELS</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/userprofile.css">
    <link rel="stylesheet" href="/css/forum.css">
    <link rel="stylesheet" href="/css/faq.css">
    <link rel="stylesheet" href="/css/chat.css">
    <link rel="stylesheet" href="/css/adminchat.css">
    <link rel="stylesheet" href="/css/calendar.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js   "></script>
    <!-- FullCalendar CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.css" rel="stylesheet">

<!-- FullCalendar JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.2.0/fullcalendar.min.js"></script>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Bundle JS (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script> --}}



</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <img src="/img/logo.png" alt="Angel Logo" class="angel-logo">
            {{-- <div class="profile-section">
                <a href="{{ route('loggedIn.userprofile') }}" class="profile-link" onclick="showLoading('userprofile.html')">
                    <img src="/img/modpic.jpg" alt="Profile" class="profile-pic">
                    <div class="profile-details">
                        <p><strong>Joseph Chan</strong></p>
                        <p>Father</p>
                    </div>
                </a>
            </div> --}}

            <ul class="menu">
                {{-- <li><a href="{{ route('admin.dashboard') }}" > Profile</a></li> --}}
                <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-chart-pie"></i> Report</a></li>
                <li><a href="{{ route('admin.forum') }}"><i class="fas fa-comments"></i> Forum</a></li>
                <li><a href="{{ route('admin.fullcalendar') }}"><i class="fas fa-calendar-alt"></i> FullCalendar</a></li>
                <li><a href="{{ route('appointments.index') }}"> Appointments</a></li>
                <li><a href="{{ route('admin.clients') }}"> Clients</a></li>
                <li><a href="{{ route('admin.chats') }}"> Chats</a></li>
            </ul>

            <div class="bottom-container">
                <ul class="menu">
                    <li><a href="{{ route('admin.logout') }}"method="GET"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                </ul>
            </div>
        </div>

        {{-- <div class="headers">
            <div class="header">
                <div class="icons">


                    <i class="bi bi-gear settings-icon" onclick="toggleSettingsDropdown()"></i>
                </div>
            </div>
        </div> --}}
        <!-- Main Content -->
        <main class="py-4">
            <div class="main-content">
                @yield('content')


                <!-- Content from the specific page -->



            </div>
        </main>
    </div>
</body>
</html>
