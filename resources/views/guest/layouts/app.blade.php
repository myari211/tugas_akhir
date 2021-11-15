<html>
<head>
    @include('master.css')
    <style stype="text/css">
        #show_bg_2 {
            background-image:
            linear-gradient(to right, rgba(246, 211, 101, 0.5), rgba(243, 99, 59, 0.6)),
            url('{{ asset("images/ball.webp") }}');
            width: 100%;
            height: 800px;
            background-size: cover;
            color: white;
            padding: 20px;
        }

        #show_bg_2_mobile {
            background-image:
            linear-gradient(to right, rgba(246, 211, 101, 0.5), rgba(243, 99, 59, 0.6)),
            url('{{ asset("images/ball.webp") }}');
            width:100%;
            height:600px;
            background-size: cover;
            color: white;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="d-none d-lg-block">
        <nav class="navbar navbar-expand-lg navbar-light white fixed-top pt-3 pb-3 z-depth-0">
            <div class="container d-flex justify-content-between">
                <div>
                    
                </div>
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item mr-4">
                            <a class="nav-link" href="">Home</a>
                        </li>
                        <li class="nav-item ml-4 mr-4">
                            <a class="nav-link" href="">History</a>
                        </li>
                        <li class="nav-item mr-4 ml-4">
                            <a class="nav-link" href="">Profile</a>
                        </li>
                        <li class="nav-item ml-4">
                            <a class="nav-link" href="">Sub Mission</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <span class="text-end">Have an account ? <a href="/login">Sign In</a></span>
                </div>
            </div>
        </nav>
    </div>
    <div class="d-block d-lg-none">
        <nav class="navbar navbar-expand-lg navbar-dark z-depth-0">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="btn z-depth-0 p-0" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon deep-orange"></span>
            </button>
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
              <!-- Links -->
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link deep-orange-text" href="#">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link deep-orange-text" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link deep-orange-text" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deep-orange-text" href="#">Sub Mission</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link deep-orange-text" href="/login">Sign In</a>
                </li>
            </ul>
              <form class="form-inline">
                <div class="md-form my-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
              </form>
            </div>
          </nav>
    </div>
    @yield('content')
    @include('master.js')
</body>
</html>