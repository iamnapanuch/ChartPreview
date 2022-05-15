
<?php session_start();?>
<?php 
if (!$_SESSION["UserID"]){

	  Header("Location: index.php");
   
}else{?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>User page</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <pre>
    <script LANGUAGE='JavaScript'>
    //window.alert('เข้าสู่ระบบ');
     session_destroy();
    </script>
    <h1>This page for admin only!</h1>
    <?php  print_r($_SESSION); 
    //echo print_r($user); ?>
    </pre>
<script>
  var delayInMilliseconds = 1000; //1 second =1000;

setTimeout(function() {
  //your code to be executed after 1 second
  window.location.href='home.php';
}, delayInMilliseconds);
</script>

</body>
</html>
<?php }?>

