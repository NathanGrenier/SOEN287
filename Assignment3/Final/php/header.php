<?php
echo '
<header>
<div class="nav-container">
  <div class="logo-container">
    <a href="index.php"><img alt="Logo" src="Pictures/logo.png"></a>
  </div>
  <div class="title-container">
    <h1>Animal Lover\'s Dog and Cat Adoption Center</h1>
  </div>
  <div class="login-container">
    <form class="logout" method="post" action="php/logout.php">
      <button class="button" type="submit" name="logout">Logout</button>
    </form>
  </div>
</div>
<div class="nav-container">
  <div class="date-container">
    <h3 id="currentDate"></h3>
    <h3 id="currentTime"></h3>
  </div>
</div>
<script src="js/doDate.js"></script>
</header>';
?>