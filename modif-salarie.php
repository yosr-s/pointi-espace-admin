23<?php
session_start();
if (empty($_SESSION['id'])) {
header('Location:login2.php');
}else{?>
<?php 
include('includes/connect_db.php');
$id = $_GET['id'];
/*echo $id;
exit;*/
$req = $bdd->query(" SELECT * FROM salarie WHERE id = $id ");
$donnees = $req->fetch();
?>
<!DOCTYPE html>
<html lang="en">
  

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>modif salarie</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php include "includes/nav.php"; ?>

      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <?php include "includes/header.php"; ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Modifier salarié</h3>
                  
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  
                  <div class="card-body">
                    <form class="form-wizard" id="regForm" action="controller/modifSalarie.php?id=<?php echo $donnees['id'];?>" method="POST" enctype="multipart/form-data">
                      <div class="tab">
                        <div class="form-group">
                          <label for="name">Nom</label>
                          <input class="form-control" id="name" type="text" name="nom" required="required" value="<?php echo $donnees['nom'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="lname">Prenom</label>
                          <input class="form-control" id="lname" type="text" name="prenom" value="<?php echo $donnees['prenom'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="contact">Num carte d'indentite</label>
                          <input class="form-control digits" id="contact" type="text" name="cin" value="<?php echo $donnees['cin'] ?>">
                        </div>
                         <div class="form-group">
                          <label for="contact">Email</label>
                          <input class="form-control digits" id="contact" type="Email" name="email" value="<?php echo $donnees['email'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="contact">Password</label>
                          <input class="form-control digits" id="contact" type="password" name="password" value="<?php echo $donnees['password'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="contact">Service</label>
                          <input class="form-control digits" id="contact" type="text" name="service" value="<?php echo $donnees['service'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="contact">Salaire</label>
                          <input class="form-control digits" id="contact" type="text" name="salaire" value="<?php echo $donnees['salaire'] ?>">
                        </div>
                        <div class="form-group">
                          <label class="col-sm-3 col-form-label">Image de face</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="file" name="image" value="<?php echo $donnees['image'] ?>">
                          </div>
                        </div>
                       
                    
                        <div class="form-group">
                          <label for="example-number-input" class="form-label">Commentaire</label>
                            <textarea class="form-control" name="commentaire"><?php echo $donnees['commentaire'] ?></textarea>
                       </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Modifier</button>

                        </div>
                      </div>
                      
                      
                      
                    
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
   
      </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/config.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/form-wizard/form-wizard.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>


</html>
<?php 
}
?>