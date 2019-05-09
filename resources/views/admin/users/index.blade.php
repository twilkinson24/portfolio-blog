
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
      <div class="container d-flex justify-content-between">
        <div class="menu-site-name"><h3>TW</h3></div>
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
 
       <section class="height-basic">
           <div class="container" style="margin-top: 180px; margin-bottom: 180px;">
               <div class="row">
                   <div class="panel panel-default">
                    
                    
                      <div class="panel-heading">
                           <span class="black-font">Usuarios</span>
                           <div class="pull-right">
                              <!-- CREATE USER -->
                           </div>
                      </div>
                           <div class="panel-body">
                                <div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper form-inline no-footer">
                                     <div class="table-responsive overflowFixed">
                                          <table id="tableWithDynamicRows" class="table table-hover demo-table-dynamic dataTable no-footer" role="grid" aria-describedby="tableWithDynamicRows_info">
                                               <thead>
                                                    <tr role="row">
                                                         <th class="col-md-3">Nombre</th>
                                                         <th class="col-md-4">Correo</th>
                                                         <th class="col-md-2">Acciones</th>
                                                    </tr>
                                               </thead>
                                               <tbody>
                                               @foreach($users as $user)
                                               <tr role="row" class="odd">
                                                    <td class="v-align-middle">
                                                         <p>
                                                              {{ $user->name }}
                                                         </p>
                                                    </td>
                                                    <td class="v-align-middle">
                                                         <p>
                                                              {{ $user->email }}
                                                         </p>
                                                    </td>
                                                    <td class="v-align-middle">
                                                        <!-- Botones de accion -->

                                                    </td>
                                               </tr>
                                               @endforeach
                                               </tbody>
                                          </table>
                                          <div class="text-center">{!! $users->render() !!}</div>
                                     </div>
                                </div>
                           </div>
                      </div>
                 </div>
            </div>
       </section>
  

  





  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>
