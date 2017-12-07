<?PHP

if(isset($_POST['image'])){
    $now = DateTime::createFromFormat('U.u', microtime(true));
    $id = $now->format('YmdHisu');
    
    $path = "img/$id.jpeg";
    $path_url = "http://sunpatrol.pe.hu/$path";
    $image = $_POST['image'];
    $image_name = $_POST['image_name'];
    $email = "'".$_POST['email']."'";

    if(file_put_contents($path, base64_decode($image)) != false){  
        echo "uploaded_success";
        $connection1 = mysqli_connect('localhost', '', '', ''); 

        $query = "INSERT INTO images(url, image_name, data_add, user_id) SELECT '$path_url', '$image_name', 
              NOW(), user_id FROM users WHERE email = $email";

        $result = mysqli_query($connection1, $query);
        mysqli_close($connection1);
        exit;
    }
    else{
        echo "uploaded_failed";
        exit;
    }

}
else{
    echo "image_not_in";
    exit;
}
?>