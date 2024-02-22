<?php


class Helper
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





    public function helpers($chat_id,$bot)
    {
        $fileAlminPhoto = "AgACAgIAAxkBAAIEJmXUEXPmr27mD1PDIp5uGwtvNaW7AAJz3zEbDTahSiYCsGjoxyVZAQADAgADeAADNAQ";
        $helptext = "👤Адмін Бота\n\n📡Зв'язатися з адміном можна, натиснувши кнопку нижче📡";
        $klava =[[['text' => "🇺🇦Зв'язатися📡", 'url' => 'https://t.me/ogr2034']], [['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
        $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
        $bot->sendPhoto($chat_id,$fileAlminPhoto,$helptext,null,$keyboard);

//        if ($this->message == '/help'){
//            $fileAlminPhoto = "AgACAgIAAxkBAAIEJmXUEXPmr27mD1PDIp5uGwtvNaW7AAJz3zEbDTahSiYCsGjoxyVZAQADAgADeAADNAQ";
//            $helptext = "👤Адмін Бота\n\n📡Зв'язатися з адміном можна, натиснувши кнопку нижче📡";
//            $klava =[[['text' => "🇺🇦Зв'язатися📡", 'url' => 'https://t.me/ogr2034']], [['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
//            $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
//            $this->bot->sendPhoto($this->chat_id,$fileAlminPhoto,$helptext,null,$keyboard);
//        }
    }
}