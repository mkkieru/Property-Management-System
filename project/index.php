<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>


    <form action="add.php" method="post">

        <label for="id">ID :</label>
        <input type="number" name="id" >

        <label for="name">Name :</label>
        <input type="text" name="fname" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <input type="submit" name="update" value="UPDATE DATA">
    </form>

    <form action="services.php" method="post">


        <h3>UPDATE DB</h3>

        <label for="id">ID :</label>
        <input type="number" name="id" >

        <label for="name">Name :</label>
        <input type="text" name="fname" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <input type="submit" name="new" value="UPDATE DATA">
    </form>
</body>

</html>
