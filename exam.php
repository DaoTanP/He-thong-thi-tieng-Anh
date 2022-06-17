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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/shakrmedia/tuesday@v1.1.0/build/tuesday.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <script src="./source/javascript/helper.js"></script>
</head>

<body>
    <a href="index.php" class="btn hidden">Thoát</a>
    <div class="container-lg">
        <form action="" method="post" class="question-container" id="exam">
            <input type="text" class="hidden" name="examCode" value="<?php echo $_POST['examCode']; ?>">
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

//lay cau hoi tu ma de
if (!isset($_POST['examCode']))
    header('Location: examSelecting.php');

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
$dsCauHoi = '';
$dsCauHoiArr;
$tgLamBai = 0;

$deThiQuery = mysqli_query($conn, 'SELECT `ThoiGian`, `DanhSachCauHoi` FROM `dethi` WHERE `MaDeThi` = "' . $_POST['examCode'] . '"') or die("khong lay duoc de thi");
while ($deThi = mysqli_fetch_array($deThiQuery)) {
    $dsCauHoi = $deThi['DanhSachCauHoi'];
    $tgLamBai = $deThi['ThoiGian'];
}
echo '<script> var thoiGianLamBai = parseInt(' . $tgLamBai . ', 10); </script>';

#region Tạo mảng câu hỏi
$dsCauHoiArr = explode(' ', $dsCauHoi);
echo '<script>const questionArr = [];';
for ($i = 0; $i < count($dsCauHoiArr); $i++) {
    $cauHoiQuery = mysqli_query($conn, 'SELECT * FROM `cauhoi` WHERE `MaCauHoi` = "' . $dsCauHoiArr[$i] . '"') or die("khong lay duoc cau hoi");
    while ($row = mysqli_fetch_array($cauHoiQuery)) {
        array_push($rightAnswerArr, $row['DapAnDung']);
        $question->setValue($row['LoaiCauHoi'], $row['YeuCau'], $row['CauHoi'], array($row['A'], $row['B'], $row['C'], $row['D']), null, $row['ChuThich']);
        echo 'questionArr[' . $arrIndex++ . '] = ' . json_encode($question) . ';';
    }
}
echo '</script>';
#endregion

if (isset($_POST["submit"])) {
    $diem = 0;
    $soCauDung = 0;
    for ($i = 0; $i < $arrIndex; $i++) {
        if (isset($_POST["question-" . ($i + 1) . "-answer"]) && $rightAnswerArr[$i] == $_POST["question-" . ($i + 1) . "-answer"]) {
            $diem += 10 / $arrIndex;
            $soCauDung++;
        }
    }
    echo '<script>const score = ' . $diem . ';
                  const soCauDung = ' . $soCauDung . ';
          </script>';
}
?>

<script src="./source/javascript/timer.js"></script>
<script>
    if (typeof thoiGianLamBai !== 'undefined') {
        if (thoiGianLamBai == null)
            thoiGianLamBai = questionArr.length * 30;
    } else {
        var thoiGianLamBai = questionArr.length * 30;
    }
    initTimer(thoiGianLamBai, 'progress');
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
            <p>Bài làm gồm ${questionArr.length} câu. Thời gian làm bài ${formatTime(thoiGianLamBai)}.</p>
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
            if (questionArr[i].type === "Đoạn văn") {
                questionInstance.classList.add("grid-container");
                // questionInstance.classList.add("grid-col-evenly");
                questionInstance.style.gridTemplateColumns = "repeat(2, 1fr)";
                questionInstance.style.gap = "1rem";
                questionInstance.style.alignItems = "start";
            } else {
                questionInstance.style.width = "50vw";
            }
            questionInstance.innerHTML = `
            <div class="question-number">${i+1}</div>
            ${questionArr[i].type === "Đoạn văn" ? '<div class="requirement passage">'+splitTextToParagraph(questionArr[i].requirement)+'</div>'
            : '<p class="requirement txt-center">'+questionArr[i].requirement+'</p>'}
                <div>
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
            return processQuestion(questionObj.question, '', 'b', questionObj.answer[0], questionObj.answer[1], questionObj.answer[2], questionObj.answer[3]);
        } else if (questionObj.type === 'Từ trái nghĩa' || questionObj.type === 'Từ đồng nghĩa') {
            return processQuestion(questionObj.question, '', 'b', questionObj.targetPart);
        } else if (questionObj.type === 'Giao tiếp') {
            return splitTextToParagraph(questionObj.question);
        } else if (questionObj.type === 'Phát âm') {
            let amTiet = questionObj.targetPart.split(' ');
            let processed = questionObj.question.split(':');

            if (amTiet.length == 1)
                return processed[0] + ':' + processQuestion(processed[1], 'g', 'u', questionObj.targetPart);
            else {
                let words = processed[1].split(',');
                processed[1] = '';
                for (let i = 0; i < words.length; i++) {
                    processed[1] += processQuestion(words[i], '', 'u', amTiet[i]) + ', ';
                }
                return processed[0] + ':' + processed[1];
            }
        }
        return questionObj.question;
    }

    function processQuestion(question, regexTag, formatTag, ...target) {
        let result = question;
        target.forEach(part => {
            const regEx = new RegExp(part, regexTag);
            // console.log(regEx);
            result = result.replace(regEx, `<` + formatTag + ` class="question-target">` + part + `</` + formatTag + `>`);
        });
        return result;
    }

    function splitTextToParagraph(text) {
        let split = text.split("\n");
        let htmlString = "";

        split.forEach(p => {
            htmlString += "<p>" + p + "</p>";
        });

        return htmlString;
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