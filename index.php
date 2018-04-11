<?php
require 'vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('Laboration 1');
$log->pushHandler(new StreamHandler('greetings.log', Logger::INFO));
$myString = "hello ".$argv[1]." what a wonderfull name\n";
echo "Hello ".$argv[1]." What a wonderfull name\n";
$log->info("$myString");
?>
<!DOCTYPE html>
<html>
<head>
<title>Testing, Testing>/title>
</head>
<body>
<?php
echo "hello, " . $argv[1];
?>
</body>
</html>
