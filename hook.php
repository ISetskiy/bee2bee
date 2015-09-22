<?php

$loader = require __DIR__.'/autoload.php';

$API_KEY = '128600740:AAHZzj8cnghStU';
$BOT_NAME = 'Beeline_b2b_spb_bot';

try {
    $telegram = new isetskiy\bee2bee ($API_KEY,$BOT_NAME);

    $telegram->handle();
} catch (isetskiy\bee2bee\Exception\TelegramException $e) {
    // echo $e->getMessage();
}
