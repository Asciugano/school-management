<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$logged = $_SESSION['logged'] ?? false;
?>

<body>
  <nav>
    <h2 class="logo">School</h2>
    <ul>
      <li><a href="/pages/courses.php">Corsi</a></li>
      <li><a href="#">Calendario</a></li>
      <?php if (!$logged): ?>
        <li><button onclick="window.location.href='/pages/login.php'" class="login">Login</button></li>
      <?php else: ?>
        <li><button onclick="window.location.href='/pages/logout.php'" class="logout">Logout</button></li>
      <?php endif; ?>
    </ul>
  </nav>

  <script src="/js/app.js"></script>
</body>
