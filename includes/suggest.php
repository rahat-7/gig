<?php
$gigs = json_decode(file_get_contents("data/gigs.json"), true)["gigs"];
usort($gigs, fn($a, $b) => $b["views"] - $a["views"]);
$top = array_slice($gigs, 0, 3);
foreach ($top as $gig) {
  echo "<div class='gig-card'>
    <img src='assets/images/{$gig["image"]}' />
    <h3>{$gig["title"]}</h3>
    <p>by {$gig["seller"]}</p>
    <span>{$gig["price"]}</span>
  </div>";
}
?>
