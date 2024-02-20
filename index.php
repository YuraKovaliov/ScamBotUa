<?php
include 'vendor/autoload.php';
include 'src/controllers/ComandStart.php';
include 'src/controllers/ComandDatabase.php';
include 'src/controllers/ComandKeyboard.php';
include 'src/models/Tiktok.php';
include 'src/controllers/Mainmenu.php';
include 'src/controllers/Helper.php';
include 'src/controllers/Partners.php';
include 'src/controllers/Profile.php';
include 'src/controllers/Statistics.php';
include 'src/controllers/Withdraw.php';


try {

    define("TG_TOKEN","6833435270:AAHnsmhKw9syPeAir4pyA_wSJZQrz72pWMM");


    //$bot = new \TelegramBot\Api\Client(TG_TOKEN);
    $bot = new \TelegramBot\Api\BotApi(TG_TOKEN);

    //Получениее данных
    $Update = json_decode(file_get_contents("php://input"),true);
    $message = $Update['message']['text'];
    $chat_id = $Update['message']['chat']['id'];
    $chat_id_callback = $Update['callback_query']['message']['chat']['id'];
    $Photo_id = $Update['message']['photo']['2']['file_id'];
    $callback_query = $Update['callback_query']['data'];
    $username = $Update['message']['chat']['username'];
    $firstname = $Update['message']['chat']['first_name'];
    $callbak = $Update['callback_query']['data'];
    $message_id = $Update['callback_query']['message']['message_id'];
    $User_name = $Update['message']['chat']['first_name'];

    //БД поключение
    $connect = mysqli_connect('localhost', 'root', '', 'test_rbotest u');

    //Обьекты класса
    $ComandStart = new comandStart($message,$chat_id,$bot,$Photo_id,$callback_query,$username,$firstname,$chat_id_callback,$message_id,$User_name,$connect);
    $Database = new ComandDatabase($message,$chat_id,$bot,$Photo_id,$callback_query,$username,$firstname,$chat_id_callback,$connect,$message_id);
    $Tiktok = new Tiktok($message,$chat_id,$bot,$Photo_id,$callback_query,$username,$firstname,$chat_id_callback,$connect,$message_id);
    $Mainmenu = new Mainmenu($message,$chat_id,$bot,$Photo_id,$callback_query,$username,$firstname,$chat_id_callback,$connect,$message_id);
    $Helper = new Helper($message,$chat_id,$bot,$Photo_id,$callback_query,$username,$firstname,$chat_id_callback,$connect,$message_id);
    $Partners = new Partners($message,$chat_id,$bot,$Photo_id,$callback_query,$username,$firstname,$chat_id_callback,$connect,$message_id);
    $Profile = new Profile($message,$chat_id,$bot,$Photo_id,$callback_query,$username,$firstname,$chat_id_callback,$connect,$message_id);
    $Statistic = new Statistics($message,$chat_id,$bot,$Photo_id,$callback_query,$username,$firstname,$chat_id_callback,$connect,$message_id);
    $Withdraw = new Withdraw($message,$chat_id,$bot,$Photo_id,$callback_query,$username,$firstname,$chat_id_callback,$connect,$message_id);



   if($message == "/start"){
       $ComandStart->starter();
       $Database->Database();
   }else{
       $Tiktok->TiktokVideo();
        $Helper->helper();
        $Mainmenu->Menu();
        $Partners->Partners();
        $Profile->Prifile();
        $Statistic->Statistics();
        $Withdraw->Withdraw();
   }



    $bot->on(function (\TelegramBot\Api\Types\Update $update) use ($bot) {


    }, function () {
        return true;
    });

    $bot->run();

}
catch
(\TelegramBot\Api\Exception $e) {
    $e->getMessage();
}


