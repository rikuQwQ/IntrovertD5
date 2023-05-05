<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Формы</title>
</head>

<body>
    <h1>Форма 1</h1>
    <form action="formSender.php" method="POST" name="Форма для заявки 1">
        <label for="hatora-name">Ваше имя:</label>
        <input type="text" id="hatora-name" name="hatora-name"><br><br>
        <label for="phone">Телефон:</label>
        <input type="text" id="phone" name="phone"><br><br>
        <label for="email">Почта:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="comment">Ваш комментарий:</label>
        <textarea id="comment" name="comment"></textarea><br><br>
        <input type="submit" value="Отправить" name="form1">
    </form>
    <h1>Форма 2</h1>
    <form action="formSender.php" method="POST" name="Форма для заявки 2">
        <label for="hatora-name">Ваше имя:</label>
        <input type="text" id="hatora-name" name="hatora-name"><br><br>
        <label for="phone">Телефон:</label>
        <input type="text" id="phone" name="phone"><br><br>
        <label for="email">Почта:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="comment">Ваш комментарий:</label>
        <textarea id="comment" name="comment"></textarea><br><br>
        <input type="submit" value="Отправить" name="form2">
    </form>

    <script type="text/javascript">
        (function (d, w, k) {
            w.introvert_callback = function () {
                try {
                    w.II = new IntrovertIntegration(k);
                } catch (e) { console.log(e) }
            };

            var n = d.getElementsByTagName("script")[0],
                e = d.createElement("script");

            e.type = "text/javascript";
            e.async = true;
            e.src = "https://api.yadrocrm.ru/js/cache/" + k + ".js";
            n.parentNode.insertBefore(e, n);
        })(document, window, '3363f0c5');
    </script>
</body>

</html>