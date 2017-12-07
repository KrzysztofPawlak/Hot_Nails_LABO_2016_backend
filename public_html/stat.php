<?PHP

    $user_email = "'".$_POST['user_email']."'";
    
    $connection1 = mysqli_connect('localhost', '', '', ''); 
    $query = "SELECT images.image_id, url, image_name FROM images, users WHERE users.user_id = images.user_id 
              AND users.email = $user_email";

    $result = mysqli_query($connection1, $query);

	while($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}
	echo json_encode($data);

    mysqli_close($connection1);
    exit;
?>