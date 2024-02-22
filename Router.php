<?php
include 'src/controllers/Helper.php';
include  'src/controllers/Mainmenu.php';
include  'src/controllers/Profile.php';
include  'src/controllers/Partners.php';
include 'src/controllers/Stat.php';
include  'src/controllers/Withdraw.php';
include 'src/controllers/Podpiska.php';
include 'src/controllers/LinkPat.php';
include 'src/models/Tiktok.php';

class Router
{
    public function routers($message,$chat_id,$bot,$Photo_id,$callback_query,$username,$firstname,$chat_id_callback,$connect,$message_id){
        switch($message){
            case '/help':
                $HelpCamand = new Helper();
                $HelpCamand->helpers($chat_id,$bot);
                break;
        }
        switch($callback_query){
            case 'glavnaya':
                $HomePage = new Mainmenu();
                $HomePage->sendMainMenu($bot,$chat_id_callback);
                break;
        }
        switch($message){
            case '👨‍💻Почати заробляти':
                $TikTokVideo = new Tiktok();
                $TikTokVideo->sendVideoTik($bot,$chat_id,$connect);
                break;
        }
        switch($callback_query){
            case 'video1':
                $TikTokVideo = new Tiktok();
                $TikTokVideo->sendVideoTik1($bot,$connect,$chat_id_callback);
                break;
        }
        switch($callback_query){
            case 'video2':
                $TikTokVideo = new Tiktok();
                $TikTokVideo->sendVideoTik2($bot,$connect,$chat_id_callback);
                break;
        }
        switch($callback_query){
            case 'Главное меню':
                $mein = new Mainmenu();
                $mein->Menu($bot,$chat_id_callback);
                break;
        }
        switch($message){
            case '💼Партнерам':
                $parter23 = new Partners();
                $parter23->Partner1($chat_id,$bot);
                break;
        }
        switch($message){
            case '📊Статистика':
                $State = new Stat();
                $State->Statistics1($bot,$connect,$chat_id);
                break;
        }
        switch($message){
        case '👤Профіль':
                $pro = new Profile();
                $pro->pppppp($bot,$connect,$chat_id);
                break;
        }
        switch($message){
            case'💳Вивести':
                $vis = new Withdraw();
                $vis->sendVisestu($bot,$connect,$chat_id);
                break;
        }
        switch ($callback_query){
            case 'vereficete':
                $vis1 = new Podpiska();
                $vis1->sendPodpizdon($bot,$chat_id_callback,$message_id);
                break;
        }
        switch ($callback_query ){
            case 'link':
                $linkp = new LinkPat();
                $linkp->sendLinkPat($chat_id_callback,$bot,$message_id,$connect);
                break;
        }
    }
}