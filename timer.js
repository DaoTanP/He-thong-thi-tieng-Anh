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

let timeLimit = 25;
let timeLeftDisplay = timeLimit;
let remainingPathColor = COLOR_CODES.info.color;

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
    timeLeftDisplay
)}</span>
</div>
`;

startTimer(timeLimit);

function onTimesUp(timerInterval) {
    clearInterval(timerInterval);
}

function startTimer(timeLimit) {
    let timePassed = 0;
    if (localStorage.time > timeLimit)
        localStorage.time = 0;
    let timeLeft = timeLimit;
    let timerInterval = setInterval(() => {
        timePassed += 1;
        localStorage.time++;
        timeLeft = timeLimit - parseInt(localStorage.time, 10);
        document.getElementById("base-timer-label").innerHTML = formatTime(timeLeft);
        setCircleDasharray(timeLeft);
        setRemainingPathColor(timeLeft);

        if (timeLeft === 0) {
            onTimesUp(timerInterval);
        }
    }, 1000);
}

function countdown(timeLimit) {
    time = parseInt(localStorage.time);

    if (isNaN(time) || time > timeLimit) {
        alert("An error occured: time left variable is corrupted, resetting timer");
        localStorage.time = timeLimit;
        countdown();
        return null;
    }

    if (time <= 0) {
        alert("You found an easter egg!");
        return null;
    }

    document.getElementById("base-timer-label").innerHTML = formatTime(localStorage.time);
    setCircleDasharray(localStorage.time);
    setRemainingPathColor(localStorage.time);
    time--;
    localStorage.time = time;
    setTimeout('countdown()', 1000);
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
