<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài thi</title>
    <link rel="stylesheet" href="./source/css/exam.css">
    <link rel="stylesheet" href="./source/css/timer.css">
    <link rel="stylesheet" href="./source/css/base.css">
    <link rel="stylesheet" href="./source/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1-web/css/all.min.css">
</head>

<body>
    <div class="container">
        <form action="examSelect.php" method="post" class="question-container" id="exam">
            <div id="timer"></div>
            <div class="container" id="exam-ready">
                <p>Bài làm gồm 40 câu. Thời gian làm bài 40 phút.</p>
                <p>Khi bạn đã sẵn sàng, nhấn bắt đầu</p>

                <button onclick="startTakingExam(); resetTimer(40*60)" class="btn btn-filled" type="button">Bắt
                    đầu</button>
            </div>
            <div id="question-holder-container">

            </div>
            <template id="question-template">
                <div class="question-number">1</div>
                <p class="question">What would you __________ for dinner?</p>
                <div class="answer-container">
                    <input type="radio" name="Answer" id="A">
                    <label for="A">like</label>
                    <input type="radio" name="Answer" id="B">
                    <label for="B">likes</label>
                    <input type="radio" name="Answer" id="C">
                    <label for="C">to like</label>
                    <input type="radio" name="Answer" id="D">
                    <label for="D">liking</label>
                </div>
            </template>
            <hr>
            <div class="nav-btn-container">
                <button type="button" onclick="showQuestion(currentQuestion-1)" class="btn btn-prev"><i class="fa-solid fa-circle-arrow-left"></i></button>
                <button type="button" onclick="showQuestion(currentQuestion+1)" class="btn btn-next"><i class="fa-solid fa-circle-arrow-right"></i></button>
            </div>
        </form>
    </div>
    <div class="exam-nav-container">
        <button type="submit" form="exam" class="btn btn-filled">Nộp bài</button>
        <div class="question-table">
            <a href="" class="btn btn-filled">1</a>
            <a href="" class="btn btn-filled">2</a>
            <a href="" class="btn btn-filled">3</a>
            <a href="" class="btn btn-filled">4</a>
            <a href="" class="btn btn-filled">5</a>
            <a href="" class="btn btn-filled">6</a>
            <a href="" class="btn btn-filled">7</a>
        </div>
    </div>
</body>

</html>

<?php
require 'examSelect.php';
?>

<script src="./source/javascript/timer.js"></script>
<script>
    let currentQuestion = -1;

    function startTakingExam(timeLimit = 40 * 60) {
        document.getElementById('exam-ready').style.display = 'none';
        initQuestion();
        showQuestion();
    }

    function showQuestion(questionNumber = 0) {
        let questionContainer = document.getElementById("question-holder-container");
        if (currentQuestion > -1)
            questionContainer.children[currentQuestion].classList.add('hidden');
        questionContainer.children[questionNumber].classList.remove('hidden');
        currentQuestion = questionNumber;
    }

    function initQuestion() {
        let questionContainer = document.getElementById("question-holder-container");
        var questionInstance;
        for (let i = 0; i < questionArr.length; i++) {
            console.log(questionArr[i].question);      
            questionInstance = document.createElement("div");
            questionInstance.classList.add('question-holder');
            questionInstance.classList.add('hidden');
            questionInstance.innerHTML = `
            <div class="question-number">${i+1}</div>
                <p class="question">${questionArr[i].question}</p>
                <div class="answer-container">
                    <input type="radio" name="question-${i+1}-answer" id="question-${i+1}-A">
                    <label for="question-${i+1}-A">${questionArr[i].answer[0]}</label>
                    <input type="radio" name="question-${i+1}-answer" id="question-${i+1}-B">
                    <label for="question-${i+1}-B">${questionArr[i].answer[1]}</label>
                    <input type="radio" name="question-${i+1}-answer" id="question-${i+1}-C">
                    <label for="question-${i+1}-C">${questionArr[i].answer[2]}</label>
                    <input type="radio" name="question-${i+1}-answer" id="question-${i+1}-D">
                    <label for="question-${i+1}-D">${questionArr[i].answer[3]}</label>
                </div>
            `;
            questionContainer.appendChild(questionInstance);
        }
    }

    function removeAllChilds(parent) {
        while (parent.lastChild) {
            parent.removeChild(parent.lastChild);
        }
    }
</script>