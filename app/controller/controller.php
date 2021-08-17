<?
session_start();
    include MODEL;
    if(empty($_GET['view'])){
        $view = "index";
    }else{
        $view = $_GET['view'];
    }


    switch($view){
        case "index":
            $id = $_GET['id'];
            $blog = blog();
 
            sendEmail();
            break;
            case "details":
                $id = $_GET['id'];
                $blog = blog();
                $row = blog_id($id);
                $row = cab($id);
                
                break;
        case "ajax":
            $id = $_GET['id'];

            cart($id);
            if(sendEmail()){
                
            }
            include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/final.php";
     

           include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/ajax.php";
            exit;
            break;
            case "del":
                $id = $_GET['id'];
                dellcart($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/ajax.php";
                exit;
                break;
            case "plus_cart":
                $id = $_GET['id'];
                plus_cart($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/ajax.php";
                exit;
                break;
            case "minus_cart":
                $id = $_GET['id'];
                minus_cart($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/ajax.php";
                exit;
                break;
            case "dell_all":
                $id = $_GET['id'];
                dell_all($id);
                include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/ajax.php";
                exit;
                break;
           case "index_send_email":
            $id = $_GET['id'];
            email($id);
            
            sendEmail();
            
            include $_SERVER['DOCUMENT_ROOT']."/views/theme/pages/index_send_email.php";
                exit;
                break;

          
    }
include $_SERVER['DOCUMENT_ROOT']."/views/theme/index.php";
?>