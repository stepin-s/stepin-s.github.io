<?php 
    
    $email = $_POST["email"];
    
    $user_text = $_POST["user_text"];

    
    if(  $email=="" or $user_text==""){ 
        echo "Заполните все поля";
    }

    else{
        
        $to = "support@fedoperator.ru"; 
        $subject = "Письмо с обратной связи"; 
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "From: <test@mail.ru>\r\n";

       
        $message .= "Почта: ".$email."\n";
        $message .= "Сообщение: ".$user_text."\n";


        $send = mail($to, $subject, $message, $headers);

        
        if ($send == "true")
        {
            echo "Ваше сообщение отправлено. Мы ответим вам в ближайшее время.\r\n";
        }
        
        else
        {
            echo "Не удалось отправить, попробуйте снова!";
        }
    }

?>