<?php

$loader = require __DIR__.'/autoload.php';

$API_KEY = '128600740:AAHZzj8mCQGcnghStU';
$BOT_NAME = 'Beeline_b2b_spb_bot';

try {
    $telegram = new isetskiy\bee2bee\Telegram($API_KEY, $BOT_NAME);

    echo $telegram->setWebHook('https://github.com/ISetskiy/bee2bee/hook.php');
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    echo $e->getMessage();
}
