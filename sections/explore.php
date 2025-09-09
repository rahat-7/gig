<?php
echo "<section class='explore' id='explore'>
  <h2>Explore Gigs</h2>
  <input type='text' placeholder='Search for gigs...' />
  <div class='categories'>
    <button>Graphics & Design</button>
    <button>Digital Marketing</button>
    <button>Writing & Translation</button>
    <button>Video & Animation</button>
  </div>
  <div class='gig-cards'>";

$gigs = json_decode(file_get_contents("data/gigs.json"), true);
if ($gigs) {
  foreach ($gigs as $gig) {
    echo "<div class='gig-card'>
      <img src='assets/images/{$gig["image"]}' alt='Gig Thumbnail' />
      <h3>{$gig["title"]}</h3>
      <p>by {$gig["seller"]}</p>
      <span>{$gig["price"]}</span>
    </div>";
  }
} else {
  echo "<p>No gigs available.</p>";
}

echo "</div></section>";
?>
