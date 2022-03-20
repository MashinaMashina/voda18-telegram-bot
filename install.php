<?php
require __DIR__ . '/src/bootstrap.php';

try {
    // Create Telegram API object
    $telegram = new Longman\TelegramBot\Telegram($_ENV['BOT_TOKEN'], $_ENV['BOT_USERNAME']);

    // Set webhook
    $result = $telegram->setWebhook($_ENV['BOT_HOOK']);
    if ($result->isOk()) {
        echo $result->getDescription();
    }
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // log telegram errors
     echo $e->getMessage();
}