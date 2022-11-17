<?php

    $m = $_POST['numply'];

    $multiple = 1;
    while($multiple <= 12){
        echo "<h3>สูตรคูณแม่ ".$m."</h3>"
        echo "<span style='bor'color:red;'>".$m." x ".$multiple." = ".$multiple * $m."</span>";
        echo "<br>";
        $multiple++;

    }

?>