<?php
function getSellerById($id) {
  $jsonPath = __DIR__ . '/../data/gigs.json';
  if (!file_exists($jsonPath)) return null;
  $data = json_decode(file_get_contents($jsonPath), true);
  foreach ($data["users"] ?? [] as $user) {
    if ($user["id"] === $id) return $user;
  }
  return null;
}

function renderGigCard($gig) {
  $title = $gig["title"] ?? "Untitled";
  $price = $gig["price"] !== "0" ? $gig["price"] : "Free";
  $svg = $gig["svg"] ?? null;
  $category = $gig["category"] ?? "Misc";
  $delivery = $gig["delivery_time"] ?? "N/A";
  $tags = $gig["tags"] ?? [];
  $seller = getSellerById($gig["seller_id"] ?? "");

  $imageHTML = $svg
    ? "<div class='gig-image-bg'><div class='svg-wrapper'>" . htmlspecialchars_decode($svg) . "</div></div>"
    : "<img src='assets/images/default.jpg' alt='" . htmlspecialchars($title) . "' />";

  $sellerHTML = $seller
    ? "<div class='seller'>
         <img src='assets/avatars/" . htmlspecialchars($seller["avatar"]) . "' alt='" . htmlspecialchars($seller["name"]) . "' />
         <strong>" . htmlspecialchars($seller["name"]) . "</strong>
         <span>⭐ " . htmlspecialchars($seller["rating"]) . "</span>
       </div>"
    : "<div class='seller'><strong>Unknown Seller</strong></div>";

  $tagHTML = implode(", ", array_map("htmlspecialchars", $tags));

  return "<div class='gig-card' data-category='" . htmlspecialchars($category) . "' role='listitem'>
    $imageHTML
    <h3>" . htmlspecialchars($title) . "</h3>
    $sellerHTML
    <p class='description'>" . htmlspecialchars($gig["description"] ?? "") . "</p>
    <span class='meta'>💰 $price · ⏱️ $delivery</span>
    <span class='tags'>" . $tagHTML . "</span>
  </div>";
}
?>
