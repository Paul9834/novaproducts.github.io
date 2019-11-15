<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - ProyectoDB</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<style>
table tr:nth-child(even) {

  background-color: ##0069c0;

}
table tr:nth-child(odd) {
 background-color: #2196f3;
color: white;
}
table th {
  border-collapse: collapse;
  background-color: #f44336;
  color: white;
}
th, td {
  padding: 15px;
}
</style>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">NOVA PRODUCTS</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">INICIO</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">LISTADO DE PRODUCTOS</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container"><img class="img-fluid d-block mx-auto mb-5" data-aos="fade-down" src="assets/img/logo%20final.png" style="width: 779px;margin: -31px;padding: 20px;">
            <h1></h1>
            <hr class="star-light">
            <h2 class="font-weight-light mb-0">Productos por venta de catálogo.</h2>
        </div>
    </header>
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">productos</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-1">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/cabin.png"></a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-2">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/cake.png"></a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-3">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/circus.png"></a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-4">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/game.png"></a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-5">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/safe.png"></a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a class="d-block mx-auto portfolio-item" data-toggle="modal" href="#portfolio-modal-6">
                        <div class="d-flex portfolio-item-caption position-absolute h-100 w-100">
                            <div class="my-auto portfolio-item-caption-content w-100 text-center text-white"><i class="fa fa-search-plus fa-3x"></i></div>
                        </div><img class="img-fluid" src="assets/img/portfolio/submarine.png"></a>
                </div>
            </div>
        </div>
    </section>
    <section id="productos en listado">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">productos en listado</h2>

<?php 
$link = mysqli_connect("35.199.40.228", "paul9834", "paul9834", "politecnico");  

$sql = "SELECT * FROM producto"; 

if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>id</th>"; 
        echo "<br><br/>";
        echo "<th>nombre</th>"; 
        echo "<th>categoria</th>"; 
        echo "<th>fechaingreso</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['nombre']."</td>"; 
            echo "<td>".$row['categoria']."</td>"; 
            echo "<td>".$row['fechaingreso']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($link); 
?> 
            <hr class="star-dark mb-5">
            
        </div>
    </section>


  <section id="productos en listado">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Tipos de Productos</h2>

<?php 
$link = mysqli_connect("35.199.40.228", "paul9834", "paul9834", "politecnico"); 

$sql = "SELECT * FROM categoria"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>id</th>"; 
        echo "<th>nombre</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['nombre']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($link); 
?> 
            <hr class="star-dark mb-5">
            
        </div>
    </section>


 <section id="Perfumes en Inventario">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Perfumes en Inventario Mes de Mayo</h2>

<?php 
$link = mysqli_connect("35.199.40.228", "paul9834", "paul9834", "politecnico");  

$sql = "SELECT *  FROM producto WHERE MONTH(fechaingreso) = 5 and categoria = 1"; 

if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>id</th>"; 
        echo "<br><br/>";
        echo "<th>nombre</th>"; 
        echo "<th>categoria</th>"; 
        echo "<th>fechaingreso</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['nombre']."</td>"; 
            echo "<td>".$row['categoria']."</td>"; 
            echo "<td>".$row['fechaingreso']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($link); 
?> 
            <hr class="star-dark mb-5">
            
        </div>
    </section>


<section id="Perfumes en Inventario">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Ropa en Inventario Mes de Mayo</h2>

<?php 
$link = mysqli_connect("35.199.40.228", "paul9834", "paul9834", "politecnico");  

$sql = "SELECT *  FROM producto WHERE MONTH(fechaingreso) = 8 and categoria = 2"; 

if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>id</th>"; 
        echo "<br><br/>";
        echo "<th>nombre</th>"; 
        echo "<th>categoria</th>"; 
        echo "<th>fechaingreso</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['nombre']."</td>"; 
            echo "<td>".$row['categoria']."</td>"; 
            echo "<td>".$row['fechaingreso']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($link); 
?> 
            <hr class="star-dark mb-5">
            
        </div>
    </section>








<section id="Perfumes en Inventario">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Lista de Vendedores Activos</h2>

<?php 
$link = mysqli_connect("35.199.40.228", "paul9834", "paul9834", "politecnico");  

$sql = "SELECT *  FROM vendedores"; 

if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>id</th>"; 
        echo "<th>nombre</th>"; 
        echo "<th>apellido</th>"; 
         echo "<th>identificacion</th>"; 
          echo "<th>celular</th>"; 
           echo "<th>email</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['nombre']."</td>"; 
            echo "<td>".$row['apellido']."</td>"; 
            echo "<td>".$row['identificacion']."</td>"; 
            echo "<td>".$row['celular']."</td>"; 
            echo "<td>".$row['email']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($link); 
?> 
            <hr class="star-dark mb-5">
            
        </div>
    </section>








  <section id="productos en listado">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Tipos de Productos</h2>

<?php 
$link = mysqli_connect("35.199.40.228", "paul9834", "paul9834", "politecnico"); 

$sql = "SELECT * FROM categoria"; 
if ($res = mysqli_query($link, $sql)) { 
    if (mysqli_num_rows($res) > 0) { 
        echo "<table>"; 
        echo "<tr>"; 
        echo "<th>id</th>"; 
        echo "<th>nombre</th>"; 
        echo "</tr>"; 
        while ($row = mysqli_fetch_array($res)) { 
            echo "<tr>"; 
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['nombre']."</td>"; 
            echo "</tr>"; 
        } 
        echo "</table>"; 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
mysqli_close($link); 
?> 
            <hr class="star-dark mb-5">
            
        </div>
    </section>





    <section id="about" class="bg-primary text-white mb-0" style="background-color: #f95602;">
        <div class="container">
            <h2 class="text-uppercase text-center text-white">Sobre nosotros</h2>
            <hr class="star-light mb-5">
            <div class="row">
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">Contacto</h2>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Name</label><input class="form-control" type="text" id="name" required="" placeholder="Name"><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Email Address</label><input class="form-control" type="email" id="email" required="" placeholder="Email Address"><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Phone Number</label><input class="form-control" type="tel" id="phone" required="" placeholder="Phone Number"><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-5 pb-2"><textarea class="form-control" id="message" required="" placeholder="Message" rows="5"></textarea><small class="form-text text-danger help-block"></small></div>
                        </div>
                        <div id="success"></div>
                        <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p>2215 John Daniel Drive<br>Clark, MO 65243</p>
                </div>
                <div class="col-md-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase">Around the Web</h4>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-google-plus fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                        <li class="list-inline-item"><a class="btn btn-outline-light btn-social text-center rounded-circle" role="button" href="#"><i class="fa fa-dribbble fa-fw"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0"><span>Freelance is a free to use, open source Bootstrap theme.&nbsp;</span></p>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright ©&nbsp;ProyectoDB 2018</small></div>
    </div>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a class="d-block js-scroll-trigger text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Ropa</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/portfolio/cabin.png">
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.</p>
                            </div>
                            <?php
                            $link = mysqli_connect("35.199.40.228", "paul9834", "paul9834", "politecnico");

                            $sql = "SELECT *  FROM   producto WHERE categoria = 1";

                            if ($res = mysqli_query($link, $sql)) {
                                if (mysqli_num_rows($res) > 0) {
                                    echo "<table>";
                                    echo "<tr>";
                                    echo "<th>id</th>";
                                    echo "<br><br/>";
                                    echo "<th>nombre</th>";
                                    echo "<th>categoria</th>";
                                    echo "<th>fechaingreso</th>";
                                    echo "</tr>";
                                    while ($row = mysqli_fetch_array($res)) {
                                        echo "<tr>";
                                        echo "<td>".$row['id']."</td>";
                                        echo "<td>".$row['nombre']."</td>";
                                        echo "<td>".$row['categoria']."</td>";
                                        echo "<td>".$row['fechaingreso']."</td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                }
                                else {
                                    echo "No matching records are found.";
                                }
                            }
                            else {
                                echo "ERROR: Could not able to execute $sql. "
                                                            .mysqli_error($link);
                            }
                            mysqli_close($link);
                            ?><?php
                              $link = mysqli_connect("35.199.40.228", "paul9834", "paul9834", "politecnico");

                              $sql = "SELECT *  FROM producto categoria = 1";

                              if ($res = mysqli_query($link, $sql)) {
                                  if (mysqli_num_rows($res) > 0) {
                                      echo "<table>";
                                      echo "<tr>";
                                      echo "<th>id</th>";
                                      echo "<br><br/>";
                                      echo "<th>nombre</th>";
                                      echo "<th>categoria</th>";
                                      echo "<th>fechaingreso</th>";
                                      echo "</tr>";
                                      while ($row = mysqli_fetch_array($res)) {
                                          echo "<tr>";
                                          echo "<td>".$row['id']."</td>";
                                          echo "<td>".$row['nombre']."</td>";
                                          echo "<td>".$row['categoria']."</td>";
                                          echo "<td>".$row['fechaingreso']."</td>";
                                          echo "</tr>";
                                      }
                                      echo "</table>";
                                  }
                                  else {
                                      echo "No matching records are found.";
                                  }
                              }
                              else {
                                  echo "ERROR: Could not able to execute $sql. "
                                                              .mysqli_error($link);
                              }
                              mysqli_close($link);
                              ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Perfume</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/portfolio/cake.png">
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-3">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Lenceria</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/portfolio/circus.png">
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-4">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Cosmeticos</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/portfolio/game.png">
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-5">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Cuidado Personal</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/portfolio/safe.png">
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <div class="modal text-center" role="dialog" tabindex="-1" id="portfolio-modal-6">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <h2 class="text-uppercase text-secondary mb-0">Zapatos</h2>
                                <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="assets/img/portfolio/submarine.png">
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur
                                    itaque. Nam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pb-5"><a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" href="#"><i class="fa fa-close"></i>&nbsp;Close Project</a></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>