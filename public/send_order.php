<?php
// Load environment variables from .env
$envPath = __DIR__ . '/.env';
if (!file_exists($envPath)) {
    die("Configuration file missing. Please add a .env file.");
}

$env = parse_ini_file($envPath, true);
if (!$env || !isset($env['BOT_TOKEN'])) {
    die("Bot token not configured in .env");
}

$token = $env['BOT_TOKEN'];
$chat_id = '2134666178';

// Collect form data safely
$name = htmlspecialchars($_POST['name'] ?? 'N/A', ENT_QUOTES, 'UTF-8');
$product = htmlspecialchars($_POST['product'] ?? 'N/A', ENT_QUOTES, 'UTF-8');
$quantity = htmlspecialchars($_POST['quantity'] ?? 'N/A', ENT_QUOTES, 'UTF-8');
$address = htmlspecialchars($_POST['address'] ?? 'N/A', ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars($_POST['phone'] ?? 'N/A', ENT_QUOTES, 'UTF-8');

// Create message
$message = "🛍️ *New Order Received*\n";
$message .= "👤 Name: $name\n";
$message .= "📦 Product: $product\n";
$message .= "🔢 Quantity: $quantity\n";
$message .= "📍 Address: $address\n";
$message .= "📞 Phone: $phone";

// Send to Telegram
$url = "https://api.telegram.org/bot$token/sendMessage";
$params = [
    'chat_id' => $chat_id,
    'text' => $message,
    'parse_mode' => 'Markdown'
];

$response = file_get_contents($url . "?" . http_build_query($params));

// Show confirmation
echo "<h2 style='font-family:sans-serif;text-align:center;margin-top:50px;'>Thank you! Your order has been placed.</h2>";
echo "<p style='text-align:center;'>&copy; 2025 Kapada. <a href='index.html'>Back to Home</a></p>";
