<?php
require_once 'config.php';

function getUserOS() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_array = [
        '/windows nt 10/i'     => 'Windows 10',
        '/windows nt 6.3/i'    => 'Windows 8.1',
        '/windows nt 6.2/i'    => 'Windows 8',
        '/windows nt 6.1/i'    => 'Windows 7',
        '/windows nt 6.0/i'    => 'Windows Vista',
        '/windows nt 5.1/i'    => 'Windows XP',
        '/macintosh|mac os x/i'=> 'Mac OS X',
        '/linux/i'             => 'Linux',
        '/iphone/i'            => 'iPhone',
        '/android/i'           => 'Android',
    ];
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            return $value;
        }
    }
    return 'Altro';
}

function getUserBrowser() {
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser_array = [
        '/msie/i'      => 'Internet Explorer',
        '/firefox/i'   => 'Firefox',
        '/safari/i'    => 'Safari',
        '/chrome/i'    => 'Chrome',
        '/edge/i'      => 'Edge',
        '/opera/i'     => 'Opera',
    ];
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            return $value;
        }
    }
    return 'Altro';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cookie_action'])) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $os = null;
    $browser = null;
    $accepted = ($_POST['cookie_action'] === 'accept') ? 1 : 0;
    if ($accepted) {
        $os = getUserOS();
        $browser = getUserBrowser();
    }
    $stmt = $pdo->prepare("INSERT INTO cookies_log (ip, os, browser, accepted) VALUES (?, ?, ?, ?)");
    $stmt->execute([$ip, $os, $browser, $accepted]);
    setcookie('cookie_banner', $accepted ? 'accepted' : 'rejected', time() + 31536000, "/");
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Home - Login System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Benvenuto nel sistema di autenticazione</h2>
        <div class="auth-links">
            <a href="register.php">Registrati</a>
            <span class="divider">|</span>
            <a href="login.php">Login</a>
        </div>
    </div>
    <?php if (!isset($_COOKIE['cookie_banner'])): ?>
    <div class="cookie-banner">
        <p>Questo sito utilizza cookie tecnici per raccogliere informazioni su IP, sistema operativo e browser. Vuoi accettare?</p>
        <form method="post" class="cookie-form">
            <button type="submit" name="cookie_action" value="accept">Accetta</button>
            <button type="submit" name="cookie_action" value="reject">Rifiuta</button>
        </form>
    </div>
    <?php endif; ?>
</body>
</html>
<script>
function getOS() {
  const userAgent = window.navigator.userAgent;
  if (/Windows NT 10/.test(userAgent)) return 'Windows 10';
  if (/Windows NT 11/.test(userAgent)) return 'Windows 11';
  if (/Windows NT 6\.3/.test(userAgent)) return 'Windows 8.1';
  if (/Windows NT 6\.2/.test(userAgent)) return 'Windows 8';
  if (/Windows NT 6\.1/.test(userAgent)) return 'Windows 7';
  if (/Macintosh|Mac OS X/.test(userAgent)) return 'Mac OS X';
  if (/Linux/.test(userAgent)) return 'Linux';
  if (/iPhone/.test(userAgent)) return 'iPhone';
  if (/Android/.test(userAgent)) return 'Android';
  return 'Altro';
}
// ... eventuale altro JS ...
</script>