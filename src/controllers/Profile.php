<?php


class Profile
{
    public $message;
    public $chat_id;
    public $bote;
    public $Photo_id;
    public $callback_query;
    public $username;
    public $firstname;
    public $chat_id_callback;
    public $connect;
    public $message_id;


    public function __construct($message, $chat_id, $bote, $Photo_id, $callback_query, $username, $firstname, $chat_id_callback, $connect, $message_id)
    {
        $this->message = $message;
        $this->chat_id = $chat_id;
        $this->bote = $bote;
        $this->Photo_id = $Photo_id;
        $this->callback_query = $callback_query;
        $this->username = $username;
        $this->firstname = $firstname;
        $this->chat_id_callback = $chat_id_callback;
        $this->connect = $connect;
        $this->message_id = $message_id;

    }

    public function Prifile(){
        //ПРОФИЛЬ
        if ($this->message == "👤Профіль") {
            $res32 = mysqli_fetch_assoc(mysqli_query($this->connect, "SELECT `firstname` FROM `Tiktok` WHERE `user_id` = $this->chat_id"));
            $res322 = mysqli_fetch_assoc(mysqli_query($this->connect, "SELECT `user_many` FROM `Tiktok` WHERE `user_id` = $this->chat_id"));
            $res323 = mysqli_fetch_assoc(mysqli_query($this->connect, "SELECT `video_luking` FROM `Tiktok` WHERE `user_id` = $this->chat_id"));
            $textyou = "👤 Мій профіль:\n\n🎈Ім'я :" . ' ' . $res32['firstname'] . "\n💴Баланс:" . ' ' . $res322['user_many'] . ' ' . '₴' . "\n👁‍🗨Переглянуто відео :" . ' ' . $res323['video_luking']."\n🤝Запрошено: 0\n🗿Статус: ❌ Не верифіковано";
            $klava =[[['text' => '🔚Головне меню', 'callback_data' => 'Главное меню']]];
            $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
            $this->bote->sendMessage($this->chat_id, $textyou, 'html', false, null, $keyboard);
        }
    }
}