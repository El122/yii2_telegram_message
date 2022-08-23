<?php

namespace app\controllers;

use Longman\TelegramBot\Telegram;
use Longman\TelegramBot\Request as TelegramRequest;

class TelegramController
{
    const API_KEY = "API_KEY";
    const BOT_NAME = "BOT_NAME";
    const CHAT_ID = "CHAT_ID";
    public $telegram;

    function __construct()
    {
        $this->telegram = new Telegram(self::API_KEY, self::BOT_NAME);
    }

    public function sendMessage($message)
    {
        TelegramRequest::sendMessage([
            'chat_id' => self::CHAT_ID,
            'text'    => $message
        ]);
    }
}
