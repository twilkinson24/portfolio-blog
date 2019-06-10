
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TW - Web Dev</title>
  <meta name="description" content="Taylor Wilkinson is an aspiring web developer">
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
        <div class="menu-site-name"><a href="/" class="text-decoration-none"><h3 class="text-white">TW</h3></a></div>
        <ul class="nav-links d-flex">
          <li>
            <a href="{{ URL::asset('blog') }}" class="nav-link">Blog</a>
          </li>
          <li>
            <a href="{{ url('/logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
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
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script type="text/javascript" src="{{URL::asset('js/main.js')}}"></script>

</body>
</html>
