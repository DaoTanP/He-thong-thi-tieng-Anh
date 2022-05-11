<?php
// ket noi du lieu
$conn = mysqli_connect("localhost", "root", "", "hethongthitienganh") or die("khong ket noi");
mysqli_query($conn, "set names 'utf8'");

// khoi tao: so cau hoi cho 1 bai thi, so cau hoi trong db, so trang hien thi
$questionPerExam = 40;
$examPerPage = 3;
if (!isset($_GET['page']))
    $_GET['page'] = 0;
$startRow = $_GET['page'] * $questionPerExam;
$command1 = "SELECT * FROM `cauhoi` WHERE 1 LIMIT $questionPerExam OFFSET $startRow";
$command2 = "SELECT * FROM `cauhoi`";
$numberOfRowDB = mysqli_query($conn, $command2)->num_rows;
$numberOfExam = ceil($numberOfRowDB / $questionPerExam);
$numberOfPage = ceil($numberOfExam / $examPerPage);

//lay cau hoi ngau nhien
$command3 = "SELECT * FROM `cauhoi` ORDER BY RAND() LIMIT $questionPerExam";
$result3 = mysqli_query($conn, $command3);
$result1 = mysqli_query($conn, $command1);

class Question
{
    public $question;
    public $answer = array();
    // public $answerA, $answerB, $answerC, $answerD;
    public $rightAnswer;

    function setValue($question, $answer, $rightAnswer)
    {
        $this->question = $question;
        $this->answer = $answer;
        // $this->answerA = $answerA;
        // $this->answerB = $answerB;
        // $this->answerC = $answerC;
        // $this->answerD = $answerD;
        $this->rightAnswer = $rightAnswer;
    }
}

$question = new Question();
$arrIndex = 0;
echo '<script>const questionArr = [];';

while ($row = mysqli_fetch_row($result3)) {
    $question->setValue($row[0], array($row[2], $row[3], $row[4], $row[5]), $row[6]);
    echo 'questionArr[' . $arrIndex . '] = ' . json_encode($question) . ';';
    $arrIndex++;
}

echo '</script>';
