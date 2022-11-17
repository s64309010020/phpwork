<?php  


    $marks = $_POST['quantity'];
    
    
    
    if ($marks<=49 ) {    
        echo "E grade";    
    }    
    else if ($marks<=59 ) {    
       echo "D grade";   
    }    
    else if ($marks<=69 ) {    
        echo "C grade";   
    }    
    else if ($marks<=79 ) {    
        echo "B grade";    
    }  
    else {    
        echo "A grade";   
    }  
?>