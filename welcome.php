<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

include('header.inc');
?>

  <main>
    <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
    <p>You have logged in successfully using a PHP session.</p>
  </main>

<?php include('footer.inc'); ?>