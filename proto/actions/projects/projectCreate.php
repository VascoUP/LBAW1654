<html>
<head></heade>
<body>
<p>
<?php
    echo $_POST['projName'];
    if( isset($_POST["overview"]) )
        echo $_POST["overview"];
    else
        echo 'null';
    echo $_POST["tags"];
    echo $_POST["access"];
?>
</p>
</body>
</html>