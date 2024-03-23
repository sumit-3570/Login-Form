<?php
    error_reporting(0);
    
     function P($data)
     {
         echo "<pre>";
        print_r($data);
          echo "</pre>";
    }

    $key=$_POST['key'];

    if($key =='Math Operation Task'){

   

    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $opr = $_POST['Opr'];

    switch($opr) {
    
        case '+': {
    
            $result = $n1 + $n2;
            break;
        }
    
        case '-': {
    
            $result = $n1 - $n2;
            break;
        }
    
        case '*': {
    
            $result = $n1 * $n2;
            break;
        }
    
        case '/': {
    
            $result = $n1 / $n2;
            break;
        }
    }

    P($result);
} 

if($key=='Login') {

    $email=$_POST['email'];
    $pass=$_POST['password'];
    $output=[];

    if(($email == 'ss123@gmail.com')and($pass == 123)) {
        $output['text']=[ 'sucessful login'];
        $output['response']=1;
    }else {
        $output['text']=[ 'ener the correct it'];
        $output['response']=0;
    }
   
    $result = json_encode($output);
    print_r($result);
   
}

?>