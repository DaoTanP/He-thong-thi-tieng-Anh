<?php
require "checkLogin.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài thi</title>
    <link rel="stylesheet" href="./source/css/timer.css">
    <link rel="stylesheet" href="./source/css/main.css">
    <link rel="stylesheet" href="./source/css/exam.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <script src="./source/javascript/helper.js"></script>
</head>

<body>
    <a href="index.php" class="btn hidden">Thoát</a>
    <div class="container-lg">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="question-container" id="exam">
            <div id="timer"></div>
            <div class="container" id="exam-info">

            </div>
            <div id="question-holder-container">

            </div>
            <hr>
            <div class="nav-btn-container">
                <button type="button" onclick="showQuestion(currentQuestion-1)" class="btn btn-lg btn-prev"><i class="fa-solid fa-arrow-left"></i> Trước</button>
                <button type="button" onclick="showQuestion(currentQuestion+1)" class="btn btn-lg btn-next">Sau <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </form>
        <div class="exam-nav-container hidden">
            <div class="header-container">
                <header>Danh sách câu hỏi</header>
                <p id="progress"></p>
                <button type="submit" form="exam" class="btn btn-filled" name="submit">Nộp bài</button>
            </div>
            <div class="question-table" id="question-table">
            </div>
        </div>
    </div>

</body>

</html>

<?php
// ket noi du lieu
$conn = mysqli_connect("localhost", "root", "", "hethongthitienganh") or die("khong ket noi");
mysqli_query($conn, "set names 'utf8'");

// khoi tao: so cau hoi cho 1 bai thi, so cau hoi trong db, so trang hien thi
$questionPerExam = 40;
//lay cau hoi ngau nhien
$command1 = "SELECT * FROM `cauhoi` WHERE `LoaiCauHoi`='Xác định lỗi' LIMIT $questionPerExam";
$result1 = mysqli_query($conn, $command1);

class Question
{
    public $type;
    public $requirement;
    public $question;
    public $answer = array();
    public $rightAnswer;
    public $targetPart;

    function setValue($type, $requirement, $question, $answer, $rightAnswer, $targetPart)
    {
        $this->type = $type;
        $this->requirement = $requirement;
        $this->question = $question;
        $this->answer = $answer;
        $this->rightAnswer = $rightAnswer;
        $this->targetPart = $targetPart;
    }
}
$rightAnswerArr = array();
$question = new Question();
$arrIndex = 0;
echo '<script>const questionArr = [];';

while ($row = mysqli_fetch_array($result1)) {
    array_push($rightAnswerArr, $row['DapAnDung']);
    $question->setValue($row['LoaiCauHoi'], $row['YeuCau'], $row['CauHoi'], array($row['A'], $row['B'], $row['C'], $row['D']), null, $row['ChuThich']);
    echo 'questionArr[' . $arrIndex++ . '] = ' . json_encode($question) . ';';
}
echo '</script>';

if (isset($_POST["submit"])) {
    $score = 0;
    $soCauDung = 0;
    for ($i = 0; $i < $arrIndex; $i++) {
        if (isset($_POST["question-" . ($i + 1) . "-answer"]) && $rightAnswerArr[$i] == $_POST["question-" . ($i + 1) . "-answer"]) {
            $score += 10 / $arrIndex;
            $soCauDung++;
        }
    }
    echo '<script>const score = ' . $score . ';
                  const soCauDung = ' . $soCauDung . ';
          </script>';
}
?>

<script src="./source/javascript/timer.js"></script>
<script>
    initTimer(questionArr.length * 15, 'progress');
    // resetTimer(questionArr.length);
    let currentQuestion = -1;
    timesUpEvent = () => {
        resetTimer(1);
        document.getElementById("exam").submit.click();
    }

    preventGoBack_ToThisPage();

    if (typeof score !== 'undefined' && typeof soCauDung !== 'undefined') {
        destroyTimer();
        let info = document.getElementById('exam-info');
        info.style.display = 'block';
        info.innerHTML = `
            <p class="txt-center">Bài làm đúng ${soCauDung} câu trên tổng số ${questionArr.length} câu, số điểm đạt được: </p>
            <h1 class="txt-center txt-secondary" style="margin: 4rem; font-size: 4rem">${(score.toString().length > 3) ? score.toFixed(2) : score}</h1>
            <a href="index.php" class="btn btn-center">Về trang chủ</a>
        `;
    } else {
        let info = document.getElementById('exam-info');
        info.innerHTML = `
            <p>Bài làm gồm 40 câu. Thời gian làm bài 40 phút.</p>
            <p>Khi bạn đã sẵn sàng, nhấn bắt đầu</p>

            <button onclick="startTakingExam(); startTimer()" class="btn btn-filled btn-lg" type="button">
                Bắt đầu</button>
        `;
    }

    let btnPrev = document.querySelector(".btn-prev");
    let btnNext = document.querySelector(".btn-next");
    btnPrev.classList.add("hidden");
    btnNext.classList.add("hidden");

    function startTakingExam() {
        document.getElementById('exam-info').style.display = 'none';
        document.querySelector('.exam-nav-container').classList.remove('hidden');
        initQuestion();
        showQuestion();
    }

    function showQuestion(questionNumber = 0) {
        let questionContainer = document.getElementById("question-holder-container");
        if (currentQuestion > -1)
            questionContainer.children[currentQuestion].classList.add('hidden');
        questionContainer.children[questionNumber].classList.remove('hidden');
        currentQuestion = questionNumber;

        if (currentQuestion <= 0) {
            btnPrev.classList.add("hidden");
        } else {
            btnPrev.classList.remove("hidden");
        }

        if (currentQuestion >= questionArr.length - 1) {
            btnNext.classList.add("hidden");
        } else {
            btnNext.classList.remove("hidden");
        }

        let answered = 0;
        let questionTable = document.getElementById("question-table");
        let nodes = document.querySelectorAll('.answer-container');
        for (let i = 0; i < nodes.length; i++) {
            for (let j = 0; j < nodes[i].childElementCount; j++) {
                if (nodes[i].children[j].checked) {
                    answered++;
                    questionTable.children[i].className = 'btn btn-filled';
                    break;
                } else {
                    questionTable.children[i].className = 'btn btn-inactive';
                }
            }
        }
        questionTable.children[currentQuestion].className = 'btn btn-active';

        let progress = document.getElementById('progress');
        progress.textContent = "Đã làm " + answered + "/" + questionArr.length + " câu";

    }

    function initQuestion() {
        let questionContainer = document.getElementById("question-holder-container");
        let questionTable = document.getElementById("question-table");
        var questionInstance, questionBtnInstance;
        for (let i = 0; i < questionArr.length; i++) {
            questionInstance = document.createElement("div");
            questionInstance.className = 'question-holder hidden';
            questionInstance.innerHTML = `
            <div class="question-number">${i+1}</div>
                <p class="requirement txt-center">${questionArr[i].requirement}</p>
                <p class="question">${formatQuestion(questionArr[i])}</p>
                <div class="answer-container">
                    <input type="radio" name="question-${i+1}-answer" id="question-${i+1}-A" value="A">
                    <label for="question-${i+1}-A">${questionArr[i].answer[0]}</label>
                    <input type="radio" name="question-${i+1}-answer" id="question-${i+1}-B" value="B">
                    <label for="question-${i+1}-B">${questionArr[i].answer[1]}</label>
                    <input type="radio" name="question-${i+1}-answer" id="question-${i+1}-C" value="C">
                    <label for="question-${i+1}-C">${questionArr[i].answer[2]}</label>
                    <input type="radio" name="question-${i+1}-answer" id="question-${i+1}-D" value="D">
                    <label for="question-${i+1}-D">${questionArr[i].answer[3]}</label>
                </div>
            `;
            questionContainer.appendChild(questionInstance);

            questionBtnInstance = document.createElement("button");
            questionBtnInstance.type = "button";
            questionBtnInstance.onclick = function() {
                showQuestion(i)
            };
            questionBtnInstance.className = "btn btn-inactive";
            questionBtnInstance.textContent = i + 1;
            questionTable.appendChild(questionBtnInstance);
        }
    }

    function formatQuestion(questionObj) {
        if (questionObj.type === 'Xác định lỗi') {
            return processQuestion(questionObj.question, questionObj.answer[0], questionObj.answer[1], questionObj.answer[2], questionObj.answer[3]);
        } else if (questionObj.type === 'Từ trái nghĩa' || questionObj.type === 'Từ đồng nghĩa') {
            return processQuestion(questionObj.question, questionObj.targetPart);
        }
        return questionObj.question;
    }

    function processQuestion(question, ...target) {
        let result = question;
        target.forEach(part => {
            result = result.replace(part, '<u class="question-target">' + part + '</u>');
        });
        return result;
    }

    /* document.getElementById("question-table").onclick = function(e) {
        let nodes = document.querySelectorAll('#question-table > .btn');
        let clicked = [].indexOf.call(nodes, e.target);
        this.children[currentQuestion].classList.remove('btn-active');
        this.children[currentQuestion].classList.add('btn-inactive');

        this.children[clicked].classList.remove('btn-inactive');
        this.children[clicked].classList.add('btn-active');
    }; */
</script>