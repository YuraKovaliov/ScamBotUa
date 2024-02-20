<?php


class Profile
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
    public function createInlineKeyboard346(){
        return [[['text' => '🔚Головне меню', 'callback_data' => 'Главное меню']]];
    }

    public function Prifile(){
        //ПРОФИЛЬ
        switch ($this->message){
            case '👤Профіль';
            $res32 = mysqli_fetch_assoc(mysqli_query($this->connect, "SELECT `firstname` FROM `Tiktok` WHERE `user_id` = $this->chat_id"));
            $res322 = mysqli_fetch_assoc(mysqli_query($this->connect, "SELECT `user_many` FROM `Tiktok` WHERE `user_id` = $this->chat_id"));
            $res323 = mysqli_fetch_assoc(mysqli_query($this->connect, "SELECT `video_luking` FROM `Tiktok` WHERE `user_id` = $this->chat_id"));
            $textyou = "<i style='font-family: Times New Roman, serif;'>👤 Мій профіль:\n\n🎈Ім'я :</i>" . ' ' . $res32['firstname'] . "<i style='font-family: Times New Roman, serif;'>\n💴Баланс:</i>" . ' ' . $res322['user_many'] . ' ' . '₴' . "<i style='font-family: Times New Roman, serif;'>\n👁‍🗨Переглянуто відео :</i>" . ' ' . $res323['video_luking']."<i style='font-family: Times New Roman, serif;'>\n🤝Запрошено: 0\n🗿Статус: ❌ Не верифіковано</i>";
            $klava = $this->createInlineKeyboard346();
            $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
            $this->bot->sendMessage($this->chat_id, $textyou, 'html', false, null, $keyboard);
            break;
        }
    }
}