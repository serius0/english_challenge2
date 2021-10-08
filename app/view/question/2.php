<?php

$_SESSION['idQuestion'][0];
function getQuestionContentById($id)
{
    global $conn;
    $result = mysqli_fetch_assoc(mysqli_query($conn, "select question from soal where id = $id"))["question"];
    return $result;
}
?>

<h1>Question:</h1>
<h4><?= getQuestionContentById($_SESSION['idQuestion'][0]) ?></h4>
<h1>Option:</h1>
<a href="index.php?page=validate" class="btn btn-primary">a. This is the answer option a</a>
<a href="index.php?page=validate" class="btn btn-primary">b. This is the answer option b </a>
<a href="index.php?page=validate" class="btn btn-primary">c. This is the answer option c </a>
<a href="index.php?page=validate" class="btn btn-primary">d. This is the answer option d </a>