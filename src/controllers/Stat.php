<?php


class Stat
{

    public function createInlineKeyboard12(){
      return[[['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
    }

    public function Statistics1($bot,$connect,$chat_id)
    {
        //СТАТИСТИКА
            $klava = $this->createInlineKeyboard12();
            date_default_timezone_set('Europe/Kiev');
            $date = date("d-m-Y H:i:s ");
            $keyboard = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
            $res32112 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) AS id FROM `Tiktok` "));
            $res32113 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT SUM(user_many) AS user_many FROM `Tiktok` "));
            $res321135 = mysqli_fetch_assoc(mysqli_query($connect, "SELECT SUM(video_luking) AS video_luking FROM `Tiktok` "));
            $bot->sendMessage($chat_id,"👥Статистика на ".$date."\n\n✋Користувачів Бота :".' '.$res32112['id']."\n💰Зароблено Користувачами :".' '.$res32113['user_many'].' '."₴\n🏦Виплачено : 9700₴\n👨‍💻 Переглянуто Відео :".' '.$res321135['video_luking']."\n\n\n",'html',false,null,$keyboard);

    }
}