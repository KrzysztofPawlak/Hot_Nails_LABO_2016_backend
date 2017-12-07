<?PHP
include_once("connection.php"); 
if(isset($_POST['txtUsername']) && isset($_POST['txtPassword'])){
    
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $query = "SELECT * FROM tbl_user WHERE username = '$username' 
        AND password = '$password'";

    $result = mysqli_query($conn, $query);
    if($result->num_rows > 0){ //has record. correct username and password
        echo "success_login";
        exit;
    }
    else{
        echo "Wrong username and password"; 
        exit;
    }
}
?>