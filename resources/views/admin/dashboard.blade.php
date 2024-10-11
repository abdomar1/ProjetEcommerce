<!DOCTYPE html>
<html lang="en">
    <head>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{ url('css/admin/styledashboard.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Responsive Dashboard Design #2 </title>
    </head>
    
    <body>
    
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="#" class="logo">
                <img src="{{url("img/axenet.png")}}" width="50px" >
                <div class="logo-name"><span>Iaxe</span>Net</div> 
            </a>
            <ul class="side-menu">
                <li class="active"><a href="#"><i class='bx bxs-dashboard'></i>Dashboard</a></li>
                <li><a href="{{route("categories.index")}}"><i class='bx bx-store-alt'></i>categories</a></li>
                <li ><a href="{{route("produits.index")}}"><i class='bx bx-analyse'></i>produit</a></li>
                <li><a href="#"><i class='bx bx-message-square-dots'></i>Tickets</a></li>
                <li><a href="#"><i class='bx bx-group'></i>Users</a></li>
                <li><a href="#"><i class='bx bx-cog'></i>Settings</a></li>
            </ul>
            <ul class="side-menu">
                <li>
                    <a href="#" class="logout">
                        <i class='bx bx-log-out-circle'></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <!-- End of Sidebar -->
    
        <!-- Main Content -->
        <div class="content">
            <!-- Navbar -->
            <nav>
                <i class='bx bx-menu'></i>
                <form action="#">
                    <div class="form-input">
                        <input type="search" placeholder="Search...">
                        <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                    </div>
                </form>
                <input type="checkbox" id="theme-toggle" hidden>
                <label for="theme-toggle" class="theme-toggle"></label>
                <a href="#" class="notif">
                    <i class='bx bx-bell'></i>
                    <span class="count">12</span>
                </a>
                <a href="#" class="profile">
                    <img src="">
                </a>
            </nav>
    
            <!-- End of Navbar -->
    
            <main>
                @yield('content')
            </main>
    
        </div>
    
        <script src="{{url('js/admin/admin.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>