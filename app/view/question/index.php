<?php

if (isset($_GET['validateanswer'])) {
}

function getSoal($id)
{
    global $conn;
    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM options where id = $id"));
    return $result["content"];
}

function scrumble($data)
{
    $numbers = $data;
    $result = [];
    shuffle($numbers);
    foreach ($numbers as $number => $value) {
        $temp = $result;
        array_push($temp, $value);
        $result = $temp;
    }
    return $result;
}
function selectOption($id)
{
    $data = [];
    // array_push($data, $id);
    global $conn;
    $get = mysqli_query($conn, "select id from options");
    while ($r = mysqli_fetch_array($get)) {
        array_push($data, $r['id']);
    }

    $scrumble = scrumble($data);
    $data = $scrumble;

    $cut = $data;
    $new = array_slice($cut, 0, 3);
    $data = $new;
    array_push($data, $id);
    $result = scrumble($data);
    return $result;
}
$id_session = $_SESSION['id'];

$qleft = mysqli_num_rows(mysqli_query($conn, "select * from tempQuestion where status = 0 and id_session = $id_session"));
if ($qleft < 1) header("location:index.php?page=report&id=$id_session");

$qdata = mysqli_fetch_array(mysqli_query($conn, "select soal.id as idSoal, soal.question, soal.answer, soal.level, tempQuestion.id as idTemp, tempQuestion.id_session, tempQuestion.id_question, tempQuestion.status from soal, tempQuestion where soal.id=tempQuestion.id_question and tempQuestion.id_session = '$id_session' and tempQuestion.status = '0' limit 1"));

?>

<h2>Question</h2>
<div><?= $qdata['question'] ?></div>

<h2>Options</h2>
<?php
$data = selectOption($qdata['answer']);

foreach ($data as $key => $value) {
    echo $data[$key] . " ";
}
echo "<h1>Session yang sedang aktif = $_SESSION[id]</h1>";

?>

<div>
    <a href="index.php?page=validateanswer&id=<?= $data[0] ?>&questionId=<?= $qdata['idSoal'] ?>"><button>A. <?= getSoal($data[0]) ?></button></a>
</div>
<div>
    <a href=" index.php?page=validateanswer&id=<?= $data[1] ?>&questionId=<?= $qdata['idSoal'] ?>"><button>B. <?= getSoal($data[1]) ?></button></a>
</div>
<div>
    <a href="index.php?page=validateanswer&id=<?= $data[2] ?>&questionId=<?= $qdata['idSoal'] ?>"><button>C. <?= getSoal($data[2]) ?></button></a>
</div>
<div>
    <a href=" index.php?page=validateanswer&id=<?= $data[3] ?>&questionId=<?= $qdata['idSoal'] ?>"><button>D. <?= getSoal($data[3]) ?></button></a>
</div>