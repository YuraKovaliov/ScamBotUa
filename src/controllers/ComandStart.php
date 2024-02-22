<?php

class comandStart
{


    public function createStarterInline()
    {
        $klava =[[['text'=> '👌Ознайомлений','callback_data'=> 'glavnaya']]];
       return $keyboard = new \TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
    }

    public function createStarterText($firstname)
    {
        return "Вітаю".'   '.$firstname."\n\n🔥Ми з'єднуємо авторів контенту в TikTok, і наших користувачів. За підвищення рейтингу ви отримуєте гроші.\n\n👀За кожен перегляд у TikTok ми платимо 3 ₴ гривні.\n\n\n✅ Тисні Ознайомлений, щоб уже почати заробляти.";
    }

    public function createStarterPhoto()
    {
        return "AgACAgIAAxkBAAMXZdOUIg4oEGXLtO-xqDjRKPH1sAIAAh3cMRsNNqFKuyBGj2FrIQ8BAAMCAAN5AAM0BA";
    }




    //Старт
    public function starter($bot,$chat_id,$firstname)
    {
        $bot->sendPhoto($chat_id,$this->createStarterPhoto(),$this->createStarterText($firstname),null,$this->createStarterInline());
    }
}