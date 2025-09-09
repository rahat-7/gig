document.addEventListener('DOMContentLoaded', () => {
  // 🔘 Toggle Button Activation
  document.querySelectorAll('.toggle-bar .toggle').forEach(btn => {
    btn.addEventListener('click', () => {
      btn.classList.toggle('active');
    });
  });

  // 🔍 Gig Search Filter
  const searchInput = document.querySelector('.explore input');
  const gigCards = document.querySelectorAll('.gig-card');

  if (searchInput) {
    searchInput.addEventListener('input', () => {
      const query = searchInput.value.toLowerCase();
      gigCards.forEach(card => {
        const title = card.querySelector('h3').textContent.toLowerCase();
        card.style.display = title.includes(query) ? 'block' : 'none';
      });
    });
  }

  // 🧭 Smooth Scroll Navigation (if nav links are anchored)
  document.querySelectorAll('nav a[href^="#"]').forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const target = document.querySelector(link.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  // 📊 Dashboard Graph Placeholder (future hook)
  const graph = document.querySelector('.graph');
  if (graph) {
    graph.innerHTML = '<canvas id="earningsChart" width="300" height="150"></canvas>';
    // Future: inject Chart.js or custom SVG graph here
  }

  // 🚀 Onboarding CTA Hook
  const cta = document.querySelector('.cta');
  if (cta) {
    cta.addEventListener('click', () => {
      alert('Onboarding flow coming soon!');
      // Future: redirect to signup or modal
    });
  }
});
window.onclick = function(event) {
  const modal = document.getElementById("onboardModal");
  if (event.target === modal) {
    modal.style.display = "none";
  }
};
