const yearsEl = document.getElementById("years");
const monthsEl = document.getElementById("months");
const daysEl = document.getElementById("days");
const hoursEl = document.getElementById("hours");
const minsEl = document.getElementById("mins");
const secondsEl = document.getElementById("secons");

function countdown() {
    const dateInicialInput = document.getElementById("dateInicial");
    const dateFinalInput = document.getElementById("dateFinal");
    const timeInicialInput = document.getElementById("timeInicial");
    const timeFinalInput = document.getElementById("timeFinal");

    const dateInicial = new Date(dateInicialInput.value);
    const dateFinal = new Date(dateFinalInput.value);

    const timeInicialParts = timeInicialInput.value.split(":");
    const timeFinalParts = timeFinalInput.value.split(":");
    
    const hoursInicial = parseInt(timeInicialParts[0]);
    const minsInicial = parseInt(timeInicialParts[1]);
    const secondsInicial = parseInt(timeInicialParts[2]);
    
    const hoursFinal = parseInt(timeFinalParts[0]);
    const minsFinal = parseInt(timeFinalParts[1]);
    const secondsFinal = parseInt(timeFinalParts[2]);

    const totalMilliseconds = dateFinal - dateInicial;
    const totalSeconds = totalMilliseconds / 1000;

    const years = Math.floor(totalSeconds / 31536000);
    const remainingSeconds1 = totalSeconds % 31536000;

    const months = Math.floor(remainingSeconds1 / 2592000);
    const remainingSeconds2 = remainingSeconds1 % 2592000;

    const days = Math.floor(remainingSeconds2 / 86400);
    const remainingSeconds3 = remainingSeconds2 % 86400;

    const hours = Math.floor(remainingSeconds3 / 3600);
    const remainingSeconds4 = remainingSeconds3 % 3600;

    const mins = Math.floor(remainingSeconds4 / 60);
    const seconds = remainingSeconds4 % 60;

    yearsEl.innerText = formatTime(years);
    monthsEl.innerText = formatTime(months);
    daysEl.innerText = formatTime(days);
    hoursEl.innerText = formatTime(hours + hoursInicial - hoursFinal);
    minsEl.innerText = formatTime(mins + minsInicial - minsFinal);
    secondsEl.innerText = formatTime(seconds + secondsInicial - secondsFinal);
}

function formatTime(time) {
    return time < 10 ? `0${time}` : `${time}`;
}

countdown();

setInterval(countdown, 1000);


