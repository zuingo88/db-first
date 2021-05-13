<!DOCTYPE html>
<html lang='it'>

<head>
    <meta charset='UTF-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width' initial-scale=1.0 />

    <title>zuingo88- dbfirst room</title>

    <!-- my style -->
    <link rel='stylesheet' href='style.css'>

    <!-- my script -->
    <script src=''></script>
</head>

<body>

    <div class="container column">
        <?php

        require_once "data.php";

        $id = $_GET['id'];

        $conn = getConnection();
        $sql = getDetailsSql();

        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i", $id);
        $stmt -> execute();
        $stmt -> bind_result($id, $floor, $beds);

        $stmt -> fetch();

        echo '<h2>Stanza Numero ' . $id . '</h2>',
        '<h3>Piano: ' . $floor .  '</h3>',
        '<h3>Numero Letti: ' . $beds . '</h3>'

        ?>

        <a href="index.php">Torna alla HOME</a>
    </div>

</body>

</html>