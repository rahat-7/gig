document.addEventListener("DOMContentLoaded", function () {
  const ctx = document.getElementById("earningsChart").getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
      datasets: [{
        label: "Monthly Earnings",
        data: [520, 800, 1200, 950, 1500, 1730],
        backgroundColor: "#00f6ff",
        borderRadius: 4
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
