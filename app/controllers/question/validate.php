<?php
$qId = $_GET['questionId'];
$answerId = $_GET['id'];

echo "Id Question adalah $qId</br>";
echo "id answer adalah $answerId</br>";

function updateScore()
{
    global $conn;
    mysqli_query($conn, "update history set history.`score`=score+level where history.id = $_SESSION[id]");
}

$checkQ  = mysqli_fetch_assoc(mysqli_query($conn, "select * from soal where id = $qId"));
$checkTrueA  = mysqli_fetch_assoc(mysqli_query($conn, "select * from options, soal where options.id = soal.answer and soal.id=$qId"));

if ($checkQ['answer'] == $answerId) {
    echo "<h1>Jawaban Anda benar</h1>";
    updateScore();
    //update status tempQuestion
    mysqli_query($conn, "UPDATE tempQuestion set status = 2 where tempQuestion.id_session = $_SESSION[id] and tempQuestion.id_question = $qId");
} else {
    echo "<h1>Jawaban Anda salah</h1>";
    //update status tempQuestion
    mysqli_query($conn, "UPDATE tempQuestion set status = 1 where tempQuestion.id_session = $_SESSION[id] and tempQuestion.id_question = $qId");
?>
    <h3>Correct Answer = <b><?= $checkTrueA['content'] ?></b></h3>
    <h1>Question Explanation</h1>
    <p>Explanation of the question are : <?= $checkQ['description'] ?></p>

<?php }

//cek score
$scoreSementara = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM history where id = $_SESSION[id]"));
echo "<h1>Perolehan Nilai sementara adalah = $scoreSementara[score]</h1>";


?>

<div>
    <a href="index.php?page=question"><button>Next</button></a>
</div>