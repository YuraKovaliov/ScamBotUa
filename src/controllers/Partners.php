<?php


class Partners
{
    public function KeyBoard(){
        $klava = [[['text' => "🧬Згенерувати", 'callback_data' => 'link']], [['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
        return $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
    }

    public function PatText(){
    return $textPat = "👤 За кожного запрошеного користувача ви отримуватимете 50 гривень собі на баланс, генеруй і відправь своїм друзям:\n\n\nТицяй👇🏽";
    }

    public function videoPast(){
       return $text098 = "BAACAgIAAxkBAAIEzWXUHJ8qlHT01IbXskBDL0ZGbQU-AAKNSgACDTahSrDncWUG7Z6pNAQ";
    }


    public function Partner1($chat_id,$bot)
    {
            $bot->sendMessage($chat_id,$this->PatText(),'html',false,null,$this->KeyBoard());
    }
}