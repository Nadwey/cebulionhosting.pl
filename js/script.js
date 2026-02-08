setTimeout(() => {
    alert(new Error("crypt-eth-worker-6ab10f.js failed to load, retrying with bitcoin"));
}, 2000);

const interval = setInterval(() => {
    const piosenka = document.getElementById("piosenka");
    if (piosenka.paused) {
        piosenka.play();
    } else {
        clearInterval(interval);
    }
}, 1000);
