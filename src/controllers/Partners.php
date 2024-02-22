<?php


class Partners
{

    public function Partner1($chat_id,$bot)
    {

            $klava = [[['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
            $text098 = "BAACAgIAAxkBAAIEzWXUHJ8qlHT01IbXskBDL0ZGbQU-AAKNSgACDTahSrDncWUG7Z6pNAQ";
            $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
            $bot->sendDocument($chat_id,$text098,'👷🏻‍♀️Цей розділ поки що у розробці..',null,$keyboard);

    }
}