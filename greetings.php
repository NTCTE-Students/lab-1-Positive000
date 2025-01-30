<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <title>Приветсвую!</title>
    <p>Этот файл дружелбный. Заполните форму ниже:</p>
    <form method="post">
        <input type="text" placeholder="Введните имя..." name="name" />
        <input type="submit" value="Поприветсвовать" />
    </form>
    <?php
        if (isset($_POST['name'])) {
            $greetings = htmlspecialchars(string: $_POST['name']);
            print("<p>Привет, {$_POST['name']} </p>");
        }
    ?>
</body>
</html>