<?php
$logFileName = 'log.txt';
$logContent = "Running through the function".PHP_EOL;
$date = new DateTime();
$date = $date->format("y:m:d h:i:s");
if ($handle = fopen($logFileName, 'a'))
{
  fwrite($handle, $date);
  fwrite($handle, PHP_EOL);
  fwrite($handle, $logContent);
  fwrite($handle, PHP_EOL);
 }
 fclose($handle);
// class Log {
//   public $date = date('d/m/Y - H:i:s');
//   public $log;
//   public function logguer(){

//   }

// }
//
// $log = new Log();

// try {
//   $instance = new PDO("");
// } catch (Exception $e) {
//   die($e->getMessage());
// }


 ?>
