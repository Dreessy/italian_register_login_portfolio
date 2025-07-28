<?php
require_once 'config.php';
$message = '';
$registration_success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    try {
        $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ? )');
        if ($stmt->execute([$username, $password])) {
            $registration_success = true;
        } else {
            $message = 'Errore nella registrazione.';
        }
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            $message = 'Username già registrato. Scegli un altro username.';
        } else {
            $message = 'Errore nella registrazione.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Registrazione</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php if ($registration_success): ?>
            <h2>Complimenti, ti sei registrato con successo!</h2>
            <div class="links">
                <a href="login.php" class="button">Vai al Login</a>
                <a href="index.php" class="button">Torna alla Home</a>
            </div>
        <?php else: ?>
            <h2>Registrazione</h2>
            <form method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Registrati</button>
            </form>
            <div class="links">
                <a href="index.php">Torna alla Home</a>
            </div>
            <?php if ($message): ?>
                <p class="error-message"><?php echo $message; ?></p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>