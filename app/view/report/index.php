<?php
$data = mysqli_fetch_assoc(mysqli_query($conn, "select * from history where id=$_GET[id]"));
?>
<h1>Congratulations <?= $data['name'] ?></h1>
<h3>Your test completed</h3>
<h5>Your Total Score : <?= $data['score'] ?></h5>

<a href="../app/view/logout.php"><button>Try Again</button></a>