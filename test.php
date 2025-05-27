<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Test</title>
</head>
<body>
    <h1 class="hello">Welcome to Laragon + VS Code</h1>
    <p>This is a simple PHP page.</p>
    <?php
        echo "<p>Current date and time: " . date("Y-m-d H:i:s") . "</p>";
        echo "Hello"." World!<br>";
        $name = "AJUS";
        echo "Hello, $name!<br>";
        $array = array("Apple", "Banana", "Cherry");
        foreach ($array as $key => $value) {
            echo "Item $key: $value<br>";
        }
        echo "<p>PHP version: " . phpversion() . "</p>";
        echo "<p>Server software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
        echo "20.50";

    ?>
</body>
</html>
