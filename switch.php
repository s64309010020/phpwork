<?php

    $dy = date('D');   //Thu
    
    switch ($dy) {
        case 'Mon':
            echo "วันนี้ วันจันทร์";
            break;
        case 'Tue':
            echo "วันนี้ วันอังคาร";
            break;
        case 'Wed':
            echo "วันนี้ วันพุธ";
            break;
        case 'Thu':
            echo "วันนี้ วันพฤหัส";
            break;
        case 'Fri':
            echo "วันนี้ วันศุกร์";
            break;
        case 'Sat':
            echo "วันนี้ วันเสาร์";
            break;
        case 'Sun':
            echo "วันนี้ วันอาทิตร์";
            break;
        
        default:
            echo "วันนี้ วันพฤหัส";
            break;
    }

?>