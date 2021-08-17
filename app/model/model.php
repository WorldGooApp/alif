<?
session_start(); 
    function blog(){
    global $conn;
    $blog = mysqli_query($conn,"SELECT * FROM `blog`");
    $row = mysqli_fetch_assoc($blog);
    $arr = [];
    while($row = mysqli_fetch_assoc($blog)){
        $arr[] = $row;
    }
    return $arr;
}
function blog_id($id){
    global $conn;
    $blog_id = mysqli_query($conn,"SELECT * FROM `blog` WHERE `id`='$id'");
    $row = mysqli_fetch_assoc($blog_id);
    return $row;
}
function cab($id){	
    global $conn;
    $res = mysqli_query($conn,"SELECT * FROM `blog` WHERE `id` = '$id'");
    $row = mysqli_fetch_assoc($res);
    return $row;
}

function cart($id){
    if($_SESSION['cart'][$id]){
      $_SESSION['cart'][$id]++;
    }
    else{
      $_SESSION['cart'][$id] = 0;
    }
  }

  // total price //
 
  //for delet session tavar // 
  function dellcart($id){
    unset($_SESSION['cart'][$id]);
}
function dell_all($id){
    unset($_SESSION['cart']);
}
// for plus category session cart//
function plus_cart($id){
    if($_SESSION['cart'][$id]){
        $_SESSION['cart'][$id]++;
    }else{
        $_SESSION['cart'][$id] = 1;
    }
    
}
function minus_cart($id){
    if($_SESSION['cart'][$id]){
        $_SESSION['cart'][$id]--;
    }else{
        $_SESSION['cart'][$id] = 1;
    }
}
// For wishlist //
function wishlist_ajax($id){
    if($_SESSION['wishlist_ajax'][$id]){
      $_SESSION['wishlist_ajax'][$id]++;
    }
    else{
      $_SESSION['wishlist_ajax'][$id] = 0;
    }
  }
 
  function email($id){	
    global $conn;
    $_SESSION['cart'][$id];
    $res = mysqli_query($conn,"SELECT * FROM `blog` WHERE `id` = '$id'");
    $row = mysqli_fetch_assoc($res);
    return $row;
}
function   sendEmail(){
    global $conn;
    $code_product = $_GET['code_product'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $subject = $_GET['subject'];
    $body = $_GET['body'];
    $date = $_GET['date'];
   $row = mysqli_query($conn,"INSERT INTO `zakaz_product`( `code_product`,`name`,`email`,`subject`,`body`,`date`) 
    VALUES ('$code_product','$name','$email','$subject','$body','$date') ");
}