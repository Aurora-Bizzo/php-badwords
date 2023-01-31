<?php
    $content_1 = $_POST['text_area'];
    $content_2 = $_POST['input'];
    $censored_content= str_replace($content_2, '***' , $content_1);

    echo $content_1. "<br/>";
    echo "Caratteri nel tuo testo: ".strlen($content_1)." caratteri<br/>";
    echo $censored_content."<br/>";
    echo "Numero di caratteri censurati: ".strlen($censored_content);
?>