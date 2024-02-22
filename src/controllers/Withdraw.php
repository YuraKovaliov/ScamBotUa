<?php


class Withdraw
{

    public function creatInlaneKeyboardY()
    {
        $klava1234567 = [[['text' => "✅Верифікувати", 'callback_data' => 'vereficete']],[['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
        return  $keyboard567 = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava1234567);
    }

    public function sendVisestu($bot,$connect,$chat_id)
    {
                $res32112 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT `user_id` FROM `Tiktok` WHERE `user_id` = $chat_id"));
                $text678 = "ID облікового запису :" . ' ' . $res32112['user_id'] . "\nСтатус: ❌ Не верифіковано\n\n\n⬇️Щоб верифікувати обліковий запис, перейдіть за кнопкою нижче";
                $bot->sendMessage($chat_id, $text678, 'html', false, null, $this->creatInlaneKeyboardY());
    }
}