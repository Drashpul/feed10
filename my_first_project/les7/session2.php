<?php
// сессия/
session_start();// инициализируем сессию
echo 'здавствуйте, '.$_SESSION ['username'] . "<!br>"; //вводтм сохраненное имя пользователя

echo "<a href='session3.php'>.Другая страница</a>";

//

?>