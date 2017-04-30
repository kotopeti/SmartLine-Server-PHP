<html>
<head>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>

</head>
<body>
<?php
require_once('DAL/ClientDAL.php');
require_once('Notification.php');
include('FileAttente.php');
//echo "1 - ".date("H:i:s");

$dalCli= new ClientDAL();
$service = $_GET['service'];
$token = $_GET['token'];
$link = Connexion::getConn();
$notif = new Notification();
$client = $dalCli->getClientByTokenWithCon($token,$link);

$retour = "";
$temps_entre = "";
$temps_sortie = "";
$id_file_attente = "";
if($client!=null){
    $result = array();
    if(ClientDAL::isOnLine($token,$service,$link)){
        $sqlGetId = "select id,id_client from fil_attente where id_type = ".$service." and temps_sortie is null and id_client = (select id from client where token = '".$token."') order by id desc";
        $resId=mysqli_query($link, $sqlGetId);
        while($rows = mysqli_fetch_array($resId,MYSQLI_ASSOC))
        {
            $id_file_attente = $rows['id'];
            $retour = $rows['id_client'];
            break;
        }
        $requetteUpdate = "update fil_attente set temps_sortie = now() where id = ".$id_file_attente;

        $res=mysqli_query($link, $requetteUpdate);
        $sql_temps = "select temps_entre,temps_sortie from fil_attente where id = ".$id_file_attente;
        $restemps = mysqli_query($link, $sql_temps);
        while($rows = mysqli_fetch_array($restemps,MYSQLI_ASSOC))
        {
            $temps_entre = $rows['temps_entre'];
            $temps_sortie = $rows['temps_sortie'];
            break;
        }
        $retour  .=";".$service.";".$temps_entre.";".$temps_sortie;
        mysqli_close($link);
        echo($retour);


    }else{

        $sqlGetId = "select * from fil_attente where id_type = ".$service." and id_client = (select id from client where token = '".$token."') order by id desc" ;
        $resId=mysqli_query($link, $sqlGetId);
        while($rows = mysqli_fetch_array($resId,MYSQLI_ASSOC))
        {
            $retour = $rows['id_client'];
            $temps_entre = $rows['temps_entre'];
            $temps_sortie = $rows['temps_sortie'];
            break;
        }
        $retour  .=";".$service.";".$temps_entre.";".$temps_sortie;
        mysqli_close($link);
        echo($retour);
    }
}
?>
<script>
    $( document ).ready(function() {
        $.ajax({
                type: "GET",
                url: "urlSendNotif.php",
                data:"service=<?php echo $service ?>",
        success: function(data){
        }
        });
    });
</script>
</body>
</html>
