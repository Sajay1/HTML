<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body bgcolor="red">
    <?php
    $cricket_players=array("Virat Kohli","Sachin Tendulkar","Rohit Sharma");
    echo "Cricket Players<br>";
    print_r( $cricket_players);
    echo "Players name in table";
    echo "<table border=1 align=center><tr><th font color=red>Player</th></tr>";
    echo "<tr><td> $cricket_players[0]</td></tr>";
    echo "<tr><td> $cricket_players[1]</td></tr>";
    echo "<tr><td> $cricket_players[2]</td></tr>";
    echo "</table>";
    ?>
</body>
</html>