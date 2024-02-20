<?php


class ComandDatabase
{
    public $message;
    public $chat_id;
    public $bote;
    public $Photo_id;
    public $callback_query;
    public $username;
    public $firstname;
    public $chat_id_callback;
    public $connect;
    public $message_id;
    public $user;

    public function __construct($message, $chat_id, $bote, $Photo_id, $callback_query, $username, $firstname, $chat_id_callback,$connect,$message_id)
    {
        $this->message = $message;
        $this->chat_id = $chat_id;
        $this->bote = $bote;
        $this->Photo_id = $Photo_id;
        $this->callback_query = $callback_query;
        $this->username = $username;
        $this->firstname = $firstname;
        $this->chat_id_callback = $chat_id_callback;
        $this->connect = $connect;
        $this->message_id = $message_id;
    }

    public function Database()
    {
            $select = "SELECT * FROM `Tiktok` WHERE user_id = $this->chat_id";
            $result_select = mysqli_query($this->connect, $select);
            if ($result_select === false) {
                $this->bote->sendMessage($this->chat_id, "Ошибка в запросе SELECT: " . mysqli_error($this->connect));
            } else {
                // Если запрос SELECT выполнен успешно
                $row_count = mysqli_num_rows($result_select);
                if ($row_count > 0) {
                     //Запись существует, выполняем UPDATE
                    $update = "UPDATE `Tiktok` SET `username` = '$this->username',`firstname`= '$this->firstname' WHERE `user_id` = $this->chat_id";
                    $result_update = mysqli_query($this->connect, $update);
                    if ($result_update === true) {
                        // Обновление выполнено успешно
                    } else {
                        $this->bote->sendMessage($this->chat_id, "Ошибка в запросе UPDATE: " . mysqli_error($this->connect));
                    }
                } else {
                    // Записи нет, выполняем INSERT
                    $insert = "INSERT INTO `Tiktok`(`user_id`, `username`, `firstname`,`user_many`,`video_luking`,`verification`,`Invited`) VALUES ($this->chat_id,'$this->username','$this->firstname',0,0,'not verification',0)";
                    $result_insert = mysqli_query($this->connect, $insert);
                    if ($result_insert === true) {
                        //  выполнена успешно
                    } else {
                        $this->bote->sendMessage($this->chat_id, "Ошибка в запросе INSERT: " . mysqli_error($this->connect));
                    }
                }
            }
        }

}