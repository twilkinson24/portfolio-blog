
@extends('layouts.public')
@section('content')
    
  <!--/ header-->
  <section class="jumbotron rounded-0 mb-0 text-center">
    <div class="container">
      <h1 class="jumbotron-heading text-custom-dark" id="welcome-name">Taylor Wilkinson</h1>
      <p class="lead">Passionate web developer looking for opportunities to gain experience and collaborate with awesome people.</p>
      <p class="jumbo-btns">
        <a href="#" class="btn btn-custom shadow-sm text-custom-dark border my-2">My Work</a>
        <a href="/contact" class="btn btn-custom shadow-sm text-custom-dark border my-2">Get In Touch</a>
      </p>
      <ul class="jumbotron-social-icons d-flex justify-content-around mx-auto">
          <li>
               <a href="https://github.com/coding4tacos/" class="text-custom-dark" target="_blank"><i class="fab fa-github"></i> </a>
          </li>
          <li>
              <a href="https://www.linkedin.com/in/taylor-wilkinson-a6478229/"  class="text-custom-dark" target="_blank"><i class="fab fa-linkedin-in"></i></a>
         </li>
         <li>
            <a href="https://codepen.io/coding4tacos/" class="text-custom-dark" target="_blank"> <i class="fab fa-codepen"></i> </a>
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
      <h3 class="py-3 text-custom-dark">Some of my recent projects</h3>
    </div>
    <div class="container py-3">
      <div class="row d-flex flex-column flex-md-row justify-content-center text-center" id="project-cards">
        <!-- New Card -->
        <div class="custom-col-4 card shadow">      
          <a href="#" data-toggle="modal" data-target="#exampleModal1">
          <img class="project-pic" src="/img/recipes.png" alt="share recipes project">
          <h3 class="project-name text-custom-dark">Share Recipes</h3>
          </a> 

        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-custom-dark" id="exampleModalLongTitle">Share Recipes</h5>
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
        <div class="row d-flex justify-content-center">
          <div class="avatar-wrap m-3">
            <img src="img/avatar.jpg"  class="rounded-circle shadow-sm p-1 max250" alt="Taylor Wilkinson - Web Developer">
          </div>
          <div class="col-md-8 d-flex h-100 justify-content-center flex-column">
            <p class="lead text-center text-md-left my-3 font-weight-bold text-custom-dark">A little more about Taylor Wilkinson</p>
            <p class="lead text-left about-me-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias quidem laudantium ab error tempore fuga dicta labore reprehenderit, eius et earum, inventore quasi iusto eaque molestiae ad sapiente laborum sint.</p>
            <p class="text-center text-md-left"><a href="#">My Resume</a> | <a href="/contact">Contact</a></p>
            <ul class="social-icons list-unstyled mx-auto m-md-0 col-8 col-md-6 d-flex justify-content-between p-0">
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
        </div>
      </div>
  </section>

@endsection
