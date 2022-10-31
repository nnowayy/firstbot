<?php declare(strict_types=1);

$result = \TelegramBot\Request::setWebhook([
    'bot_token' => $_ENV['5653655942:AAG2y04Eu0GKQCHU8-bYb7YCo_sJNyCkGbk'],
    'url' => $_ENV['https://nnowayy.github.io/firstbot/'] . '/telegram',
    'drop_pending_updates' => true,
]);

echo $_ENV['REMOTE_PATH'] . '/telegram' . PHP_EOL;
echo $result->isOk() ? 'Webhook set successfully!' : 'Webhook set failed!';