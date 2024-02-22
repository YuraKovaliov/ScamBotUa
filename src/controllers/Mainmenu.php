<?php


class Mainmenu
{
//    public $message;
//    public $chat_id;
//    public $bot;
//    public $Photo_id;
//    public $callback_query;
//    public $username;
//    public $firstname;
//    public $chat_id_callback;
//    public $connect;
//    public $message_id;
//
//
//    public function __construct($message, $chat_id, $bot, $Photo_id, $callback_query, $username, $firstname, $chat_id_callback, $connect, $message_id)
//    {
//        $this->message = $message;
//        $this->chat_id = $chat_id;
//        $this->bot = $bot;
//        $this->Photo_id = $Photo_id;
//        $this->callback_query = $callback_query;
//        $this->username = $username;
//        $this->firstname = $firstname;
//        $this->chat_id_callback = $chat_id_callback;
//        $this->connect = $connect;
//        $this->message_id = $message_id;
//
//    }
//

    public function createMainMenuKeyboard()
    {
        return [
            [['text' => "👨‍💻Почати заробляти"]],
            [['text' => '👤Профіль'],['text' => '📊Статистика']],
            [['text' => '💳Вивести'],['text' => '💼Партнерам']]];
    }


    public function createMainMenuText()
    {
        return "<i style='font-family: Times New Roman, serif;'>Головне меню</i>";
    }



    public function sendMainMenu($bot,$chat_id_callback)
    {
        $text = $this->createMainMenuText();
        $keyboard1 = new \TelegramBot\Api\Types\ReplyKeyboardMarkup($this->createMainMenuKeyboard(), true, true);
        $bot->sendMessage($chat_id_callback,$text,'html',false,null,$keyboard1);

    }

    public function Menu($bot,$chat_id_callback)
    {
        $text2 = $this->createMainMenuText();
        $keyboard2 = new \TelegramBot\Api\Types\ReplyKeyboardMarkup($this->createMainMenuKeyboard(), true, true);
        $bot->sendMessage($chat_id_callback,$text2,'html',false,null,$keyboard2);
    }
}