<?php
class log
{
    public static function writeCSV ($e) {
        $date = new DateTime();
        $date -> setTimezone(new DateTimeZone("Europe/Paris"));

        $log = array(
            "Date" => $date -> format('Y-m-d h:i:s'),
            "Message" => $e
        );
        $log_file =  fopen ("./logs/logs" . $date -> format ('d-m-y') . ".csv", "a+");
        fputcsv($log_file, $log, ",");
        fclose($log_file);
    }
}
