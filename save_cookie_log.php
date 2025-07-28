<?php
require_once 'config.php';
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ip = isset($_POST['ip']) ? $_POST['ip'] : null;
    $os = isset($_POST['os']) ? $_POST['os'] : null;
    $browser = isset($_POST['browser']) ? $_POST['browser'] : null;
    $accepted = isset($_POST['accepted']) ? intval($_POST['accepted']) : 0;
    if ($ip !== null) {
        $stmt = $pdo->prepare("INSERT INTO cookies_log (ip, os, browser, accepted) VALUES (?, ?, ?, ?)");
        $stmt->execute([$ip, $os, $browser, $accepted]);
        setcookie('cookie_banner', $accepted ? 'accepted' : 'rejected', time() + 31536000, "/");
        echo json_encode(['success' => true]);
        exit;
    }
}
echo json_encode(['success' => false, 'error' => 'Invalid request']);