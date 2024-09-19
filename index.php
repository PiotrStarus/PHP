<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correct_password = trim(file_get_contents('haslo.txt'));
    $user_password = $_POST['password'];
    if ($user_password === $correct_password) {
        header('Location: panel.php');
        exit();
    } else {
        $error_message = "Nieprawidłowe hasło";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
</head>
<body>
    <h1>Podaj hasło</h1>
    <form method="post" action="index.php">
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Zaloguj się</button>
    </form>
    <?php
    if (isset($error_message)) {
        echo "<p style='color: red;'>$error_message</p>";
    }
    ?>
</body>
</html>
