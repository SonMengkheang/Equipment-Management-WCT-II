<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/easion.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--     css-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <!--    javascript-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <title>Equipment Dashboard</title>
</head>

<body>
    <div class="dash">

    <div class="dash-nav dash-nav-dark">
        <header>
            <a href="#" class="menu-toggle">
                <i class="fas fa-bars"></i>
            </a>
            <a href="{{ url('/') }}" class="easion-logo"><i class="fas fa-jedi"></i> <span>Equipment</span></a>
        </header>

        <nav class="dash-nav-list">
            <a href="{{url('/dashboard')}}" class="dash-nav-item">
                <i class="fas fa-home"></i> Dashboard
            </a>

            <a href="{{route('classes.index')}}" class="dash-nav-item">
                <i class="fas fa-school"></i> Your Class
            </a>

            <a href="{{route('products.index')}}" class="dash-nav-item">
                <i class="fas fa-wrench"></i> Item
            </a>

            <a href="{{url('/dashboard/users')}}" class="dash-nav-item">
                <i class="fas fa-user-graduate"></i> Users
            </a>

            <a href="{{url('/dashboard/borrowers')}}" class="dash-nav-item">
                <i class="fas fa-user-astronaut"></i> Borrower
                {{--                fas fa-address-card--}}
            </a>

            <a href="#" class="dash-nav-item">
                <i class="fas fa-info"></i> About
            </a>

        </nav>
    </div>
    <div class="dash-app">
        <header class="dash-toolbar">

                <a href="#" class="menu-toggle">
                <i class="fas fa-bars"></i>
            </a>
            <a href="#" class="searchbox-toggle">
                <i class="fas fa-search"></i>
            </a>

            <form class="searchbox" action="#">
                <a href="#" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                <input type="text" class="searchbox-input" placeholder="type to search">
            </form>

            <div class="tools">
                <a href="https://github.com/subet/easion" target="_blank" class="tools-item">
                    <i class="fab fa-github"></i>
                </a>
                <a href="#" class="tools-item">
                    <i class="fas fa-bell"></i>
                    <i class="tools-item-count">4</i>
                </a>
                <div class="dropdown tools-item">
                    <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </div>
            </div>

        </header>

        <main class="dash-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
    </div>

    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/easion.js')}}"></script>
<script src="{{asset('assets/js/chart-js-config.js')}}"></script>

</body>
</html>
