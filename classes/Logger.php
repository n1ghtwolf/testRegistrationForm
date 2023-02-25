<?php
class Logger {

    public function log($message) {
        $file = fopen('logs', 'a');
        fwrite($file, $message . PHP_EOL);
        fclose($file);
    }
}
