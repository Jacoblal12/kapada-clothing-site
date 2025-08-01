<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kapada - Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      margin: 0; padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body {
      background-color: #f5f5f5;
      color: #333;
    }
    header {
      background: #fff;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    .logo {
      font-size: 1.8rem;
      font-weight: 700;
      color: #1a1a1a;
    }
    .nav-links {
      display: flex;
      gap: 1rem;
    }
    .nav-links a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
    }
    .nav-links a:hover {
      color: #e91e63;
    }
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
    }
    .hamburger span {
      height: 3px;
      width: 25px;
      background: #333;
      margin: 4px 0;
      transition: 0.3s;
    }
    @media (max-width: 768px) {
      .nav-links {
        display: none;
        position: absolute;
        top: 70px;
        right: 0;
        background-color: #fff;
        flex-direction: column;
        width: 200px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      }
      .nav-links.active {
        display: flex;
      }
      .hamburger {
        display: flex;
      }
    }
    .hero {
      height: 90vh;
      background: url('https://images.unsplash.com/photo-1512436991641-6745cdb1723f') center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.7);
      text-align: center;
      padding: 2rem;
    }
    .hero h1 {
      font-size: 3rem;
      max-width: 800px;
    }
    footer {
      background: #1a1a1a;
      color: white;
      padding: 2rem;
      text-align: center;
    }
    footer a {
      color: #e91e63;
      text-decoration: none;
    }
  </style>
</head>
<body>

<header>
  <div class="logo">Kapada</div>
  <nav>
    <div class="hamburger" onclick="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="nav-links" id="navLinks">
      <a href="index.html">Home</a>
      <a href="shop.html">Shop</a>
      <a href="about.html">About</a>
      <a href="contact.html">Contact</a>
      <a href="#">Cart (<span id="cartCount">0</span>)</a>
    </div>
  </nav>
</header>

<section class="hero">
  <h1>Fashion that Speaks for You</h1>
</section>

<footer>
  <p>&copy; 2025 Kapada. Designed with love. <a href="index.html">Back to top</a></p>
</footer>

<script>
  function toggleMenu() {
    document.getElementById('navLinks').classList.toggle('active');
  }

  document.addEventListener('DOMContentLoaded', () => {
    const cart = JSON.parse(localStorage.getItem('kapada-cart')) || [];
    document.getElementById('cartCount').innerText = cart.length;
  });
</script>

</body>
</html>
