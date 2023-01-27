<?php
require_once __DIR__ . '/vendor/autoload.php';

$channelName = 'news';
    $recipient= 'ExponentPushToken[s9pSLpJNfQEJcRe-WBuYw8]';
    // $recipient2 = 'ExponentPushToken[3HkXPJB4ScPQzLwgiZefCB]';

    
    // You can quickly bootup an expo instance
    $expo = \ExponentPhpSDK\Expo::normalSetup();
    
    // Subscribe the recipient to the server
    $expo->subscribe($channelName, $recipient);
    
    
    // Build the notification data
    $notification = [
    'title' => 'Aviso!!! 👺',
    'body' => 'Testando notifs 123...'];
    
    // Notify an interest with a notification
    $expo->notify([$channelName], $notification);


    $notification = ['body' => 'Hello World!', 'data'=> json_encode(array('someData' => 'goes here'))];

try {
    $instance = \ExponentPhpSDK\Expo::normalSetup();
    echo 'Succeeded! We have created an Expo instance successfully';
} catch (Exception $e) {
    echo 'Test Failed';
}
