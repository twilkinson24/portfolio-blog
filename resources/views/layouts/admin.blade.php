
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TW - Web Dev</title>
  <meta name="description" content="Taylor Wilkinson is an aspiring web developer">
  <meta name="keywords" content="web developer portfolio, web developer, css, JavaScript, React, ReactJS, Front-End Web Development, PHP, Laravel">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
  crossorigin="anonymous">
  <link href="/css/main.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="./favicon.ico"> <!-- TAB ICON -->

  

</head>
<body>
  <!--header-->
  <header class="text-light">
    <nav class="shadow py-2">
      <div class="container d-flex flex-column flex-sm-row justify-content-between">
        <div class="menu-site-name"><a href="/" class="text-white text-decoration-none"><h3>TW</h3></a></div>
        <ul class="nav-links d-flex">
          <li>
            <a href="#" class="nav-link">Projects</a>
          </li>
          <li>
            <a href="#" class="nav-link">About Me</a>
          </li>
          <li>
            <a href="#" class="nav-link">Blog</a>
          </li>
          <li>
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--/ header-->
  

<!-- contenido aqui -->
@yield('content')


  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!-- custom js -- main.js -->
  <script src="{{ asset('js/main.js') }}"></script>  
  <!-- Plugin ckeditor - Text with format -->
  <script src="//cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>  
  
</body>
</html>
