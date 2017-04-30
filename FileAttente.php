<?php
  function getListJsonByService($service,$con){
    $json = null;
    $sql = "select * from vue_fil_attente_libelle where id_service = '".$service."' order by temps_entre asc";
    $val = mysqli_query($con, $sql);
    $results = array();
    while($row = mysqli_fetch_array($val,MYSQLI_ASSOC))
    {
      $results[] = array(
          'id_service' => $row['id_service'],
          'temps_entre' => $row['temps_entre'],
          'id_client' => $row['id_client'],
          'nom' => $row['nom'],
          'token' => $row['token'],
          'sexe' => $row['sexe']
      );
    }
    if(count($results)>0){
        $json = json_encode($results);
    }
    return $json;
  }

