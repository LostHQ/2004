<?php
function getExtraHeaderContent() {
  return getCSS('css/calculators.css') .
    getJS('js/calculators.js');
}
function getPageContent() {
    global $meta_data, $siteOptStyle;
    $meta_data['title'] = 'Player Lookup';
    $meta_data['og:title'] = $meta_data['title'];
    $meta_data['og:image'] = 'img/skillicons/stats.webp';

    return <<<HTML
<style>
.player-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0.5rem;
  margin-top: 1rem;
}

.skill-card {
  display: flex;
  flex-direction: column;
  align-items: center;
  border-bottom: none;
  border-radius: 10px;
  background: #3B322B;
  overflow: hidden;
}

.skill-card > *:not(.progress-bar) {
  padding: 0.1rem;
}

.skill-card img {
  width: 36px;
  height: 36px;
  object-fit: contain;
  margin-bottom: 0.2rem;
}
.skill-card h4 {
  margin: 0 0 0.3rem;
  font-size: 1.1rem;
  text-align: center;
}
.skill-card p {
  margin: 0.1rem 0;
  font-size: 1rem;
  text-align: center;
  width: 100%;
}

.empty-progress-bar {
  margin-top: auto;
  background: #333333;
  height: 36px;
  width: 100%;
  border-bottom-left-radius: 8px;
  border-bottom-right-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.progress-bar {
  margin-top: auto;
  width: 100%;
  height: 36px;
  background: linear-gradient(
    to right, #4caf50 60%, #333333; 60%
  );
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.9rem;
  font-weight: none;
  color: #fff;
}
</style>
<h2>Player Lookup</h2>
<div class="container">
    <div class="input-group">
        <label>Player Search</label>
        <input type="text" id="username" name="username" required
            pattern="^[A-Za-z0-9_ ]{1,12}$" title="Username must be 1–12 letters, numbers, spaces, or underscores only."
            minlength="1" maxlength="12"
            placeholder="Username">
        <button onclick="lookupPlayer()">Lookup Player</button>
    </div>
</div>
<hr>
<div id="playerInfo"></div>
<script src="pages/playerinfo/playerinfo.js"></script>
HTML;
}
