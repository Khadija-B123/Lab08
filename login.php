<?php include('header.inc'); ?>

  <main>
    <h2>Login</h2>

    <?php if (isset($_GET['error'])) { ?>
      <p>Invalid username or password. Please try again.</p>
    <?php } ?>

    <form method="post" action="process.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>

      <input type="hidden" name="token" value="K106237257">
      <input type="submit" value="Login">
    </form>
  </main>

<?php include('footer.inc'); ?>