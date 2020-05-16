<?php session_start();
require_once('db/dbconfig.php');
// print_r($_POST);
// exit();
?>
<?php

 
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location:");
//     exit;
// }

 
$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT user_id, uname, upassword FROM users WHERE uname = :username";
        
        if($stmt = $db->prepare($sql)){
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $param_username = trim($_POST["username"]);
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["user_id"];
                        $username = $row["uname"];
                        $hashed_password = $row["upassword"];
                        if(md5($password)== $hashed_password){
                            // exit();
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["user_id"] = $id;
                            $_SESSION["uname"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: About.php");
                        } else{
                            header("location: signin.php");
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($db);
}
?>