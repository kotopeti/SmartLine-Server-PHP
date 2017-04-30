<?php
require_once('Notification.php');
$notif = new Notification();
$id1 = 'fsk1g7JbYHM:APA91bHAbKKifiadjt1dAiSMNyoRokTqSdzRiyxBEq7KxxTdiWvK3a8pl3FSi65Dt3v5I_tIy5H8E4suVB2rRP2eWMgx_FFoFERlLOLdsOZ7s_660GcyCDPbYJ7w7xNAnpjbJ6254ADJ';
$id2 = 'fiFl9hd06Xc:APA91bGSNOq03oKlBUi-K_K-hiFSGz7bs0eD-348Tk_dzGZpfekPJweFR1xuzemqK7PNE0TjMhKzDprDMWZUqb7houAMbXwJTEl4EA5NRTRgczgMaZWi_kvTY65Jm3Na1dZOr1uzU2ZM';
$lesIds = array($id1,$id2);
$notif->sendNotification($id1,'eo ara oe');