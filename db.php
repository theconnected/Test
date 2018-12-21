<?php
$link = mysqli_connect("127.0.0.1", "root", "123465", "test");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "<br/>Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "<br/>Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The test database is great." . PHP_EOL;
echo "<br/>nHost information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>