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
<?php
session_start();
function isAdmin($email) {
  $users = json_decode(file_get_contents(__DIR__ . '/../data/users.json'), true);
  foreach ($users['users'] as $user) {
    if ($user['email'] === $email && $user['isAdmin']) {
      return true;
    }
  }
  return false;
}
?>
