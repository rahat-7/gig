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
function filterCategory(category) {
  const cards = document.querySelectorAll(".gig-card");
  cards.forEach(card => {
    card.style.display = card.dataset.category === category ? "block" : "none";
  });
}

document.getElementById("gigSearch").addEventListener("input", function () {
  const query = this.value.toLowerCase();
  document.querySelectorAll(".gig-card").forEach(card => {
    const title = card.querySelector("h3").textContent.toLowerCase();
    card.style.display = title.includes(query) ? "block" : "none";
  });
});
function setTheme(theme) {
  document.body.className = 'theme-' + theme;
}
function sortGigs(order) {
  const cards = Array.from(document.querySelectorAll(".gig-card"));
  cards.sort((a, b) => {
    const priceA = parseInt(a.querySelector("span").textContent.replace(/\D/g, ""));
    const priceB = parseInt(b.querySelector("span").textContent.replace(/\D/g, ""));
    return order === "asc" ? priceA - priceB : priceB - priceA;
  });
  const container = document.getElementById("gigCards");
  container.innerHTML = "";
  cards.forEach(card => container.appendChild(card));
}
function toggleAdmin() {
  const panel = document.querySelector(".moderation");
  if (panel) {
    panel.style.display = panel.style.display === "none" ? "block" : "none";
  }
}
function showModal() {
  const modal = document.getElementById("onboardModal");
  modal.classList.add("show");
  modal.style.display = "block";
}
function hideModal() {
  const modal = document.getElementById("onboardModal");
  modal.classList.remove("show");
  modal.style.display = "none";
}
document.querySelector(".onboarding .cta").onclick = showModal;
document.querySelector(".close").onclick = hideModal;
window.onclick = function(event) {
  const modal = document.getElementById("onboardModal");
  if (event.target === modal) hideModal();
};
fetch("data/gigs.json")
  .then(res => res.json())
  .then(data => {
    const sorted = data.gigs.sort((a, b) => b.views - a.views);
    const top = sorted.slice(0, 3);
    const container = document.getElementById("suggestedGigs");
    top.forEach(gig => {
      const card = document.createElement("div");
      card.className = "gig-card";
      card.innerHTML = `
        <img src="assets/images/${gig.image}" />
        <h3>${gig.title}</h3>
        <p>by ${gig.seller}</p>
        <span>${gig.price}</span>
      `;
      container.appendChild(card);
    });
  });
function filterCategory(category) {
  document.querySelectorAll(".categories button").forEach(btn => {
    btn.classList.remove("active");
    if (btn.textContent === category) btn.classList.add("active");
  });
  const cards = document.querySelectorAll(".gig-card");
  cards.forEach(card => {
    card.style.display = card.dataset.category === category ? "block" : "none";
  });
}
document.getElementById("gigSearch").addEventListener("input", function () {
  const query = this.value.toLowerCase();
  const cards = document.querySelectorAll(".gig-card");
  let matchCount = 0;
  cards.forEach(card => {
    const title = card.querySelector("h3").textContent.toLowerCase();
    const match = title.includes(query);
    card.style.display = match ? "block" : "none";
    if (match) matchCount++;
  });
  document.getElementById("noResults").style.display = matchCount === 0 ? "block" : "none";
});

document.getElementById("gigSearch").addEventListener("input", function () {
  const query = this.value.toLowerCase();
  const cards = document.querySelectorAll(".gig-card");
  let matchCount = 0;
  cards.forEach(card => {
    const title = card.querySelector("h3").textContent.toLowerCase();
    const match = title.includes(query);
    card.style.display = match ? "block" : "none";
    if (match) matchCount++;
  });
  document.getElementById("noResults").style.display = matchCount === 0 ? "block" : "none";
});
function setTheme(theme) {
  document.body.className = 'theme-' + theme;
  localStorage.setItem("theme", theme);
}
window.onload = function () {
  const saved = localStorage.getItem("theme");
  if (saved) setTheme(saved);
};
document.getElementById("gigSearch").addEventListener("input", function () {
  const query = this.value.toLowerCase();
  const cards = document.querySelectorAll(".gig-card");
  let matchCount = 0;

  cards.forEach(card => {
    const title = card.querySelector("h3").textContent.toLowerCase();
    const match = title.includes(query);
    card.style.display = match ? "block" : "none";
    if (match) matchCount++;
  });

  const fallback = document.getElementById("noResults");
  if (fallback) fallback.style.display = matchCount === 0 ? "block" : "none";
});
document.getElementById("gigSearch").addEventListener("input", function () {
  const query = this.value.toLowerCase();
  const cards = document.querySelectorAll(".gig-card");
  let matchCount = 0;
  cards.forEach(card => {
    const title = card.querySelector("h3").textContent.toLowerCase();
    const match = title.includes(query);
    card.style.display = match ? "block" : "none";
    if (match) matchCount++;
  });
  const fallback = document.getElementById("noResults");
  if (fallback) fallback.style.display = matchCount === 0 ? "block" : "none";
});
function setTheme(theme) {
  document.body.className = 'theme-' + theme;
  localStorage.setItem("theme", theme);
}
window.onload = function () {
  const saved = localStorage.getItem("theme");
  if (saved) setTheme(saved);
};
function activateTag(tagText) {
  document.querySelectorAll(".tag").forEach(tag => {
    tag.classList.remove("active");
    if (tag.textContent === tagText) tag.classList.add("active");
  });
}
