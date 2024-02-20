<?php

class comandStart
{
    public $message;
    public $chat_id;
    public $bote;
    public $Photo_id;
    public $callback_query;
    public $username;
    public $firstname;
    public $chat_id_callback;
    public $message_id;
    public $User_name;
    public $connect;


    public function __construct($message, $chat_id, $bote, $Photo_id, $callback_query, $username, $firstname, $chat_id_callback,$message_id,$User_name,$connect)
    {
        $this->message = $message;
        $this->chat_id = $chat_id;
        $this->bote = $bote;
        $this->Photo_id = $Photo_id;
        $this->callback_query = $callback_query;
        $this->username = $username;
        $this->firstname = $firstname;
        $this->chat_id_callback = $chat_id_callback;
        $this->message_id = $message_id;
        $this->User_name = $User_name;
        $this->connect = $connect;
    }
    //Старт
    public function starter()
    {
        $klava = [[['text'=> '👌Ознайомлений', 'callback_data'=> 'glavnaya']]];
        $text = 'Вітаю'.'   '.$this->firstname."\n\n🔥Ми з'єднуємо авторів контенту в TikTok, і наших користувачів. За підвищення рейтингу ви отримуєте гроші.\n\n👀За кожен перегляд у TikTok ми платимо 3 ₴ гривні.\n\n\n✅ Тисні Ознайомлений, щоб уже почати заробляти.";
        $id_photo = "AgACAgIAAxkBAAMXZdOUIg4oEGXLtO-xqDjRKPH1sAIAAh3cMRsNNqFKuyBGj2FrIQ8BAAMCAAN5AAM0BA";
        $keyboard45= new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
        $this->bote->sendPhoto($this->chat_id,$id_photo,$text,null,$keyboard45);
    }
}