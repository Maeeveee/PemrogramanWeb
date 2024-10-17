<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SessionDel</title>
</head>
<body>
    <?php
        session_unset();
        session_destroy();
        echo "All session variabel are now removed, and the session is destroyed.";
    ?>
</body>
</html>