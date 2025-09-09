<?php
echo <<<HTML
<section class="dashboard" id="dashboard">
  <h2>Dashboard</h2>
  <div class="stats">
    <div>Total Earnings<br><strong>$5,200</strong></div>
    <div>Active Gigs<br><strong>3</strong></div>
    <div>Orders Completed<br><strong>15</strong></div>
  </div>
  <div class="graph">[Earnings Graph Placeholder]</div>
  <div class="orders">
    <h3>Recent Orders</h3>
    <ul>
      <li>Logo Design – $50 – Sep 1</li>
      <li>Marketing Plan – $100 – Sep 3</li>
      <li>Translation – $75 – Sep 5</li>
    </ul>
  </div>
HTML;
include "moderation.php";
echo "</section>";
?>
<div class="earnings-graph">
  <canvas id="earningsChart" width="400" height="200"></canvas>
</div>
