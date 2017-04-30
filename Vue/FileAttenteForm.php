<?php
session_start();
if(isset($_SESSION["us"])){
    $u=$_SESSION["us"];
    
}
?>
<?php
include('../DAL/ClientDAL.php');
$dalClient= new ClientDAL();
$listCli=$dalClient->getAllClient();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>smartline</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">

       <?php

       include("navtopAndSide.php");
       ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="page-head-line"></h6>
                        <h1 class="page-subhead-line"></h1>
                    </div>
                </div>
                <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           File d'attente
                        </div>
                        <div class="panel-body">
                            <form method="post" action="insererFileAttente.php"> 
                                        <div class="form-group">
                                            <label>Nom</label>
                                                <select name="client">
                                                    <?php
                                                        for($i=0; $i<sizeof($listCli); $i++){
                                                            echo "<option value=".$listCli[$i]->getToken().">".$listCli[$i]->getNom()."</option>";
                                                            $i++;
                                                        }

                                                    ?> 
                                                </select>
                                          </div>
                                      <div class="form-group">
                                            <label>Services :</label> 
                                            <select name="services">
                                                <option value="1">Retrait</option>
                                                <option value="2">Versement esp&egrave;ce</option>
                                                <option value="3">Versement ch&egrave ;que</option>
                                                <option value="4">Autre information</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-info">Inserer </button>
                                    </form>
                            </div>
                        </div>
                            </div>

        </div>
             <!--/.ROW-->
           

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
