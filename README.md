# Kapada - Clothing Store Website (Work in Progress)

Kapada is a small business clothing website developed as a personal project to showcase my frontend and backend web development skills.

---

## 🌐 Features

### Frontend (HTML, CSS, JS):
- Homepage with welcome message.
- Shop page with add-to-cart functionality.
- Cart items are stored in localStorage.
- Checkout form auto-fills the cart’s product and quantity.
- Clean and simple UI.

### Backend (PHP + Telegram Bot):
- `send_order.php` script sends order details directly to the owner's Telegram account using the Bot API.
- Sends: Name, Product, Quantity, Address, and Phone Number.

---

## ⚙️ Tech Stack
- HTML, CSS, JavaScript
- PHP (Backend)
- Telegram Bot API (for notifications)

---

## 🚧 Status
This is a **work in progress**. I am still learning and improving my skills in:
- Full-stack web development
- Better cart handling with multiple items
- Database integration for order history
- Secure backend practices

---

## 🧑‍💻 Author
This project is developed and maintained by me as part of my learning journey. It was originally listed on my resume as a frontend project and is now gradually being expanded into a full stack project.

---

## 📦 Deployment
To use this project:
1. Host the files on a PHP-supported server (e.g., 000webhost, InfinityFree, etc.)
2. Edit `send_order.php` with your Telegram Bot Token and Chat ID.

---

## 📬 Telegram Bot Setup (Required)
- Create a bot via [BotFather](https://t.me/botfather)
- Get your bot token
- Start a chat with your bot
- Use [getUpdates](https://api.telegram.org/bot<your-token>/getUpdates) to find your `chat_id`

---

## 💡 Future Improvements
- Full cart summary on checkout
- Email notifications or WhatsApp API integration
- Admin order dashboard
- Improved mobile responsiveness

---

Thanks for checking out **Kapada**!
