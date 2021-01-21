<?php  
session_start();
//$nonavbar ='';
if (isset($_SESSION['UserName'])) {
    header('Location: dashbord.php');
    exit();
}
include 'int.php';
// check if the user comming form  http reqyest
if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedpass = sha1($password);

    // check if the user exist in database

    // stmt : statment populaire varialbe

    $stmt = $con->prepare("SELECT UserName,Password FROM users WHERE UserName = ? AND Password = ? AND GroupId = 1");
   
    $stmt->execute(array($username,$hashedpass));

    // count I name this variable
    
    $count = $stmt->rowcount();//count how much culomn the samme name and password if they are the same 
    //the counter will be one(1) if not counter will be zero(0)

    //if the counter equale 0 that mean no data in rows if counter is 1 that mean the theres data in rows  
    
    if ($count > 0) {
        $_SESSION['UserName'] = $username; //register sesion name
        header('Location: dashbord.php'); // redirect to dashbord page
        exit();
        
    }
}

?>

<form class="login" action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST" >
 <h4 class="text-center">Admin Login</h4>
<input class="form-control" type="text" name="user" id="" placeholder="User Name" autocomplete="off"/>
<input class="form-control" type="password" name="pass" id="" placeholder="Password" autocomplete="off"/>
<div class="d-grid gap-2">
<input class="btn btn-primary  btn-block" type="submit" value="login"/>
</div>
</form>

<?php include $tpl . 'footer.php'; ?>