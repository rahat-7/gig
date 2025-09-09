<?php
include "admin-check.php";
$currentUser = "rahat.fcca@gmail.com"; // Replace with session or login logic
if (isAdmin($currentUser)) {
  echo <<<HTML
  <section class="moderation">
    <h2>Admin Panel</h2>
    <button class="cta">Approve Gigs</button>
    <button class="cta">Ban User</button>
    <button class="cta">Edit Categories</button>
  </section>
  HTML;
}
?>
