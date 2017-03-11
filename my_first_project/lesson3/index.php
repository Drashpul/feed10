<?php

//?><!--php-->

<hml>
    <body>
    <h2> Наш опросник </h2>
    <!-- h1   ... h4.. размер шрифта заголовка-->
    <form action="process.php" method="get">
        Ваше Имя? <input type="text" name="name" />
         <p> Какой из этих городов Вм нравится больше? </p>
            <select name="city">
                <option>Москва</option>
                <option>Париж</option>
                <option>Токио</option>
                <option>Стамбул</option>
                <option>Берлин</option>
            </select>
        <p><input type="submit" value="Отправить"/></p>
    </form>
    </body>
</hml>