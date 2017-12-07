<?PHP

    $image_id = $_POST['image_id'];
    $user_email = "'".$_POST['user_email']."'";        
    
    $connection1 = mysqli_connect('localhost', '', '', ''); 
    $query = "SELECT votes.rate_id FROM votes, images, users WHERE images.image_id = votes.image_id 
              AND users.user_id = votes.user_id AND images.image_id = $image_id AND users.email = $user_email";

    $result = mysqli_query($connection1, $query);

	while($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}
	echo json_encode($data);
        echo $user_email;

    mysqli_close($connection1);
    exit;
?>