<?php
class NotificationSender extends Thread{
    function run(){
        for($i=1;$i<10;$i++){
            echo Thread::getCurrentThreadId() .  "\n";
            sleep(2);     // <------
        }
    }
}

for($i=0;$i<2;$i++){
    $pool[] = new My();
}

foreach($pool as $worker){
    $worker->start();
}
foreach($pool as $worker){
    $worker->join();
}

?>