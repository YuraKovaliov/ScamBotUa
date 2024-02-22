<?php


class Tiktok
{
    public function Random32(){
        $random_video_tiktok =array(
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
            'BAACAgIAAxkBAAICcmXT3SsFAfJEtCV8BRRH7B_OlJ2PAAIDSgACDTahSl5ip9U4VqbONAQ',
            'BAACAgIAAxkBAAICc2XT3U0mrrjlWRYeuwluyx_polScAAIESgACDTahSr12uGCEzi32NAQ',
            'BAACAgIAAxkBAAICdGXT3WiOGPCAKcUCwixuFB_0ao6uAAIFSgACDTahSkUWobJz242ENAQ',
            'BAACAgIAAxkBAAICdmXT3uhPpoWTmIeQd0wsHpPaeKLYAAIKSgACDTahShi_sT9LI2neNAQ',
            'BAACAgIAAxkBAAICeGXT3wu7yd44EZ5FeLXmI0QOR1t2AAIMSgACDTahSpBAV7oFPWPuNAQ',
            'BAACAgIAAxkBAAICemXT3zQkOMiI95UZFUMb9mMsbBdzAAIPSgACDTahSmBrKK6nSfIBNAQ',
            'BAACAgIAAxkBAAICe2XT317BE4SIbxB2AoSVcWOYtOkBAAIQSgACDTahSjHfHrKTv_V-NAQ',
            'BAACAgIAAxkBAAICfWXT34haTUuiHClNfHVNUtkyjxB-AAISSgACDTahSo-ovY3NrFNrNAQ',
            'BAACAgIAAxkBAAILuGXXF0NtE0geRUQBHDp_ryeu_5R3AAKDOAAChxe5Sl4KoKkvjT-wNAQ',
            'BAACAgIAAxkBAAILvWXXF7IBB9iwHQmZEj3MH4z9GubMAAKJOAAChxe5SjfHRHDIdz4hNAQ',
            'BAACAgIAAxkBAAILzmXXGKj3GpusNmvND11-l5W4D-E1AAKVOAAChxe5Ss2s_gfROENiNAQ',
            'BAACAgIAAxkBAAIL0mXXG4dv1Lb0DB9PA6dQgqW2NbOsAALDOAAChxe5SvtxzsS0pWUaNAQ',
            'BAACAgIAAxkBAAIL1mXXHCXFYI_pooZRdYssfILyC475AALGOAAChxe5ShsPLWcqLCStNAQ',
            'BAACAgIAAxkBAAIL2mXXHN_RvuzU8uwsqqxL_nvV2lY9AALPOAAChxe5Skc5JQa1qdNhNAQ',
            'BAACAgIAAxkBAAIL3mXXHbWQB9xLcZ9v5vOa8QABMLoTSAAC7TgAAocXuUozA3EjwZhswzQE'
    );
        $randomIndex = array_rand($random_video_tiktok);
       return $randomLink = $random_video_tiktok[$randomIndex];

    }

    public function createInlineKeybord()
    {
        $klava = [[['text' => "Перейти до наступного відео.🔝", 'callback_data' => 'video1']],
            [['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]];
        return $keybo = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava);
    }

    public function createInlineKeybordTY()
    {
        $klava1 = [
            [['text' => "Перейти до наступного відео.🔝", 'callback_data' => 'video2']],
            [['text' => "🔚Головне меню", 'callback_data' => 'Главное меню']]
        ];
        return $keyboard1 = new TelegramBot\Api\Types\Inline\InlineKeyboardMarkup($klava1);
    }

    public function createTiktokText()
    {
        return "💰 Ви заробили 3 ₴ гривні за перегляд відео!";
    }

    public function createVideoText()
    {
        return "🔎 Завантаження ТікТоків..";
    }

    public function sendVideoTik($bot,$chat_id,$connect)
    {
                $bot->sendMessage($chat_id, $this->createVideoText());
                sleep(1);
                $bot->sendVideo($chat_id, $this->Random32(), $this->createVideoText());
                sleep(16);
                $bot->sendMessage($chat_id, $this->createTiktokText(), 'html', false, null,$this->createInlineKeybord());
                $result_update12 = mysqli_query($connect, "UPDATE `Tiktok` SET user_many = user_many + 3 ,video_luking = video_luking + 1 WHERE `user_id` = $chat_id");
    }

    public function sendVideoTik1($bot,$connect,$chat_id_callback){

                $bot->sendMessage($chat_id_callback, $this->createVideoText());
                sleep(1);
                $bot->sendVideo($chat_id_callback, $this->Random32(), $this->createVideoText());
                sleep(16);
                $bot->sendMessage($chat_id_callback, $this->createTiktokText(), 'html', false, null, $this->createInlineKeybordTY());
                $result_update121 = mysqli_query($connect, "UPDATE `Tiktok` SET user_many = user_many + 3 ,video_luking = video_luking + 1 WHERE `user_id` = $chat_id_callback");

    }

    public function sendVideoTik2($bot,$connect,$chat_id_callback){

                $bot->sendMessage($chat_id_callback, $this->createVideoText());
                sleep(1);
                $bot->sendVideo($chat_id_callback, $this->Random32(), $this->createVideoText());
                sleep(15);
                $bot->sendMessage($chat_id_callback, $this->createTiktokText(), 'html', false, null, $this->createInlineKeybord());
                $result_update122 = mysqli_query($connect, "UPDATE `Tiktok` SET user_many = user_many + 3 ,video_luking = video_luking + 1 WHERE `user_id` = $chat_id_callback");

    }
}