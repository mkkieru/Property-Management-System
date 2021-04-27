 <?php

 $username =$_POST['fName'];
 $password = $_POST['password'];
 $email = $_POST['email'];

if(!empty($username) || !empty($password) || !empty($email){

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "rentals";

    //Create connection
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
    
    if(mysqli_connect_error()){
        die('Connect Error('')')
    }else{
        $SELECT = "SELECT email From rentals Where email = ? Limit 1";
        $INSERT = "INSERT Into rentals (username, password, email) values(?, ?, ?)";

        //prepare statement

        $stmt = $conn - > prepare($SELECT);
        $stmt -> bind_param("s", $email);
        $stmt -> execute();
        $stmt -> bind_result($email);
        $stmt -> store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0){
            $stmt->close();

            $stmt= $conn->prepare($INSERT);
            $stmt-> bind_param("sss",$username,$password,$email);

            $stmt->execute();
            echo "New record inserted successfully";
        }else{
            echo "Someone is already using this email";
        }
        $stmt->close();
        $conn->close();
    }

} else{
    echo "All field are required";
    die();
}

 ?>