<?php
echo file_get_contents("./top.html");
?>

O nas:
<p>
    Jesteśmy polskim dostawcą serwerów i hostingów stron www, wyróżnia nas zawodność, cena, pomoc klientowi i przyjmowanie płatności w cebuli! Gwarantujemy uptime aż 99.99%! (70% zasilanie + 29.99% internet)!
</p>
<p>
    Działamy już od <span id="wiek">-</span> lat!
</p>

<!-- Sekcja Serwerów - ujednolicona struktura -->
<div class="pakiety">
    <div class="pakiet">
        <h3>Pakiet 1: Krążek cebulowy</h3>
        <p><strong>Cena:</strong> 39.99 PLN / mies. (+ 23% VAT)</p>
        <ul>
            <li>2 wirtualne rdzenie Intel Xeon SL72F lub lepszy</li>
            <li>RAM: 8 MB</li>
            <li>Dysk: 100 MB</li>
            <li>Łącze: 2 Mbps (Transfer: 512 MB)</li>
            <li><a href="./zamow.php">ZAMÓW</a></li>
        </ul>
    </div>

    <div class="pakiet">
        <h3>Pakiet 2: Krem cebulowy</h3>
        <p><strong>Cena:</strong> 179.99 PLN / mies. (+ 23% VAT)</p>
        <ul>
            <li>Dedykowany Intel Pentium MMX SL26J</li>
            <li>RAM: 32 MB</li>
            <li>Dysk: 1.2 GB</li>
            <li>Gwarantowane Łącze: 10 Mbps (Transfer: 20 GB)</li>
            <li><a href="./zamow.php">ZAMÓW</a></li>
        </ul>
    </div>
</div>
<br />
<br />

<div class="www">

    <h1>NOWOŚĆ: Strony www w cebulionhosting.pl!</h1>

    <h2>Dlaczego warto wybrać nasze strony www?</h2>
    <ul>
        <li>Nowoczesne dyski</li>
        <li>Wydajne procesory</li>
        <li>Duży transfer</li>
    </ul>
    
    <div class="zdjecia">
        <img src="./img/old-server.jpg" />
        <img src="./img/arpanet.jpg" />
        <img src="./img/maintenance.jpg" />
        <img src="./img/old-server-server.jpg" />
        <img src="./img/ibm-3390.jpg" />
    </div>

    <!-- Sekcja WWW - ujednolicone jednostki i ceny -->
    <div class="pakiety">
        <div class="pakiet">
            <h3>Cebula czerwona</h3>
            <p><strong>Cena:</strong> 13.00 PLN / mies. (+ 23% VAT)</p>
            <ul>
                <li>PHP 4.0</li>
                <li>Pojemność: 1.44 MB</li>
                <li>Brak baz danych</li>
                <li>Transfer: 512 MB / mies.</li>
                <li><a href="./zamow.php">ZAMÓW</a></li>
            </ul>
        </div>

        <div class="pakiet">
            <h3>Prażona cebula</h3>
            <p><strong>Cena:</strong> 25.00 PLN / mies. (+ 23% VAT)</p>
            <ul>
                <li>PHP 4.1 (z wyłączonym register_globals)</li>
                <li>Pojemność: 50 MB</li>
                <li>MySQL 3.23</li>
                <li>Wsparcie dla FrontPage Extensions 98</li>
                <li>Transfer: 2 GB / mies.</li>
                <li><a href="./zamow.php">ZAMÓW</a></li>
            </ul>
        </div>

        <div class="pakiet">
            <h3>Sklep z cebulą</h3>
            <p><strong>Cena:</strong> 49.99 PLN / mies. (+ 23% VAT)</p>
            <ul>
                <li>PHP 4.2 (najnowsze u nas!)</li>
                <li>Pojemność: 500 MB (dysk talerzowy)</li>
                <li>MySQL 3.23</li>
                <li>Wsparcie dla FrontPage Extensions 98</li>
                <li>Serwer pilnowany przez psa (Azor)</li>
                <li>Transfer: 10 GB / mies.</li>
                <li><a href="./zamow.php">ZAMÓW</a></li>
            </ul>
        </div>
    </div>
</div>

<span style="color: gray"><i>Więcej pakietów w krótce...</i></span>
<br />

<a href="./support.php"><h1>Support!</h1></a>

<style>
    .www {
        text-align: left;
        padding: 40px;
    }

    .pakiety {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .pakiet {
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 5px;
        width: 300px;
        background-color: #f9f9f9;
    }

    .pakiet h3 {
        margin-top: 0;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .pakiet ul {
        list-style-type: none;
        padding: 0;
        text-align: left;
    }

    .zdjecia {
        display: flex;
        justify-content: start;
        height: 150px;
        overflow-x: scroll;
        margin-bottom: 20px;
    }
</style>

<script>
    // wsm to nie wiem ile dokładnie lat ma ta strona, ale repo na githubie tyle ma xD
    document.getElementById("wiek").innerText = Math.floor((new Date() - new Date("2023-03-17")) / (1000 * 60 * 60 * 24 * 365));
</script>

<?php
echo file_get_contents("./bottom.html");
?>
