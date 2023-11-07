<?php	
	include 'header.html';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Форма обратной связи</title>
</head>
<body>
    <form action="home.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">ФИО:</label>
            <input type="text" id="name" name="name" required value="<?php echo isset($_GET['name']) ? $_GET['name'] : ''; ?>">
        </div>
        <div>
            <label for="email">Ваш е-майл:</label>
            <input type="email" id="email" name="email" placeholder="example@example.com" required value="<?php echo isset($_GET['email']) ? $_GET['email'] : ''; ?>">
        </div>
        <div>
            <label for="appeal_type">Тема обращения:</label>
            <select id="appeal_type" name="appeal_type">
                <option value="Предложение" <?php echo (isset($_GET['appeal_type']) && $_GET['appeal_type'] == 'Предложение') ? 'selected' : ''; ?>>Предложение</option>
                <option value="Жалоба" <?php echo (isset($_GET['appeal_type']) && $_GET['appeal_type'] == 'Жалоба') ? 'selected' : ''; ?>>Жалоба</option>
            </select>
        </div>
        <div>
            <label for="message">Сообщение:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <div>
            <label for="file">Прикрепить файл:</label>
            <input type="file" id="file" name="file">
        </div>
        <div>
            <label>Источник информации:</label><br>
            <input type="radio" id="internet" name="source" value="Реклама из интернета">
            <label for="internet">Реклама из интернета</label><br>
            <input type="radio" id="friends" name="source" value="Рассказали друзья">
            <label for="friends">Рассказали друзья</label><br>
        </div>
        <div>
            <input type="checkbox" id="consent" name="consent">
            <label for="consent">Даю согласие на обработку данных</label>
        </div>
        <button type="submit">Отправить</button>
    </form>

</body>
</html>
