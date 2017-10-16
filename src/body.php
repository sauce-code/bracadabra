<body>

    <header>
        <img src="img/BH3.png" width="300" alt="Bra" />
        <h2>BRA-CADA-BRA</h2>
        Konstruktionsanleitungen f&uuml;r ma&szlig;geschneiderte BHs
    </header>

    <table>
        <tr>
            <td id="navigation">
                <ul id="navlist">
                    <li><a href="?page=start">Startseite</a></li>
                    <li><a href="?page=grundschnittaufstellungrahmen">Grundschnittaufstellung des Rahmens</a></li>
                    <li><a href="?page=grundschnittaufstellungcups">Grundschnittaufstellung der Cups</a></li>
                    <li><a href="?page=korrekturen">Korrekturen und Formverbessung</a></li>
                    <li><a href="?page=schnittabwandlungen">Schnittabwandlungen</a></li>
                </ul>
            </td>            <td id="content">
                <?php include('src/content/' . $page . '.php'); ?>
            </td>
        </tr>
    </table>

    <footer>
        <p>BRA-CADA-BRA - Konstruktionsanleitungen f&uuml;r ma&szlig;geschneiderte BHs - <?php echo $author ?> - <a href="?page=impressum">Impressum</a></p>
    </footer>

</body>
