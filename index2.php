<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>


    <form>

        <label for="id">ID :</label>
        <input type="number" name="id" required>

        <label for="name">Name :</label>
        <input type="text" name="fname" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <label for="gender">Gender</label>
        <input type="radio">
        <input type="radio">

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <input type="submit" name="update" value="UPDATE DATA">
    </form>

</body>

</html>
<?php
$connection = mysqli_connect("localhost","root","");
$db =mysqli_select_db($connection,'rentals');

if (isset($_POST['update']))
{
    $id = $_POST['id'];

    $query = "UPDATE `RENTALS` SET  fname = '$_POST[fname]',password = '$_POST[password]',email = '$_POST[email]' where id = '$_POST[id]' ";

   // INSERT INTO `RENTALS` (`id`, `fname`, `password`, `email`) VALUES ('2', 'kieru', 'kieru', 'mkieru505@gmail.com');

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script type = "text/javascript"> alert("Data updated") </script>';
    }
    else{
        echo '<script type = "text/javascript"> alert("Data not updated") </script>';
    }

}

?>
