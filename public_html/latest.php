<?PHP
        $query = "SELECT images.image_name, images.image_id, images.url, images.data_add, AVG(votes.rate_id) AS avg, 
           COUNT(votes.image_id) AS vote FROM images LEFT JOIN votes ON images.image_id = votes.image_id 
           GROUP BY images.Image_name, images.url ORDER BY images.data_add DESC";
        $connection1 = mysqli_connect('localhost', '', '', ''); 
	$result = mysqli_query($connection1, $query);

	while($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}
	echo json_encode($data);
?>
