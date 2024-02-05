<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="container">
    <div class="bg-primary p-4 text-white">
        <h3>The Lewis College</h3>
        <p>Sorsogon City</p>
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/our_story') }}">Our Story</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact_us') }}">Contact Us</a>
                </li>                
            </ul>
        </div>
      </nav>

      <div>
           @yield('content')
      </div>

      <div class="p-4 text-center">2024 Copyright. All rights reserved.</div>
</body>
</html>