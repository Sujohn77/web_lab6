<?php $pdo->query("SET CHARACTER SET utf8"); 

$row_menu = [
    {
        title:'Swiss',
        body:' Теперь с 2011 года всем делаются биометрические удостоверения (помнится в прошлом году за это голосовали), поэтому и отправили в Цюрих. Съездила туда 13-го, по дороге, как обычно, заблудившись в цюрихских переулках - выбиралась по GPS (да здравствует та, что встроена в машину!! от обычной забыла проводок.. как-то очень уж по-женски все получилось).'
    },
    {
        title:'Swiss',
        body:'  Если ты выходил замуж за/женился на гражданине Швейцарии, то паспорт тебе выдавали автоматически. Потом (в каком году не знаю точно) лавочку эту по понятным причинам прикрыли. Теперь тебе выдается вид на жительство категории "В" (бэ то бишь), которое нужно обновлять каждый год в течение пяти лет. После пяти лет выдается таки паспорт (вроде как безо всяких экзаменов и т.п. - впрочем, этот вопрос я еще не изучала, через два года как раз и проверим).'
    }
    {
        title:'Swiss',
        body:'В Винтертуре существует организация под названием "Семьи на день" (Tagesfamilien Winterthur). Она предлагает возможность семьям, которым нужно с кем-то регулярно оставлять детей, найти так называемую "маму на день" (Tagesmutter).'
    }
]

foreach ($q_res as $row_menu) {
    $pdo->query(`INSERT INTO articles (title, body) VALUES (`+$q_res.title+`, `+$q_res.body+`)`)
}

?>