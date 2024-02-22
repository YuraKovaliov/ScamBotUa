<?php


class ComandDatabase
{

    public function Database($chat_id,$connect,$bot,$username,$firstname)
    {
            $select = "SELECT * FROM `Tiktok` WHERE user_id = $chat_id";
            $result_select = mysqli_query($connect, $select);
            if ($result_select === false) {
                $bot->sendMessage($chat_id, "Ошибка в запросе SELECT: " . mysqli_error($connect));
            } else {
                // Если запрос SELECT выполнен успешно
                $row_count = mysqli_num_rows($result_select);
                if ($row_count > 0) {
                     //Запись существует, выполняем UPDATE
                    $update = "UPDATE `Tiktok` SET `username` = '$username',`firstname`= '$firstname' WHERE `user_id` = $chat_id";
                    $result_update = mysqli_query($connect, $update);
                    if ($result_update === true) {
                        // Обновление выполнено успешно
                    } else {
                        $bot->sendMessage($chat_id, "Ошибка в запросе UPDATE: " . mysqli_error($connect));
                    }
                } else {
                    // Записи нет, выполняем INSERT
                    $insert = "INSERT INTO `Tiktok`(`user_id`, `username`, `firstname`,`user_many`,`video_luking`,`verification`,`Invited`) VALUES ($chat_id,'$username','$firstname',0,0,'not verification',0)";
                    $result_insert = mysqli_query($connect, $insert);
                    if ($result_insert === true) {
                        //  выполнена успешно
                    } else {
                        $bot->sendMessage($chat_id, "Ошибка в запросе INSERT: " . mysqli_error($connect));
                    }
                }
            }
        }

}