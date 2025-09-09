<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>gig.com.bd</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body { background: #0f0f0f; color: #f0f0f0; font-family: sans-serif; margin: 0; padding: 0; }
    nav { display: flex; justify-content: space-between; align-items: center; padding: 20px; background: #111; }
    .nav-links a { margin: 0 10px; color: #00f6ff; text-decoration: none; }
    .cta { border: 2px solid #00f6ff; color: #00f6ff; padding: 10px 20px; border-radius: 6px; background: transparent; transition: 0.3s; }
    .cta:hover { background: #00f6ff; color: #000; box-shadow: 0 0 10px #00f6ff; }
    section { padding: 40px; }
    .toggle-bar button, .categories button { margin: 5px; padding: 10px 20px; border: none; border-radius: 4px; background: #222; color: #fff; cursor: pointer; }
    .toggle.active { background: #00f6ff; color: #000; }
    .gig-card { background: #1a1a1a; padding: 20px; margin: 10px 0; border-radius: 8px; color: #fff; }
    .stats div { display: inline-block; margin-right: 20px; }
    .testimonial { margin: 20px 0; font-style: italic; }
  </style>
  <script src="assets/js/script.js" defer></script>
</head>
<body>
<header>
  <nav>
    <div class="logo"><a href="#"><img src="assets/images/logo.png" alt="gig.com.bd" style="height:40px;"></a></div>
    <div class="nav-links">
      <a href="#explore">Explore</a>
      <a href="#dashboard">Dashboard</a>
      <a href="#testimonials">Testimonials</a>
    </div>
    <div class="nav-actions"><button class="cta">Log In</button></div>
  </nav>
</header>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/js/chart.js" defer></script>
<style>
.modal {
  display: none;
  position: fixed;
  z-index: 999;
  left: 0; top: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.8);
  backdrop-filter: blur(6px);
}
.modal-content {
  background: #111;
  margin: 10% auto;
  padding: 30px;
  border: 2px solid #00f6ff;
  border-radius: 8px;
  width: 300px;
  color: #fff;
  box-shadow: 0 0 20px #00f6ff;
}
.modal-content input {
  width: 100%;
  margin: 10px 0;
  padding: 10px;
  border: none;
  border-radius: 4px;
}
.close {
  float: right;
  font-size: 24px;
  cursor: pointer;
  color: #00f6ff;
}
</style>
