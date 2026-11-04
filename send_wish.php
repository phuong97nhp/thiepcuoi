<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    $telegramBotToken = '8189301274:AAGQqnDuOKEmHIZC4Kd4ETSSG9JAK4Q74Kw';
    $chatId = '-4786121124';

    $text = "💌 *Lời chúc từ:* _{$name}_\n\n📝 *Nội dung:* \n{$message}";

    $url = "https://api.telegram.org/bot$telegramBotToken/sendMessage";

    $response = file_get_contents($url . '?' . http_build_query([
        'chat_id' => $chatId,
        'text' => $text,
        'parse_mode' => 'Markdown'
    ]));

    if ($response) {
        echo 'success';
    } else {
        echo 'error';
    }
}
?>
