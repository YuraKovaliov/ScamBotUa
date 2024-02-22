<?php


class Podpiska
{
    public function createText1()
    {
        return 'Щоб верифікувати свій обліковий запис потрібно бути підписаним на наступні спонсорські канали 📩';
    }

    public function createinlimekeyboard(){
        $klava19 = [[['text' => '☑️Підписатися', 'url' => 'https://t.me/myltseriall_bot']],[['text' => '☑️Підписатися', 'url' => 'https://t.me/myltseriall_bot']],[['text' => '☑️Підписатися', 'url' => 'https://t.me/myltseriall_bot']],[['text' => '🔚Головне меню', 'callback_data' => 'Главное меню']]];
        return $keyboard1 = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava19);
    }


    //отправка сообщения
    public function sendPodpizdon($bot,$chat_id_callback,$message_id){
        $bot->editMessageText($chat_id_callback, $message_id, $this->createText1(), 'html');
        $bot->editMessageReplyMarkup($chat_id_callback, $message_id, $this->createinlimekeyboard());
    }
}