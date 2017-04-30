<?php
// API access key from Google API's Console
define('API_ACCESS_KEY', 'AAAA82D6KGQ:APA91bEv6Cbbys1_KVKwlOhgOX4NGN75I_ZDE1-uLrLXqvAL1hldvghr5CqRPA-3drmcHHMJPdYCqpnNeV7omqKxeFrgwFowXDydFgW_bmcqj0ahn17GnOY8oaV48sPuzv0BMZCsrnNj');
class Notification
{

    function sendNotification($id,$contenue)
    {
        $titre = 'SmartLine';
        $contenue = $contenue;
        $registrationIds = array($id);
        // prep the bundle
        $msg = array
        (
            'body' => 'Bienvenue',
            'message' => 'here is a message. message',
            'largeIcon' => 'large_icon',
            'vibrate' => 1,
            'sound' => 1

        );

        $notif = array
        (
            'titre' => $titre,
            'text' => $contenue,
            'click_action' => 'OPEN_ACTIVITY_MENU'

        );
        $fields = array
        (
            'registration_ids' => $registrationIds,
            'data' => $msg,
            'notification' => $notif
        );

        $headers = array
        (
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://android.googleapis.com/gcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);
        echo $result;
    }


    function sendNotificationGroupe($Arrayid,$contenue)
    {
        $titre = 'SmartLine';
        $contenue = $contenue;
        $registrationIds = $Arrayid;
        // prep the bundle
        $msg = array
        (
            'body' => 'Bienvenue',
            'message' => 'here is a message. message',
            'largeIcon' => 'large_icon',
            'vibrate' => 1,
            'sound' => 1

        );

        $notif = array
        (
            'titre' => $titre,
            'text' => $contenue,
            'click_action' => 'OPEN_ACTIVITY_MENU'

        );
        $fields = array
        (
            'registration_ids' => $registrationIds,
            'data' => $msg,
            'notification' => $notif
        );

        $headers = array
        (
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://android.googleapis.com/gcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);
        curl_close($ch);
        //echo $result;
    }
}