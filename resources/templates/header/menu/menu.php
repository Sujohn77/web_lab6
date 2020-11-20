<?php
    $variables = array('Главная','Швейцария','Recycling','Транспорт','Жилье');
    if (count($variables) > 0) {
        foreach ($variables as $key => $value) {
            if($key == 0){
                echo '<li class="first"><a href="index.php" title="Switzerland">'.$value.'</a></li>';
            } else  if (strlen($value) > 0) {

                echo '<li><a href="page000'.$key.'.php" title="Switzerland">'.$value.'</a></li>';
            }
           
        }
    }
?>