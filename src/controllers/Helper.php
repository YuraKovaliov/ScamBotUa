<?php


class Helper
{
    public function helpers($chat_id,$bot)
    {
        $fileAlminPhoto = "AgACAgIAAxkBAAIEJmXUEXPmr27mD1PDIp5uGwtvNaW7AAJz3zEbDTahSiYCsGjoxyVZAQADAgADeAADNAQ";
        $helptext = "👤Адмін Бота\n\n📡Зв'язатися з адміном можна, натиснувши кнопку нижче📡";
        $klava =[[['text' => "🇺🇦Зв'язатися📡", 'url' => 'https://t.me/ogr2034']], [['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
        $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
        $bot->sendPhoto($chat_id,$fileAlminPhoto,$helptext,null,$keyboard);

    }
}