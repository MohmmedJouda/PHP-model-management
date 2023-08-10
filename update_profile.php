<?php

include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);

   mysqli_query($conn, "UPDATE `user_form` SET name = '$update_name', email = '$update_email' WHERE id = '$user_id'") or die('query failed');

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'كلمة المرور القديمة غير صحيحة !';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'كلمة المرور غير متطابقة!';
      }else{
         mysqli_query($conn, "UPDATE `user_form` SET password = '$confirm_pass' WHERE id = '$user_id'") or die('query failed');
         $message[] = 'تم تحديث كلمة المرور بنجاح';
      }
   }

      }
   



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update profile</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <?php

         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div>
         <h1 class="profile">الملف الشخصي</h1>
         </div>
      <div class="flex">
         <div class="inputBox">
            <span> :اسم المستخدم</span>
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
            <span>البريد الالكتروني: </span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
           
        
         </div>
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>:كلمة المرور القديمة </span>
            <input type="password" name="update_pass" placeholder="ادخل كلمة المرور القديمة" class="box">
            <span> :كلمةالمرور الجديدة</span>
            <input type="password" name="new_pass" placeholder="ادخل كلمة المرور الجديدة" class="box">
            <span> :تأكيد كلمة المرور </span>
            <input type="password" name="confirm_pass" placeholder="تأكيد كلمة المرور" class="box">
         </div>
      </div>
      <input type="submit" value="تحديث الملف الشخصي" name="update_profile" class="btn">
      <a href="home.php" class="delete-btn">خروج</a>
   </form>

</div>

</body>
</html>