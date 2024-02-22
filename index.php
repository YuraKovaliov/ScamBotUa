<?php
include 'vendor/autoload.php';
include 'src/controllers/ComandStart.php';
include 'src/controllers/ComandDatabase.php';
include 'Router.php';

try {

    //БОТ_ТОКЕН
    define("TG_TOKEN","6833435270:AAHnsmhKw9syPeAir4pyA_wSJZQrz72pWMM");
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

    //$Database = new ComandDatabase($message,$chat_id,$bot,$Photo_id,$callback_query,$username,$firstname,$chat_id_callback,$connect,$message_id);


   if($message == "/start"){
       $ComandStart = new comandStart();
       $Database = new ComandDatabase();
            $ComandStart->starter($bot,$chat_id,$firstname);
            $Database->Database($chat_id,$connect,$bot,$username,$firstname);
   }else{
       $Route = new Router();
       $Route->routers($message,$chat_id,$bot,$Photo_id,$callback_query,$username,$firstname,$chat_id_callback,$connect,$message_id);

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


