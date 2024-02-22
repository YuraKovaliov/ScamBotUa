<?php


class Profile
{

    public function createInlineKeyboard346(){
        return [[['text' => '🔚Головне меню', 'callback_data' => 'Главное меню']]];
    }

    public function pppppp($bot,$connect,$chat_id)
    {
        $res32 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT `firstname` FROM `Tiktok` WHERE `user_id` = $chat_id"));
        $res322 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT `user_many` FROM `Tiktok` WHERE `user_id` = $chat_id"));
        $res323 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT `video_luking` FROM `Tiktok` WHERE `user_id` = $chat_id"));
        $textyou1 = "<i style='font-family: Times New Roman, serif;'>👤 Мій профіль:\n\n🎈Ім'я :</i>" . ' ' . $res32['firstname'] . "<i style='font-family: Times New Roman, serif;'>\n💴Баланс:</i>" . ' ' . $res322['user_many'] . ' ' . '₴' . "<i style='font-family: Times New Roman, serif;'>\n👁‍🗨Переглянуто відео :</i>" . ' ' . $res323['video_luking'] . "<i style='font-family: Times New Roman, serif;'>\n🤝Запрошено: 0\n🗿Статус: ❌ Не верифіковано</i>";
        $klava = $this->createInlineKeyboard346();
        $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
        $bot->sendMessage($chat_id, $textyou1, 'html', false, null, $keyboard);
    }
}