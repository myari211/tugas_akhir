<html>
<head>
    @include('master.css')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light white fixed-top pt-3 pb-3">
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
    @yield('content')
    @include('master.js')
</body>
</html>