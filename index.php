<!DOCTYPE html>
<html lang='it'>

<head>
    <meta charset='UTF-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width' initial-scale=1.0 />

    <title>zuingo88 - dbfirst</title>

    <!-- my style -->
    <link rel='stylesheet' href='style.css'>

    <!-- my script -->
    <script src=''></script>
</head>

<body>

    <div id="app" class="container">

        <div>
            <h1>Seleziona la stanza</h1>

            <ul>

                <?php

                require_once "data.php";

                $conn = getConnection();
                $sql = getStanzeSql();

                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $stmt->bind_result($id, $room_number);

                while ($stmt->fetch()) {

                    echo '<li>Numero <a href="/room.php?id=' . $id . '">' . $room_number . '</a></li>';
                }

                closeConn($conn, $stmt);

                ?>

            </ul>

        </div>

    </div>

</body>

</html>