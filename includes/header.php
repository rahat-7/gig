<style>
body {
  font-family: 'Segoe UI', sans-serif;
  background: #0f0f0f;
  color: #fff;
}
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}
.gig-cards {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  justify-content: center;
}
.gig-card {
  width: 280px;
  background: #1a1a1a;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 12px #00f6ff;
  transition: transform 0.3s ease;
}
.gig-card:hover {
  transform: scale(1.05);
}
.gig-image-bg {
  width: 100%;
  height: 160px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: radial-gradient(circle at center, #00f6ff22, transparent);
}
.svg-wrapper svg {
  width: 100px;
  height: 100px;
  display: block;
}
.seller {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-top: 10px;
}
.seller img {
  width: 32px;
  height: 32px;
  border-radius: 50%;
}
.description {
  margin: 10px 0;
  font-size: 0.9em;
  color: #ccc;
}
.meta {
  display: block;
  margin-bottom: 5px;
  font-size: 0.85em;
}
.tags {
  font-size: 0.8em;
  color: #00f6ff;
}
.categories {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-bottom: 20px;
}
.categories button {
  padding: 8px 16px;
  border-radius: 4px;
  background: #00f6ff;
  color: #000;
  cursor: pointer;
}
.categories button.active {
  background: #fff;
  color: #00f6ff;
  font-weight: bold;
  box-shadow: 0 0 10px #00f6ff;
}
</style>
