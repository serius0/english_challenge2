<?php

$name = $_POST['name'];
$level = $_POST['level'];
$amount = $_POST['amount'];
$id_session;
function getQueQuestion($amount, $level)
{
    global $id_session;
    global $conn;
    global $globalQuestion;
    $data = [];
    $get = mysqli_query($conn, "SELECT id from soal where level = '$level'");
    while ($i = mysqli_fetch_array($get)) {
        array_push($data, $i['id']);
    }

    $numbers = $data;
    shuffle($numbers);
    $data = $numbers;

    $cut = $data;
    $data = array_slice($cut, 0, $amount);


    return $data;
}

function homestore($name, $level, $amount)
{
    global $conn;

    $result = mysqli_query($conn, "INSERT INTO history (`name`, `level`, `amount`) values ('$name','$level','$amount')");
    $id_session = mysqli_insert_id($conn);
    return $id_session;
}

$dataQuestion = getQueQuestion($amount, $level);

$id_session = homestore($name, $level, $amount);
$_SESSION['id'] = $id_session;
for ($i = 0; $i < count($dataQuestion); $i++) {
    addToTemp($id_session, $dataQuestion[$i]);
}


function addToTemp($id_session, $id_question)
{
    global $conn;
    if (
        mysqli_query(
            $conn,
            "INSERT into tempQuestion 
            values(null, '$id_session', '$id_question', '0', current_timestamp)"
        )
    );
}

header('location:index.php?page=question');
