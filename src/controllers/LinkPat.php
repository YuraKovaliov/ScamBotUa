<?php


class LinkPat
{
public function klavaPat(){
    $klava = [[['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
    return $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
}

public function textlins(){
    return $links = "https://t.me/tiktokplayua_bot?start=";
}

public function sendLinkPat($chat_id_callback,$bot,$message_id,$connect){
    $resultUser_ID = mysqli_fetch_assoc(mysqli_query($connect, "SELECT `user_id` FROM `Tiktok` WHERE `user_id` = $chat_id_callback"));
    $bot->editMessageText($chat_id_callback,$message_id,$this->textlins().$resultUser_ID['user_id'],'html');
    $bot->editMessageReplyMarkup($chat_id_callback,$message_id,$this->klavaPat());

}
}