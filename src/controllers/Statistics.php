<?php


class Statistics
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

    public function createInlineKeyboard12(){
      return [[['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
    }
    public function Statistics()
    {
        //СТАТИСТИКА
        switch ($this->message ){
            case '📊Статистика';
            $klava = $this->createInlineKeyboard12();
            date_default_timezone_set('Europe/Kiev');
            $date = date("d-m-Y H:i:s ");
            $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
            $res32112 = mysqli_fetch_assoc(mysqli_query($this->connect, "SELECT COUNT(*) AS id FROM `Tiktok` "));
            $res32113 = mysqli_fetch_assoc(mysqli_query($this->connect, "SELECT SUM(user_many) AS user_many FROM `Tiktok` "));
            $res321135 = mysqli_fetch_assoc(mysqli_query($this->connect, "SELECT SUM(video_luking) AS video_luking FROM `Tiktok` "));
            $this->bot->sendMessage($this->chat_id,"👥Статистика на ".$date."\n\n✋Користувачів Бота :".' '.$res32112['id']."\n💰Зароблено Користувачами :".' '.$res32113['user_many'].' '."₴\n🏦Виплачено : 9700₴\n👨‍💻 Переглянуто Відео :".' '.$res321135['video_luking']."\n\n\n",'html',false,null,$keyboard);
            break;
        }
    }
}