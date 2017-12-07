<?PHP

    $image_id = $_POST['image_id'];
    $user_email = "'".$_POST['user_email']."'";   
    $vote_rate = $_POST['vote_rate'];

    $connection1 = mysqli_connect('localhost', '', '', ''); 

    $query = "INSERT INTO votes (image_id, rate_id, user_id) SELECT $image_id, $vote_rate, user_id FROM users WHERE email = $user_email";

    $result = mysqli_query($connection1, $query);

        echo $user_email;
echo $image_id;
echo $vote_rate;

    mysqli_close($connection1);
    exit; 
?>