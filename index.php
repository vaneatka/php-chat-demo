<?php 
include 'Message.php';
include 'User.php';
$user1 = new User("marry77", "mar7@test.mail", "mar123", ["administrator"]);
$user2 = new User("john88", "joh8@test.mail", "joh123", []);


$message1 = new Message('hello', $user1, $user2);
$message2 = new Message('hi', $user2, $user1);

echo $message1->toHTML();
print $message2->toHTML();
 // 1) подключить необходимые библиотеки
 // 2) создать первого пользователя ("marry77", "mar7@test.mail", "mar123", ["administrator"])
 // 3) создать второго пользователя ("john88", "joh8@test.mail", "joh123", [])
 // 4) выслать сообщение ("Hello!") от имени второго - первому
 // 5) выслать сообщение ("Hi!") от имени первого - второму

 // * проверку делайте print / var_dump
?>