<?php


class Profile
{
    public function createInlineKeyboard346(){
        $klava =[[['text' => '🔚Головне меню', 'callback_data' => 'Главное меню']]];
        return $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
    }

    public function pppppp($bot,$connect,$chat_id)
    {
        $res32 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT `firstname`,`user_many`,`video_luking` FROM `Tiktok` WHERE `user_id` = $chat_id"));
        $textyou1 = "<i style='font-family: Times New Roman, serif;'>👤 Мій профіль:\n\n🎈Ім'я :</i>" . ' ' . $res32['firstname'] . "<i style='font-family: Times New Roman, serif;'>\n💴Баланс:</i>" . ' ' . $res32['user_many'] . ' ' . '₴' . "<i style='font-family: Times New Roman, serif;'>\n👁‍🗨Переглянуто відео :</i>" . ' ' . $res32['video_luking'] . "<i style='font-family: Times New Roman, serif;'>\n🤝Запрошено: 0\n🗿Статус: ❌ Не верифіковано</i>";
        $bot->sendMessage($chat_id, $textyou1, 'html', false, null, $this->createInlineKeyboard346());
    }
}