<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ответ на обращение</title>
</head>
<body>

<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $appeal_type = $_POST['appeal_type'];
    $message = $_POST['message'];
?>

<section class="response">
    <h2>Ответ на обращение</h2>
    <p><strong>ФИО:</strong> <?php echo $name; ?></p>
    <p><strong>Текст обращения:</strong> <?php echo $message; ?></p>
    <?php 
        if(isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            echo "<p><strong>Прикрепленный файл:</strong> " . $_FILES['file']['name'] . "</p>";
        }
    ?>
    <form action="index.php" method="get">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="appeal_type" value="<?php echo $appeal_type; ?>">
        <input type="hidden" name="message" value="<?php echo $message; ?>">
        <button type="submit">Заполнить снова</button>
    </form>
</section>

</body>
</html>