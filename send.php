<?php 
// если была нажата кнопка "Отправить" 
if($_POST['submit']) {
        $title = substr(htmlspecialchars(trim($_POST['title'])), 0, 1000); 
        $mess =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000); 
        // $to - кому отправляем 
        $to = 'Vitalik-23@tut.by'; 
        // $from - от кого 
        $from='test@test.ru'; 
        // функция, которая отправляет наше письмо
        mail($to, $title, $mess, 'From:'.$from); 
        echo 'Спасибо! Ваше письмо отправлено.'; 
} 
?>