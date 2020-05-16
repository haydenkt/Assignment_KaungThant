<?php
require_once('db/dbconfig.php');
?>
<?php
$username = $_POST['username'];
$password = $_POST['password']

$sql = "SELECT * FROM users WHERE uname = ? AND password = ? LIMIT = 1";
$stmselect = $db->prepare($sql);
$result = $stmselect->excute([$username,$password]);

if($result){
    $user = $stmselect->fetch(PDO::FETCH_ASSOC);
    if($stmselect->rowCount() > 0){
        echo '1';
    }
    else{
        echo 'error';
    }
}
else{
    echo 'Error';
}
?>