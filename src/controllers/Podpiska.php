<?php


class Podpiska
{

    public function createText1()
    {
        return 'Щоб верифікувати свій обліковий запис потрібно бути підписаним на наступні спонсорські канали 📩';
    }

    public function createinlimekeyboard(){
        return [[['text' => '☑️Підписатися', 'url' => 'https://t.me/myltseriall_bot']],[['text' => '☑️Підписатися', 'url' => 'https://t.me/myltseriall_bot']],[['text' => '☑️Підписатися', 'url' => 'https://t.me/myltseriall_bot']],[['text' => '🔚Головне меню', 'callback_data' => 'Главное меню']]];
    }


    public function sendPodpizdon($bot,$chat_id_callback,$message_id){

        $textveref1 = $this->createText1();
        $klava19 = $this->createinlimekeyboard();
        $keyboard1 = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava19);
        $bot->editMessageText($chat_id_callback, $message_id, $textveref1, 'html');
        $bot->editMessageReplyMarkup($chat_id_callback, $message_id, $keyboard1);

    }
}