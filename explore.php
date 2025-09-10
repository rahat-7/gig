<?php
require_once __DIR__ . '/includes/functions.php';
$jsonPath = __DIR__ . '/data/gigs.json';
$gigs = [];

if (file_exists($jsonPath)) {
  $data = json_decode(file_get_contents($jsonPath), true);
  $gigs = $data["gigs"] ?? [];
}
?>

<section class="explore container">
  <h2>Explore Gigs</h2>

  <div class="categories">
    <button onclick="filterCategory('Graphics & Design')">Graphics & Design</button>
    <button onclick="filterCategory('Digital Marketing')">Digital Marketing</button>
    <button onclick="filterCategory('Writing & Translation')">Writing & Translation</button>
    <button onclick="filterCategory('Video & Animation')">Video & Animation</button>
    <button onclick="filterCategory('Programming & Tech')">Programming & Tech</button>
  </div>

  <input type="text" id="gigSearch" placeholder="Search gigs..." />

  <p id="noResults" style="display:none;">No gigs match your search.</p>

  <div class="gig-cards" role="list">
    <?php foreach ($gigs as $gig): echo renderGigCard($gig); endforeach; ?>
  </div>
</section>
