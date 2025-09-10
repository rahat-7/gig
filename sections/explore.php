<?php
$jsonPath = __DIR__ . '/../data/gigs.json';
$gigs = [];

if (file_exists($jsonPath)) {
  $data = json_decode(file_get_contents($jsonPath), true);
  $gigs = $data["gigs"] ?? [];
}
?>

<section class="explore">
  <h2>Explore Gigs</h2>

  <!-- Category Filters -->
  <div class="categories">
    <button onclick="filterCategory('Graphics & Design')">Graphics & Design</button>
    <button onclick="filterCategory('Digital Marketing')">Digital Marketing</button>
    <button onclick="filterCategory('Writing & Translation')">Writing & Translation</button>
    <button onclick="filterCategory('Video & Animation')">Video & Animation</button>
  </div>

  <!-- Search Input -->
  <input type="text" id="gigSearch" placeholder="Search gigs..." style="margin:20px 0; padding:10px; width:100%; max-width:400px;">

  <!-- Fallback Message -->
  <p id="noResults" style="display:none; color:#f00; text-align:center; font-weight:bold;">
    No gigs match your search.
  </p>

  <!-- Gig Cards -->
  <div class="gig-cards" role="list">
    <?php foreach ($gigs as $gig): ?>
      <?php
        $title = $gig["title"] ?? "Untitled";
        $seller = $gig["seller"] ?? "Unknown";
        $price = $gig["price"] !== "0" ? $gig["price"] : "Free";
        $image = $gig["image"] ?? "default.jpg";
        $category = $gig["category"] ?? "Misc";
      ?>
      <div class="gig-card" data-category="<?= htmlspecialchars($category) ?>">
        <img src="assets/images/<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($title) ?>" />
        <h3><?= htmlspecialchars($title) ?></h3>
        <p>by <?= htmlspecialchars($seller) ?></p>
        <span><?= htmlspecialchars($price) ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</section>