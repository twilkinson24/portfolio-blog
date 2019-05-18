
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
      <div class="container d-flex justify-content-between" id="nav-flex">
        <div class="menu-site-name" id="desktop-site-name"><h3>TW</h3></div>
        <div class="menu-site-name" id="mobile-site-name"><h3>Taylor Wilkinson</h3></div>
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
  <section class="jumbotron rounded-0 mb-0 text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Taylor Wilkinson</h1>
      <p class="lead">Michigander and passionate web developer looking for opportunities to gain experience and collaborate with awesome people.</p>
      <p>
        <a href="#" class="btn btn-custom text-custom-dark border my-2">My Work</a>
        <a href="/contact" class="btn btn-custom text-custom-dark border my-2">Get In Touch</a>
      </p>
      <ul class="jumbotron-social-icons d-flex justify-content-around mx-auto">
          <li>
               <a href="https://github.com/coding4tacos/" class="text-custom-dark" target="_blank"><i class="fab fa-github"></i> </a>
          </li>
          <li>
               <a href="https://twitter.com/coding4tacos/" class="text-custom-dark" target="_blank"> <i class="fab fa-twitter"></i> </a>
          </li>
          <li>
               <a href="https://codepen.io/coding4tacos/" class="text-custom-dark" target="_blank"> <i class="fab fa-codepen"></i> </a>
          </li>
          <li>
               <a href="https://www.linkedin.com/in/taylor-wilkinson-a6478229/"  class="text-custom-dark" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          </li>
     </ul>
    </div>
    <div class="down-icon rounded text-center">
      <a href="#">
        <i class="fas fa-caret-down p-3 rounded-circle text-custom-dark"></i>
      </a>
    </div>
  </section>

  <section class="projects bg-light">
    <div class="text-center">
      <h3 class="py-3">Some of my recent projects</h3>
    </div>
    <div class="container py-3">
      <div class="row d-flex flex-column flex-md-row justify-content-center text-center" id="project-cards">
        <!-- New Card -->
        <div class="custom-col-4 card shadow">      
          <a href="#" data-toggle="modal" data-target="#exampleModal1">
          <img class="project-pic" src="/img/recipes.png" alt="share recipes project">
          <h3 class="project-name">Share Recipes</h3>
          </a> 

        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Share Recipes</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-5 d-flex justify-content-center flex-column">
                      <img class="project-pic" src="/img/recipes.png" alt="share recipes project">
                    </div>
                    <div class="col-md-7">
                      <p class="project-modal-desc text-left">
                        A web app for people who want to share recipes. The main purpose of this project was to better understand MVC and improve my PHP skills.
                      </p>
                      <p class="tech-used-modal text-left">
                        <span class="font-weight-bold">Tools:</span> PHP
                      </p>
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!-- New Card -->
        <div class="custom-col-4 card shadow">
            <a href="#" data-toggle="modal" data-target="#exampleModal2">
            <img class="project-pic" src="/img/weatherwatcher.png" alt="weather watcher project">
            <h3 class="project-name">Weather Watcher</h3>
            </a> 
  
          </div>
  
          <!-- Modal -->
          <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Weather Watcher</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-5 d-flex justify-content-center flex-column">
                        <img class="project-pic" src="/img/weatherwatcher.png" alt="share recipes project">
                      </div>
                      <div class="col-md-7">
                        <p class="project-modal-desc text-left">
                            A front-end web app for checking the weather. This was one of my first React projects built from scratch. The app gets data from the <a href="https://openweathermap.org/" target="_blank">Open Weather Map API</a>.
                        </p>
                        <p class="tech-used-modal text-left">
                          <span class="font-weight-bold">Tools:</span> JavaScript, React
                        </p>
                      </div>
                    </div>
  
                  </div>
                  <div class="modal-footer">
                    <a href="https://coding4tacos.github.io/" class="btn btn-primary" target="_blank">See it in action!</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          
          <!-- New Card -->
          <div class="custom-col-4 card shadow">
            hhh
          </div>
      </div> <!-- End row -->
    </div>
  </section>
  <!-- ABOUT ME -->
  <section class="about-me">
      <div class="container">
          <div class="text-center about-icon">
              <h3 class="pb-3"><i class="fas fa-user"></i></h3>
          </div>
        <div class="row d-flex justify-content-center">
          <div class="avatar-wrap">
            <img src="img/avatar.jpg"  class="rounded-circle max250" alt="Taylor Wilkinson - Web Developer">
          </div>
          <div class="col-md-8 d-flex justify-content-center flex-column">
            <p class="lead text-center text-md-left">A little more about Taylor Wilkinson</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quidem laudantium ab error tempore fuga dicta labore reprehenderit, eius et earum, inventore quasi iusto eaque molestiae ad sapiente laborum sint.</p>
            <p class="text-center text-md-left"><a href="#">My Resume</a> | <a href="/contact">Contact</a></p>
          </div>
        </div>
      </div>
  </section>

  
  


<footer class="text-center text-light py-3">
  Taylor Wilkinson &copy; <?php echo date("Y"); ?>
</footer>


  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
