const yearsEl = document.getElementById("years");
const monthsEl = document.getElementById("months");
const daysEl = document.getElementById("days");

function countdown() {
    const dateInicialInput = document.getElementById("dateInicial");
    const dateFinalInput = document.getElementById("dateFinal");

    const dateInicial = new Date(dateInicialInput.value);
    const dateFinal = new Date(dateFinalInput.value);

    const totalMilliseconds = dateFinal - dateInicial;

    if (totalMilliseconds < 0) {
        yearsEl.innerHTML = "00";
        monthsEl.innerHTML = "00";
        daysEl.innerHTML = "00";
        return;
    }

    const totalSeconds = totalMilliseconds / 1000;

    const years = Math.floor(totalSeconds / 31536000);
    const remainingSeconds1 = totalSeconds % 31536000;

    const months = Math.floor(remainingSeconds1 / 2592000);
    const remainingSeconds2 = remainingSeconds1 % 2592000;

    const days = Math.floor(remainingSeconds2 / 86400);

    yearsEl.innerText = formatTime(years);
    monthsEl.innerText = formatTime(months);
    daysEl.innerText = formatTime(days);
}

function formatTime(time) {
    return time < 10 ? `0${time}` : `${time}`;
}

countdown();

setInterval(countdown, 1000);
