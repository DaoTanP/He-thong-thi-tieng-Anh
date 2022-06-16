// Credit: Mateusz Rybczonec

const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 0.5; //50%
const ALERT_THRESHOLD = 0.25; //25%

const COLOR_CODES = {
    info: {
        color: "green"
    },
    warning: {
        color: "orange",
        threshold: WARNING_THRESHOLD
    },
    alert: {
        color: "red",
        threshold: ALERT_THRESHOLD
    }
};

let timeLimit;
let timeLeft;
let timerInterval;
let timeUpEvent; //a function to be called when time up
let remainingPathColor = COLOR_CODES.info.color;

function initTimer(time, timerStyle = 'circle') {
    clearInterval(timerInterval);
    timerInterval = null;
    while (timerInterval !== null) {
        timerInterval = null;
    }
    timeLimit = time;
    timeLeft = timeLimit;

    if (timerStyle === 'circle') {
        document.getElementById("timer").innerHTML = `
<div class="base-timer">
  <svg class="base-timer__svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <g class="base-timer__circle">
      <circle class="base-timer__path-elapsed" cx="50" cy="50" r="45"></circle>
      <path
        id="base-timer-path-remaining"
        stroke-dasharray="283"
        class="base-timer__path-remaining ${remainingPathColor}"
        d="
          M 50, 50
          m -45, 0
          a 45,45 0 1,0 90,0
          a 45,45 0 1,0 -90,0
        "
      ></path>
    </g>
  </svg>
  <span id="base-timer-label" class="base-timer__label">${formatTime(
            timeLeft
        )}</span>
</div>
`;
    }
    else if (timerStyle === 'progress') {
        document.getElementById("timer").innerHTML = `
  <span id="base-timer-label" class="timer-label">${formatTime(timeLeft)}</span>
  <div class="meter" style="width: 50%; height: 5px">
	<span class="green" id="base-timer-path-remaining"></span>
</div>
`;
    }
}

function destroyTimer() {
    document.getElementById("timer").innerHTML = ``;
    localStorage.time = null;
}

const onTimesUp = (func) => {
    clearInterval(timerInterval);
    func();
}

// function startTimer() {
//     if (isNaN(parseInt(localStorage.time, 10)) || parseInt(localStorage.time, 10) - (Date.now() / 1000) < 0)
//         localStorage.time = (Date.now() / 1000) + timeLimit;

//     timerInterval = setInterval(() => {
//         timeLeft = Math.round(parseInt(localStorage.time, 10) - (Date.now() / 1000));
//         document.getElementById("base-timer-label").innerHTML = formatTime(timeLeft);
//         setCircleDasharray(timeLeft);
//         setRemainingPathColor(timeLeft);

//         if (timeLeft <= 0) {
//             onTimesUp(timesUpEvent);
//         }
//     }, 1000);
// }

function startTimer() {
    timeLeft = timeLimit;
    timerInterval = setInterval(() => {
        timeLeft--;
        document.getElementById("base-timer-label").innerHTML = formatTime(timeLeft);
        setCircleDasharray(timeLeft);
        setRemainingPathColor(timeLeft);

        if (timeLeft <= 0) {
            onTimesUp(timesUpEvent);
        }
    }, 1000);
}

function resetTimer(timeLimit) {
    localStorage.time = (Date.now() / 1000) + timeLimit;
}

function formatTime(time) {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    if (seconds < 10) {
        seconds = `0${seconds}`;
    }

    return `${minutes}:${seconds}`;
}

function setRemainingPathColor(timeLeft) {
    const { alert, warning, info } = COLOR_CODES;
    if (timeLeft <= timeLimit * alert.threshold) {
        document
            .getElementById("base-timer-path-remaining")
            .classList.remove(warning.color);
        document
            .getElementById("base-timer-path-remaining")
            .classList.add(alert.color);
    } else if (timeLeft <= timeLimit * warning.threshold) {
        document
            .getElementById("base-timer-path-remaining")
            .classList.remove(info.color);
        document
            .getElementById("base-timer-path-remaining")
            .classList.add(warning.color);
    }
}

function calculateTimeFraction(timeLeft) {
    const rawTimeFraction = timeLeft / timeLimit;
    return rawTimeFraction - (1 / timeLimit) * (1 - rawTimeFraction);
}

function setCircleDasharray(timeLeft) {
    const circleDasharray = `${(
        calculateTimeFraction(timeLeft) * FULL_DASH_ARRAY
    ).toFixed(0)} 283`;
    document
        .getElementById("base-timer-path-remaining")
        .setAttribute("stroke-dasharray", circleDasharray);
    document
        .getElementById("base-timer-path-remaining")
        .style.width = (timeLeft / timeLimit * 100).toString() + "%";
}
