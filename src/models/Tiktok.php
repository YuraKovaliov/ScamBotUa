<?php

class Tiktok
{

    public function createInlineKeybord()
    {
        return [
            [['text' => "Перейти до наступного відео.🔝", 'callback_data' => 'video1']],
            [['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]
        ];
    }

    public function createInlineKeybordTY()
    {
        return [
            [['text' => "Перейти до наступного відео.🔝", 'callback_data' => 'video2']],
            [['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]
        ];
    }

    public function createTiktokText()
    {
        return "💰 Ви заробили 3 ₴ гривені за перегляд відео!";
    }

    public function createVideoText()
    {
        return "🔎 Завантаження ТікТоків..";
    }

    public function sendVideoTik($bot,$chat_id,$connect)
    {
        //МАТЕРИАЛ ИЗ TIK-TOK
        $random_video_tiktok = [
            'BAACAgIAAxkBAAIG3GXUvvZOhN3Xi6BatW7uOnIYcKAVAAJJRAACDTapSmToLNhLvFNUNAQ',
            'BAACAgIAAxkBAAOrZdO098eZVJctRHK_X6BVBqZlgKsAAsRIAAINNqFKHGiBJbK6tE80BA',
            'BAACAgIAAxkBAAICfWXT34haTUuiHClNfHVNUtkyjxB-AAISSgACDTahSo-ovY3NrFNrNAQ',
            'BAACAgIAAxkBAAOtZdO1RaJDF-quIvEYnzbaPT3hDooAAs9IAAINNqFKrQkNAAGyo2ieNAQ',
            'BAACAgIAAxkBAAOuZdO1ZiLz3k1VjoFCdZd3oOkIRNQAAtNIAAINNqFKI1y4Levm0nk0BA',
            'BAACAgIAAxkBAAOvZdO1f3HqkXJEyGks0b-4P27oEJoAAtZIAAINNqFKP3qy-2Y5n540BA',
            'BAACAgIAAxkBAAOwZdO1ng6Ztdj_8X1-ye9vhBLZ4oMAAtpIAAINNqFK9STLpF6XBvA0BA',
            'BAACAgIAAxkBAAOxZdO1pfG_VBq7JjlwVEPweG12Vf4AAttIAAINNqFKeAz7NLZPzAE0BA',
            'BAACAgIAAxkBAAICM2XT2ckGlPxr_UjxTDiajMC0fJNWAALxSQACDTahSpWhWME-URWtNAQ',
            'BAACAgIAAxkBAAICNGXT2lBagj-abgKXbzW97JQ2JasoAALySQACDTahSuFMi1i_8aulNAQ',
            'BAACAgIAAxkBAAICNWXT2mudfaX38WxtGSwEBw7wwU9KAALySQACDTahSuFMi1i_8aulNAQ',
            'BAACAgIAAxkBAAICNmXT2ozHWH4z9wcWz4roF2uVtzhaAALzSQACDTahShBmTBTOeCOkNAQ',
            'BAACAgIAAxkBAAICN2XT2qg7f0hZhC274bnFtrD8feRjAAL0SQACDTahStNu9LrYnPIdNAQ',
            'BAACAgIAAxkBAAICOGXT2ssXAew3qaWKbTOYKEYg2u55AAL1SQACDTahSmH1z5-DUjO2NAQ',
            'BAACAgIAAxkBAAICOWXT2u6qFWtxErC3HeJYGgOOjQqKAAL2SQACDTahSpd-16dTTSt8NAQ',
            'BAACAgIAAxkBAAICOmXT2wUDe5llbA5mavrKMcXFdJhRAAL4SQACDTahSrQmI89pb8XINAQ',
            'BAACAgIAAxkBAAICO2XT2xrbwuoZvc6AxPzm858nLgY6AAL5SQACDTahSig2hyNMmLigNAQ',
            'BAACAgIAAxkBAAICbmXT3IgHrYEOMXT_3081KDMQByvRAAL-SQACDTahSqeM6AO4E17KNAQ',
            'BAACAgIAAxkBAAICb2XT3M2m0hdvLILqrWnxNaP7i5HRAANKAAINNqFK7_7dWbEGdcQ0BA',
            'BAACAgIAAxkBAAICcGXT3OJKencb7EPKOKwWNgolos5ZAAIBSgACDTahSqIfJzjXoAKjNAQ',
            'BAACAgIAAxkBAAICcWXT3P2UqMtXqdgoEc_rbpTYZpmsAAICSgACDTahSnHgXUNKedfVNAQ',
            'BAACAgIAAxkBAAICcWXT3P2UqMtXqdgoEc_rbpTYZpmsAAICSgACDTahSnHgXUNKedfVNAQ ',
            'BAACAgIAAxkBAAICcmXT3SsFAfJEtCV8BRRH7B_OlJ2PAAIDSgACDTahSl5ip9U4VqbONAQ',
            'BAACAgIAAxkBAAICc2XT3U0mrrjlWRYeuwluyx_polScAAIESgACDTahSr12uGCEzi32NAQ',
            'BAACAgIAAxkBAAICdGXT3WiOGPCAKcUCwixuFB_0ao6uAAIFSgACDTahSkUWobJz242ENAQ',
            'BAACAgIAAxkBAAICdWXT3actQQqqGgRqenPeB52RYEPcAAIISgACDTahSuoO8Ye3fj5iNAQ',
            'BAACAgIAAxkBAAICdmXT3uhPpoWTmIeQd0wsHpPaeKLYAAIKSgACDTahShi_sT9LI2neNAQ',
            'BAACAgIAAxkBAAICd2XT3wZL8ZXZ1bBmTuhqJ0ncW8SeAAILSgACDTahSh8NbjtHuALgNAQ',
            'BAACAgIAAxkBAAICeGXT3wu7yd44EZ5FeLXmI0QOR1t2AAIMSgACDTahSpBAV7oFPWPuNAQ',
            'AgACAgIAAxkBAAICeWXT3yjHNNTqbk1XzvArRA0hp1f6AAJa3zEbDTahSgZDXECok4y-AQADAgADeQADNAQ',
            'BAACAgIAAxkBAAICemXT3zQkOMiI95UZFUMb9mMsbBdzAAIPSgACDTahSmBrKK6nSfIBNAQ',
            'BAACAgIAAxkBAAICe2XT317BE4SIbxB2AoSVcWOYtOkBAAIQSgACDTahSjHfHrKTv_V-NAQ',
            'BAACAgIAAxkBAAICfGXT325QFpSWYlpJ-0XnBrcyvyynAAIRSgACDTahSo-Iyqz8wuRbNAQ',
            'BAACAgIAAxkBAAICfWXT34haTUuiHClNfHVNUtkyjxB-AAISSgACDTahSo-ovY3NrFNrNAQ',
            'BAACAgIAAxkBAAICfmXT34z0JdZNJ18afu_lKXEijO_SAAITSgACDTahSpGwnd96cn5PNAQ',

        ];
        //РАНДОМАЙЗЕР
        $random_video = $random_video_tiktok[array_rand($random_video_tiktok)];

                $klava = $this->createInlineKeybord();
                $textvideo = $this->createVideoText();
                $textTiktok = $this->createTiktokText();
                $bot->sendMessage($chat_id, $textvideo);
                $bot->sendVideo($chat_id, $random_video, $textvideo);
                sleep(15);
                $bot->sendMessage($chat_id, $textTiktok, 'html', false, null, new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava));
                $result_update12 = mysqli_query($connect, "UPDATE `Tiktok` SET user_many = user_many + 3 ,video_luking = video_luking + 1 WHERE `user_id` = $chat_id");

//        }
    }

    public function sendVideoTik1($bot,$connect,$chat_id_callback){
        $random_video_tiktok1 = [
            'BAACAgIAAxkBAAIG3GXUvvZOhN3Xi6BatW7uOnIYcKAVAAJJRAACDTapSmToLNhLvFNUNAQ',
            'BAACAgIAAxkBAAOrZdO098eZVJctRHK_X6BVBqZlgKsAAsRIAAINNqFKHGiBJbK6tE80BA',
            'BAACAgIAAxkBAAICfWXT34haTUuiHClNfHVNUtkyjxB-AAISSgACDTahSo-ovY3NrFNrNAQ',
            'BAACAgIAAxkBAAOtZdO1RaJDF-quIvEYnzbaPT3hDooAAs9IAAINNqFKrQkNAAGyo2ieNAQ',
            'BAACAgIAAxkBAAOuZdO1ZiLz3k1VjoFCdZd3oOkIRNQAAtNIAAINNqFKI1y4Levm0nk0BA',
            'BAACAgIAAxkBAAOvZdO1f3HqkXJEyGks0b-4P27oEJoAAtZIAAINNqFKP3qy-2Y5n540BA',
            'BAACAgIAAxkBAAOwZdO1ng6Ztdj_8X1-ye9vhBLZ4oMAAtpIAAINNqFK9STLpF6XBvA0BA',
            'BAACAgIAAxkBAAOxZdO1pfG_VBq7JjlwVEPweG12Vf4AAttIAAINNqFKeAz7NLZPzAE0BA',
            'BAACAgIAAxkBAAICM2XT2ckGlPxr_UjxTDiajMC0fJNWAALxSQACDTahSpWhWME-URWtNAQ',
            'BAACAgIAAxkBAAICNGXT2lBagj-abgKXbzW97JQ2JasoAALySQACDTahSuFMi1i_8aulNAQ',
            'BAACAgIAAxkBAAICNWXT2mudfaX38WxtGSwEBw7wwU9KAALySQACDTahSuFMi1i_8aulNAQ',
            'BAACAgIAAxkBAAICNmXT2ozHWH4z9wcWz4roF2uVtzhaAALzSQACDTahShBmTBTOeCOkNAQ',
            'BAACAgIAAxkBAAICN2XT2qg7f0hZhC274bnFtrD8feRjAAL0SQACDTahStNu9LrYnPIdNAQ',
            'BAACAgIAAxkBAAICOGXT2ssXAew3qaWKbTOYKEYg2u55AAL1SQACDTahSmH1z5-DUjO2NAQ',
            'BAACAgIAAxkBAAICOWXT2u6qFWtxErC3HeJYGgOOjQqKAAL2SQACDTahSpd-16dTTSt8NAQ',
            'BAACAgIAAxkBAAICOmXT2wUDe5llbA5mavrKMcXFdJhRAAL4SQACDTahSrQmI89pb8XINAQ',
            'BAACAgIAAxkBAAICO2XT2xrbwuoZvc6AxPzm858nLgY6AAL5SQACDTahSig2hyNMmLigNAQ',
            'BAACAgIAAxkBAAICbmXT3IgHrYEOMXT_3081KDMQByvRAAL-SQACDTahSqeM6AO4E17KNAQ',
            'BAACAgIAAxkBAAICb2XT3M2m0hdvLILqrWnxNaP7i5HRAANKAAINNqFK7_7dWbEGdcQ0BA',
            'BAACAgIAAxkBAAICcGXT3OJKencb7EPKOKwWNgolos5ZAAIBSgACDTahSqIfJzjXoAKjNAQ',
            'BAACAgIAAxkBAAICcWXT3P2UqMtXqdgoEc_rbpTYZpmsAAICSgACDTahSnHgXUNKedfVNAQ',
            'BAACAgIAAxkBAAICcWXT3P2UqMtXqdgoEc_rbpTYZpmsAAICSgACDTahSnHgXUNKedfVNAQ ',
            'BAACAgIAAxkBAAICcmXT3SsFAfJEtCV8BRRH7B_OlJ2PAAIDSgACDTahSl5ip9U4VqbONAQ',
            'BAACAgIAAxkBAAICc2XT3U0mrrjlWRYeuwluyx_polScAAIESgACDTahSr12uGCEzi32NAQ',
            'BAACAgIAAxkBAAICdGXT3WiOGPCAKcUCwixuFB_0ao6uAAIFSgACDTahSkUWobJz242ENAQ',
            'BAACAgIAAxkBAAICdWXT3actQQqqGgRqenPeB52RYEPcAAIISgACDTahSuoO8Ye3fj5iNAQ',
            'BAACAgIAAxkBAAICdmXT3uhPpoWTmIeQd0wsHpPaeKLYAAIKSgACDTahShi_sT9LI2neNAQ',
            'BAACAgIAAxkBAAICd2XT3wZL8ZXZ1bBmTuhqJ0ncW8SeAAILSgACDTahSh8NbjtHuALgNAQ',
            'BAACAgIAAxkBAAICeGXT3wu7yd44EZ5FeLXmI0QOR1t2AAIMSgACDTahSpBAV7oFPWPuNAQ',
            'AgACAgIAAxkBAAICeWXT3yjHNNTqbk1XzvArRA0hp1f6AAJa3zEbDTahSgZDXECok4y-AQADAgADeQADNAQ',
            'BAACAgIAAxkBAAICemXT3zQkOMiI95UZFUMb9mMsbBdzAAIPSgACDTahSmBrKK6nSfIBNAQ',
            'BAACAgIAAxkBAAICe2XT317BE4SIbxB2AoSVcWOYtOkBAAIQSgACDTahSjHfHrKTv_V-NAQ',
            'BAACAgIAAxkBAAICfGXT325QFpSWYlpJ-0XnBrcyvyynAAIRSgACDTahSo-Iyqz8wuRbNAQ',
            'BAACAgIAAxkBAAICfWXT34haTUuiHClNfHVNUtkyjxB-AAISSgACDTahSo-ovY3NrFNrNAQ',
            'BAACAgIAAxkBAAICfmXT34z0JdZNJ18afu_lKXEijO_SAAITSgACDTahSpGwnd96cn5PNAQ',

        ];
        //РАНДОМАЙЗЕР
        $random_video1 = $random_video_tiktok1[array_rand($random_video_tiktok1)];
        $klava1 = $this->createInlineKeybordTY();
                $textvideo1 = $this->createVideoText();
                $textTiktok1 = $this->createTiktokText();
                $bot->sendMessage($chat_id_callback, $textvideo1);
                $bot->sendVideo($chat_id_callback, $random_video1, $textvideo1);
                $keyboard1 = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava1);
                sleep(15);
                $bot->sendMessage($chat_id_callback, $textTiktok1, 'html', false, null, $keyboard1);
                $result_update121 = mysqli_query($connect, "UPDATE `Tiktok` SET user_many = user_many + 3 ,video_luking = video_luking + 1 WHERE `user_id` = $chat_id_callback");

    }

    public function sendVideoTik2($bot,$connect,$chat_id_callback){

        $random_video_tiktok2= [
            'BAACAgIAAxkBAAIG3GXUvvZOhN3Xi6BatW7uOnIYcKAVAAJJRAACDTapSmToLNhLvFNUNAQ',
            'BAACAgIAAxkBAAOrZdO098eZVJctRHK_X6BVBqZlgKsAAsRIAAINNqFKHGiBJbK6tE80BA',
            'BAACAgIAAxkBAAICfWXT34haTUuiHClNfHVNUtkyjxB-AAISSgACDTahSo-ovY3NrFNrNAQ',
            'BAACAgIAAxkBAAOtZdO1RaJDF-quIvEYnzbaPT3hDooAAs9IAAINNqFKrQkNAAGyo2ieNAQ',
            'BAACAgIAAxkBAAOuZdO1ZiLz3k1VjoFCdZd3oOkIRNQAAtNIAAINNqFKI1y4Levm0nk0BA',
            'BAACAgIAAxkBAAOvZdO1f3HqkXJEyGks0b-4P27oEJoAAtZIAAINNqFKP3qy-2Y5n540BA',
            'BAACAgIAAxkBAAOwZdO1ng6Ztdj_8X1-ye9vhBLZ4oMAAtpIAAINNqFK9STLpF6XBvA0BA',
            'BAACAgIAAxkBAAOxZdO1pfG_VBq7JjlwVEPweG12Vf4AAttIAAINNqFKeAz7NLZPzAE0BA',
            'BAACAgIAAxkBAAICM2XT2ckGlPxr_UjxTDiajMC0fJNWAALxSQACDTahSpWhWME-URWtNAQ',
            'BAACAgIAAxkBAAICNGXT2lBagj-abgKXbzW97JQ2JasoAALySQACDTahSuFMi1i_8aulNAQ',
            'BAACAgIAAxkBAAICNWXT2mudfaX38WxtGSwEBw7wwU9KAALySQACDTahSuFMi1i_8aulNAQ',
            'BAACAgIAAxkBAAICNmXT2ozHWH4z9wcWz4roF2uVtzhaAALzSQACDTahShBmTBTOeCOkNAQ',
            'BAACAgIAAxkBAAICN2XT2qg7f0hZhC274bnFtrD8feRjAAL0SQACDTahStNu9LrYnPIdNAQ',
            'BAACAgIAAxkBAAICOGXT2ssXAew3qaWKbTOYKEYg2u55AAL1SQACDTahSmH1z5-DUjO2NAQ',
            'BAACAgIAAxkBAAICOWXT2u6qFWtxErC3HeJYGgOOjQqKAAL2SQACDTahSpd-16dTTSt8NAQ',
            'BAACAgIAAxkBAAICOmXT2wUDe5llbA5mavrKMcXFdJhRAAL4SQACDTahSrQmI89pb8XINAQ',
            'BAACAgIAAxkBAAICO2XT2xrbwuoZvc6AxPzm858nLgY6AAL5SQACDTahSig2hyNMmLigNAQ',
            'BAACAgIAAxkBAAICbmXT3IgHrYEOMXT_3081KDMQByvRAAL-SQACDTahSqeM6AO4E17KNAQ',
            'BAACAgIAAxkBAAICb2XT3M2m0hdvLILqrWnxNaP7i5HRAANKAAINNqFK7_7dWbEGdcQ0BA',
            'BAACAgIAAxkBAAICcGXT3OJKencb7EPKOKwWNgolos5ZAAIBSgACDTahSqIfJzjXoAKjNAQ',
            'BAACAgIAAxkBAAICcWXT3P2UqMtXqdgoEc_rbpTYZpmsAAICSgACDTahSnHgXUNKedfVNAQ',
            'BAACAgIAAxkBAAICcWXT3P2UqMtXqdgoEc_rbpTYZpmsAAICSgACDTahSnHgXUNKedfVNAQ ',
            'BAACAgIAAxkBAAICcmXT3SsFAfJEtCV8BRRH7B_OlJ2PAAIDSgACDTahSl5ip9U4VqbONAQ',
            'BAACAgIAAxkBAAICc2XT3U0mrrjlWRYeuwluyx_polScAAIESgACDTahSr12uGCEzi32NAQ',
            'BAACAgIAAxkBAAICdGXT3WiOGPCAKcUCwixuFB_0ao6uAAIFSgACDTahSkUWobJz242ENAQ',
            'BAACAgIAAxkBAAICdWXT3actQQqqGgRqenPeB52RYEPcAAIISgACDTahSuoO8Ye3fj5iNAQ',
            'BAACAgIAAxkBAAICdmXT3uhPpoWTmIeQd0wsHpPaeKLYAAIKSgACDTahShi_sT9LI2neNAQ',
            'BAACAgIAAxkBAAICd2XT3wZL8ZXZ1bBmTuhqJ0ncW8SeAAILSgACDTahSh8NbjtHuALgNAQ',
            'BAACAgIAAxkBAAICeGXT3wu7yd44EZ5FeLXmI0QOR1t2AAIMSgACDTahSpBAV7oFPWPuNAQ',
            'AgACAgIAAxkBAAICeWXT3yjHNNTqbk1XzvArRA0hp1f6AAJa3zEbDTahSgZDXECok4y-AQADAgADeQADNAQ',
            'BAACAgIAAxkBAAICemXT3zQkOMiI95UZFUMb9mMsbBdzAAIPSgACDTahSmBrKK6nSfIBNAQ',
            'BAACAgIAAxkBAAICe2XT317BE4SIbxB2AoSVcWOYtOkBAAIQSgACDTahSjHfHrKTv_V-NAQ',
            'BAACAgIAAxkBAAICfGXT325QFpSWYlpJ-0XnBrcyvyynAAIRSgACDTahSo-Iyqz8wuRbNAQ',
            'BAACAgIAAxkBAAICfWXT34haTUuiHClNfHVNUtkyjxB-AAISSgACDTahSo-ovY3NrFNrNAQ',
            'BAACAgIAAxkBAAICfmXT34z0JdZNJ18afu_lKXEijO_SAAITSgACDTahSpGwnd96cn5PNAQ',

        ];
        //РАНДОМАЙЗЕР
        $random_video2 = $random_video_tiktok2[array_rand($random_video_tiktok2)];
        $klava2 = $this->createInlineKeybord();
                $textvideo2 = $this->createVideoText();
                $textTiktok2 = $this->createTiktokText();
                $bot->sendMessage($chat_id_callback, $textvideo2);
                $bot->sendVideo($chat_id_callback, $random_video2, $textvideo2);
                $keyboard2 = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava2);
                sleep(15);
                $bot->sendMessage($chat_id_callback, $textTiktok2, 'html', false, null, $keyboard2);
                $result_update122 = mysqli_query($connect, "UPDATE `Tiktok` SET user_many = user_many + 3 ,video_luking = video_luking + 1 WHERE `user_id` = $chat_id_callback");

    }
}