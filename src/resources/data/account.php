<?php

?>
<?php
// Проверяем, пусты ли переменные логина и id пользователя
if (!empty($_SESSION['login']) or !empty($_SESSION['id']))
{
    // Если пусты, то мы не выводим ссылку
    echo "
<form action='../resources/data/bd/testreg.php' method='post' style='text-align:center'>

    <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  'Войти', данные из полей отправятся на страничку testreg.php методом  'post' ***** -->
 <p>
    <label>Login:<br></label>
    <input name='login' type='text' size='15' maxlength='15'>
    </p>


    <!--**** В текстовое поле (name='login' type='text') пользователь вводит свой логин ***** -->
 
    <p>

    <label>Password:<br></label>
    <input name='password' type='password' size='15' maxlength='15'>
    </p>

    <!--**** В поле для паролей (name='password' type='password') пользователь вводит свой пароль ***** --> 

    <p>
    <input type='submit' name='submit' value='Enter'>

    <!--**** Кнопочка (type='submit') отправляет данные на страничку testreg.php ***** --> 
<br>
 <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 
<a href='../resources/data/bd/reg.php'>Registration</a> 
    </p></form>
    
";
}
else
{

    // Если не пусты, то мы выводим ссылку
    echo "Вы вошли на сайт, как Админ<br>";
    echo "
    <form action='../resources/data/bd/testreg.php' method='post' style='text-align:center'>
    
        <!--****  testreg.php - это адрес обработчика. То есть, после нажатия на кнопку  'Войти', данные из полей отправятся на страничку testreg.php методом  'post' ***** -->
     <p>
        <label>Заголовок:<br></label>
        <input name='login' type='text' size='15' maxlength='15'>
        </p>
    
    
        <!--**** В текстовое поле (name='login' type='text') пользователь вводит свой логин ***** -->
     
        <p>
    
        <label>Тело:<br></label>
        <textarea  size='15' maxlength='15'></textarea>
        </p>
    
        <!--**** В поле для паролей (name='password' type='password') пользователь вводит свой пароль ***** --> 
    
        <p>
        <input type='submit' name='submit' value='Добавить статью'>
    
        <!--**** Кнопочка (type='submit') отправляет данные на страничку testreg.php ***** --> 
    <br>
     <!--**** ссылка на регистрацию, ведь как-то же должны гости туда попадать ***** --> 

        </p></form>
        
    ";
    echo "<a href='../resources/data/bd/exit.php'>Exit</a>";

}