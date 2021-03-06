<?php
include('../DAL/FileAttenteDAL.php');
$dalFileAttente= new FileAttenteDAL();
$listfilAte=$dalFileAttente->getAllFileAttenteLibelle();
?>
<?php
session_start();
if(isset($_SESSION["us"])){
    $u=$_SESSION["us"];
    
}
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
        <?php include("navtopAndSide.php");?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">File d'attente</h1>
                        <h1 class="page-subhead-line"> </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
			
                <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            Tableau file d'attente
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Date entree</th>
                                            <th>Date sortie</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    for($i=0; $i<sizeof($listfilAte);$i++){
                                    	echo "<tr>";
                                        echo"<td>".$listfilAte[$i]->getId_client()."</td>";
                                        echo"<td>".$listfilAte[$i]->getNom()."</td>";
                                        echo"<td>".$listfilAte[$i]->getTemps_entre()."</td>";
                                        echo"<td>".$listfilAte[$i]->getTemps_sortie()."</td>";
                                        echo "<tr>";
                                    }
                                     ?>                             
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
            </div>
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-6">
                     
                </div>
                <div class="col-md-6">
                  
                </div>
            </div>
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
