<?php
function isAdmin($email) {
  $users = json_decode(file_get_contents(__DIR__ . "/../data/users.json"), true);
  foreach ($users as $user) {
    if ($user["email"] === $email && $user["role"] === "admin") {
      return true;
    }
  }
  return false;
}
?>
