
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TW | @yield('title')</title>
  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="web developer portfolio, web developer, css, JavaScript, React, ReactJS, Front-End Web Development, PHP, Laravel">

<link rel="shortcut icon" href="{{ URL::asset('./img/logo/icon.ico') }}" type="image/x-icon">

  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
  crossorigin="anonymous">
   <!-- Google Fonts -->
   <link href='https://fonts.googleapis.com/css?family=Kalam|Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
  <link href="/css/main.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="./favicon.ico"> <!-- TAB ICON -->

</head>
<body>
  <!--header-->
  <header class="text-light">
    <nav class="shadow py-2">
      <div class="container d-flex flex-column flex-sm-row justify-content-between">
        <div class="menu-site-name" id="site-name-lg">
          <a href="/" class="text-decoration-none"><h3 class="text-white font-weight-bold">TW</h3></a>
        </div>
        <div class="menu-site-name" id="site-name-sm">
            <a href="/" class="text-decoration-none"><h3 class="text-white">Taylor Wilkinson</h3></a>
          </div>
        <ul class="nav-links d-flex">
          <li>
            <a href="/#projects" class="nav-link scroll">Projects</a>
          </li>
          <li>
            <a href="/#about-me" class="nav-link scroll">About Me</a>
          </li>
          <li>
          <a href="{{ URL::asset('blog') }}" class="nav-link">Blog</a>
          </li>
          <li>
            <a href="{{ URL::asset('contact') }}" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--/ header-->

<!-- content -->
@yield('content')
<!-- end content -->

<footer class="text-center text-light py-3">
     Taylor Wilkinson &copy; <?php echo date("Y"); ?>
</footer>
     <!-- Scripts -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
