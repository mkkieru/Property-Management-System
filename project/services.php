<?php
 $id = $_POST['id'];
 $fname = $_POST['fname']; 
 $password = $_POST['password']; 
 $email = $_POST['email']; 


 $connection = mysqli_connect("localhost","root",""); 
 $db =mysqli_select_db($connection,'rentals'); 
 if (isset($_POST['new'])) {
   
  $id = $_POST['id'];
$query = "UPDATE `RENTALS` SET fname = '$_POST[fname]',password = '$_POST[password]',email = '$_POST[email]' where id = '$_POST[id]' "; 

//$query = "INSERT INTO `RENTALS` (id, fname, password, email) VALUES ('$id', '$fname', '$password', '$email');" 
$query_run = mysqli_query($connection,$query); if($query_run) { echo '
<script type="text/javascript">
    alert("Data added")
</script>';
 } else{ echo '<script type="text/javascript">alert("Data not updated")</script>'; } }
?>