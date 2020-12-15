<?php

    $flag = $_GET['flag'];


switch ($flag) {
    case 0:
        echo "i es igual a 0";
        break;

    case 1:
        
        $user = $_POST['inputEmail'];
        $pwd = $_POST['inputPassword'];

        /* Harcodeado */
        if($user == 'rood.geek@gmail.com'){
            $arr = array('Msg'=> 'SuccessLogin');
            echo json_encode($arr);

        } else if($user == 'rood.geek@outlook.com'){
            $arr = array('Msg'=> 'ErrorLogin');
            echo json_encode($arr);

        } else if($user == 'orodriguez@ifone.com.mx'){
            $arr = array('Msg'=> 'CuentaDesactivada');
            echo json_encode($arr);
            
        } else{
            $arr = array('Msg'=> 'Error');
            echo json_encode($arr);
        }
        /* Harcodeado */

        break;

    case 2:
        echo "i es igual a 2";
        break;
}
?>