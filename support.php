<?php
echo file_get_contents("./top.html");
?>

<button id="supportButton" onclick="support()">Otrzymaj support</button>

<div style="text-align: left;" id="support">
</div>

<script>
function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function support() {
    document.getElementById("supportButton").disabled = true;
    const supportDiv = document.getElementById("support");
    supportDiv.innerHTML += "SELECT * FROM mysqlpasswords WHERE username = 'admin';<br />";
    await delay(200);
    supportDiv.innerHTML += "Próba połączenia z bazą danych przy użyciu zdobytych poświadczeń...<br />";
    await delay(2000);
    supportDiv.innerHTML += "Połączenie nieudane: Access denied for user 'admin'@'localhost' (using password: YES)<br />";
    await delay(1000);
    supportDiv.innerHTML += `Nawiązywanie połączenia z watykanem...<br /><img src="./img/pray.jpg" style="height: 100px; width: 100px; display: inline-block;" />`;
    await delay(500);
    supportDiv.innerHTML += `<img src="./img/pray-2.jpg" style="height: 50px; width: 50px; display: inline-block;" /><br />`;
    await delay(4000);
    supportDiv.innerHTML += `<span style="color: red; font-weight: bold;">Błąd: Nie można nawiązać połączenia z watykanem, odpowiedź serwera: Please renew your subscription to the Vatican Cloud.</span><br />`;
    await delay(2000);
    supportDiv.innerHTML += "Do twojego miejsca zamieszkania został wysłany gołąb z instrukcjami jak rozwiązać problem.<br />";
    await delay(2000);
    document.getElementById("supportButton").disabled = false;
}
</script>

<?php
echo file_get_contents("./bottom.html");
?>