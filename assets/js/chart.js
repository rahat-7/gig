document.addEventListener("DOMContentLoaded", function () {
  const ctx = document.getElementById("earningsChart").getContext("2d");
  new Chart(ctx, {
    type: "line",
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
      datasets: [{
        label: "Earnings",
        data: [500, 800, 1200, 900, 1500, 2000],
        borderColor: "#00f6ff",
        backgroundColor: "rgba(0, 246, 255, 0.1)",
        tension: 0.3,
        fill: true
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: { display: false }
      },
      scales: {
        y: { beginAtZero: true }
      }
    }
  });
});
