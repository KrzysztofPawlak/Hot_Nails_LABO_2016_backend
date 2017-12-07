<?PHP

    $image_id = $_POST['image_id'];      
    
    $connection1 = mysqli_connect('localhost', '', '', ''); 
    $query = "SELECT rate_id, COUNT(rate_id) FROM votes WHERE image_id = $image_id GROUP BY rate_id";

    $result = mysqli_query($connection1, $query);

	while($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}
	echo json_encode($data);
        echo $user_email;

    mysqli_close($connection1);
    exit;
?>