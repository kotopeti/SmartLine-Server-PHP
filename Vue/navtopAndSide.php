<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SmartLine</a>
            </div>
             <ul class="nav navbar-right top-nav">
                  <li class="dropdown">
                  
                   
                    <?php 
    if(isset($u)){
 ?>
 <a href="index.php?etat=1"><i class="fa fa-user"></i>Deconnexion<b class="caret"></b></a>
 <?php
   }else{
   ?>
 <a href="index.php"><i class="fa fa-user"></i>Connexion<b class="caret"></b></a>
    <?php
      }
    ?>
                    
                   
                    
                </li>
            </ul> 
        </nav>
      <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <div class="inner-text">

                               <?php 
                               if(isset($u)){
                                echo $u." est connecte";
                               }
                               else{

                               }

                               ?>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.html"><i class="fa fa-dashboard "></i>Administration</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>File d'entente <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="acceuil.php"><i class="fa fa-toggle-on"></i>Liste file attente</a>
                            </li>
                            <li>
                                <a href="FileAttenteForm.php"><i class="fa fa-bell "></i>Insertion</a>
                            </li>
                         
                           
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Evaluation <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="evaluationList.php"><i class="fa fa-coffee"></i>Lister evaluation</a>
                            </li>
                           
                        </ul>
                    </li>
                    
                  </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <!-- /. NAV SIDE  -->