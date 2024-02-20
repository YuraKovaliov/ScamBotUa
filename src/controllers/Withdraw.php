<?php


class Withdraw
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

    public function Withdraw()
    {
        //ВЫВЕСТИ
        if ($this->message == '💳Вивести') {
            $res32112 = mysqli_fetch_assoc(mysqli_query($this->connect, "SELECT `user_id` FROM `Tiktok` WHERE `user_id` = $this->chat_id"));
            $text678 = "ID облікового запису :" . ' ' . $res32112['user_id'] . "\nСтатус: ❌ Не верифіковано\n\n\n⬇️Щоб верифікувати обліковий запис, перейдіть за кнопкою нижче";
            $klava1234567 =[[['text' => "✅Верифікувати", 'callback_data' => 'vere']],[['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
            $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava1234567);
            $this->bote->sendMessage($this->chat_id, $text678, 'html', false, null, $keyboard);
        }
            //ПОДПИСКА И ФЕРЕФИКАЦИЯ
        if ($this->callback_query == 'vere') {
            $textveref = 'Щоб верифікувати свій обліковий запис потрібно бути підписаним на наступні спонсорські канали 📩';
            $klava1234567 =[[['text' => '☑️Підписатися', 'url' => 'https://t.me/myltseriall_bot']],[['text' => '☑️Підписатися', 'url' => 'https://t.me/myltseriall_bot']],[['text' => '☑️Підписатися', 'url' => 'https://t.me/myltseriall_bot']],[['text' => '🔚Головне меню', 'callback_data' => 'Главное меню']]];
            $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava1234567);
            $this->bote->editMessageText($this->chat_id_callback, $this->message_id, $textveref, 'html');
            $this->bote->editMessageReplyMarkup($this->chat_id_callback, $this->message_id, $keyboard);
        }
    }
}