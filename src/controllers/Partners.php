<?php


class Partners
{
    public $message;
    public $chat_id;
    public $bot;
    public $Photo_id;
    public $callback_query;
    public $username;
    public $firstname;
    public $chat_id_callback;
    public $connect;
    public $message_id;

    public function __construct($message, $chat_id, $bot, $Photo_id, $callback_query, $username, $firstname, $chat_id_callback, $connect, $message_id)
    {
        $this->message = $message;
        $this->chat_id = $chat_id;
        $this->bot = $bot;
        $this->Photo_id = $Photo_id;
        $this->callback_query = $callback_query;
        $this->username = $username;
        $this->firstname = $firstname;
        $this->chat_id_callback = $chat_id_callback;
        $this->connect = $connect;
        $this->message_id = $message_id;

    }

    public function Partners()
    {
        if($this->message == '💼Партнерам'){
            $klava = [[['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
            $text098 = "BAACAgIAAxkBAAIEzWXUHJ8qlHT01IbXskBDL0ZGbQU-AAKNSgACDTahSrDncWUG7Z6pNAQ";
            $text09 = '👷🏻‍♀️';
            $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
            $this->bot->sendMessage($this->chat_id,$text09);
            $this->bot->sendDocument($this->chat_id,$text098,'👷🏻‍♀️Цей розділ поки що у розробці..',null,$keyboard);
        }
    }
}