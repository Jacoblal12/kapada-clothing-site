<?php
$token = getenv('BOT_TOKEN'); 
$chat_id = '2134666178';  
$name = $_POST['name'] ?? 'N/A';
$product = $_POST['product'] ?? 'N/A';
$quantity = $_POST['quantity'] ?? 'N/A';
$address = $_POST['address'] ?? 'N/A';
$phone = $_POST['phone'] ?? 'N/A';

$message = "🛍️ *New Order Received*\\n";
$message .= "👤 Name: $name\\n";
$message .= "📦 Product: $product\\n";
$message .= "🔢 Quantity: $quantity\\n";
$message .= "📍 Address: $address\\n";
$message .= "📞 Phone: $phone";

$url = "https://api.telegram.org/bot$token/sendMessage";

$params = [
    'chat_id' => $chat_id,
    'text' => $message,
    'parse_mode' => 'Markdown'
];

file_get_contents($url . "?" . http_build_query($params));

echo "<h2 style='font-family:sans-serif;text-align:center;margin-top:50px;'>Thank you! Your order has been placed.</h2>";
?>
