// Credit: Mateusz Rybczonec

const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 10;
const ALERT_THRESHOLD = 5;

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

function initTimer(time) {
    clearInterval(timerInterval);
    timerInterval = null;
    while (timerInterval !== null) {
        timerInterval = null;
    }
    timeLimit = time;
    timeLeft = timeLimit;

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

function destroyTimer() {
    document.getElementById("timer").innerHTML = ``;
}

const onTimesUp = (func) => {
    clearInterval(timerInterval);
    func();
}

function startTimer() {
    if (localStorage.time == 'NaN' || parseInt(localStorage.time, 10) - (Date.now() / 1000) < 0)
        localStorage.time = (Date.now() / 1000) + timeLimit;

    timerInterval = setInterval(() => {
        timeLeft = Math.round(parseInt(localStorage.time, 10) - (Date.now() / 1000));
        document.getElementById("base-timer-label").innerHTML = formatTime(timeLeft);
        setCircleDasharray(timeLeft);
        setRemainingPathColor(timeLeft);

        if (timeLeft <= 0) {
            onTimesUp(timeUpEvent);
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
    if (timeLeft <= alert.threshold) {
        document
            .getElementById("base-timer-path-remaining")
            .classList.remove(warning.color);
        document
            .getElementById("base-timer-path-remaining")
            .classList.add(alert.color);
    } else if (timeLeft <= warning.threshold) {
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
}
