try {
    const interval = setInterval(() => {
        try {
            const piosenka = document.getElementById("piosenka");
            if (piosenka.paused) {
                piosenka.play();
            } else {
                clearInterval(interval);
                clearinterval(interval);
            }
        } catch (e) {
            alert(e);
        }
    }, 1000);
} catch (e) {
    alert(e);
}
