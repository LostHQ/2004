<?php

function getPageContent() {
    global $meta_data;

    $meta_data['title'] = 'Changelog';
    $meta_data['og:title'] = $meta_data['title'];
    $meta_data['og:image'] = 'img/sword.png';

    return <<<HTML
<div style="display: inline-block; border: 1px solid #ccc;">
  <table width="100%" class="table">
    <tr>
      <th colspan="3">LostHQ is brought to you by</th>
    </tr>
    <tr>
      <td width="50%">Moley</td>
      <td>Eilert</td>
    </tr>
    <tr>
      <td>Halogod</td>
      <td>Collin</td>
    </tr>
  </table>
  <table width="100%" class="table">
    <tr>
      <th colspan="3">Special thanks to our additional Contributors:</th>
    </tr>
    <tr>
      <td width="50%">Sheeva</td>
      <td>Akg</td>
    </tr>
  </table>
  <table width="100%" class="table">
    <tr>
      <th colspan="3">Bug Hunter's Club:</th>
    </tr>
    <tr>
      <td width="33.33%">Hidaze</td>
      <td width="33.33%">Hydrated</td>
      <td width="33.33%">illjim</td>
    </tr>
    <tr>
      <td>Meltii</td>
      <td>Alprox666</td>
      <td>Jogizy</td>
    </tr>
    <tr>
      <td>R3dM45k</td>
      <td>Geerin</td>
      <td>14k</td>
    </tr>
    <tr>
      <td>Dee</td>
      <td>Fallnight</td>
      <td>Fran 2004</td>
    </tr>
    <tr>
      <td>Timondg</td>
      <td>Shrigis</td>
      <td>Nsyion</td>
    </tr>
    <tr>
      <td colspan="3">Sir Tyrael</td>
    </tr>
  </table>
</div>
<hr>
<h3>Change Log</h3>
<div id="log-table-container">
<style>
    #log-table-container {
      font-family: sans-serif;
    }

    #log-table-container #filter-input {
      margin-bottom: 10px;
      padding: 5px;
      width: 80%;
    }

    #log-table-container #pagination {
      margin-top: 10px;
      text-align: center;
    }

    #log-table-container #pagination button {
      padding: 5px 10px;
      margin: 2px;
      border: 1px solid #ccc;
      background: #eee;
      cursor: pointer;
    }

    #log-table-container #pagination button.active {
      background-color: #ccc;
      font-weight: bold;
    }

    #log-table-container table {
      width: 100%;
      text-align: left;
      border-collapse: collapse;
    }

    #log-table-container th {
      cursor: pointer;
      background-color:rgb(0, 0, 0);
    }

    #log-table-container th,
    #log-table-container td {
      padding: 8px;
      border: 1px solid #ddd;
    }
  </style>

<input type="text" id="filter-input" placeholder="Filter entries...">

<table id="entry-table">
  <thead>
    <tr>
      <th onclick="sortTable()">Date ⬍</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>23/10/2025</td><td>Added Nature Spirit and Priest in Peril Quests</td></tr>
    <tr><td>23/10/2025</td><td>Updated information across the site for cache 245</td></tr>
    <tr><td>06/10/2025</td><td>Added LostKit brought to you by Akg</td></tr>
    <tr><td>06/10/2025</td><td>Added Tools page</td></tr>
    <tr><td>11/09/2025</td><td>Added Guilds and Mini-Games to special guides</td></tr>
    <tr><td>08/09/2025</td><td>Updated theme of tables to match 2004scape</td></tr>
    <tr><td>08/09/2025</td><td>Added Stat Boosting guide</td></tr>
    <tr><td>03/09/2025</td><td>Added Strength and Hitpoints skill guides</td></tr>
    <tr><td>29/08/2025</td><td>Updated all skill guides</td></tr>
    <tr><td>26/08/2025</td><td>Added Key guide</td></tr>
    <tr><td>21/08/2025</td><td>Migrated to losthq.rs domain</td></tr>
    <tr><td>06/08/2025</td><td>Added Random Events guide</td></tr>
    <tr><td>04/08/2025</td><td>Added Coal Trucks guide</td></tr>
    <tr><td>04/08/2025</td><td>Added Special Attacks guide</td></tr>
    <tr><td>04/08/2025</td><td>Added Chat Effects guide (thanks Handlebars)</td></tr>
    <tr><td>04/08/2025</td><td>Added Music Locations guide</td></tr>
    <tr><td>03/08/2025</td><td>Reworked drop tables</td></tr>
    <tr><td>03/08/2025</td><td>Added Kitten Care guide</td></tr>
    <tr><td>30/07/2025</td><td>Added Best-in-Slot guide (thanks Fallnight)</td></tr>
    <tr><td>30/07/2025</td><td>Added Special Guides</td></tr>
    <tr><td>11/07/2025</td><td>Added Elemental Workshop quest</td></tr>
    <tr><td>02/07/2025</td><td>Added Mage Arena miniquest</td></tr>
    <tr><td>30/06/2025</td><td>Added miniquest section with barcrawl guide</td></tr>
    <tr><td>26/06/2025</td><td>Added wallpapers available for download</td></tr>
    <tr><td>23/05/2025</td><td>Major QoL improvements across all calculators</td></tr>
    <tr><td>10/05/2025</td><td>Clue tables now search across all tiers at once</td></tr>
    <tr><td>10/05/2025</td><td>Clue tables now highlight rare drops</td></tr>
    <tr><td>09/05/2025</td><td>Updated website theme</td></tr>
    <tr><td>02/05/2025</td><td>Updated P2P quest guides with checkboxes</td></tr>
    <tr><td>01/05/2025</td><td>Added item database</td></tr>
    <tr><td>27/04/2025</td><td>Added Treasure Trails puzzle solver</td></tr>
    <tr><td>26/04/2025</td><td>Updated sprite tooltip to show high alch values</td></tr>
    <tr><td>22/04/2025</td><td>Updated F2P quest guides with checkboxes</td></tr>
    <tr><td>15/04/2025</td><td>Splashing → Magic Calculator; now includes all Magic</td></tr>
    <tr><td>15/04/2025</td><td>Added Halogod's Calculators</td></tr>
    <tr><td>14/04/2025</td><td>Proofread all quest guides for grammar and typos</td></tr>
    <tr><td>13/04/2025</td><td>Implemented sitewide breadcrumb nagivation</td></tr>
    <tr><td>13/04/2025</td><td>Added Treasure Trail Guides</td></tr>
    <tr><td>13/04/2025</td><td>Added Quest Complete images to all guides</td></tr>
    <tr><td>13/04/2025</td><td>Added Item Street Prices (thanks Dead Botting)</td></tr>
    <tr><td>13/04/2025</td><td>Added Digsite Quest to Quests</td></tr>
    <tr><td>12/04/2025</td><td>Added Site Options menu with US/UK floor naming toggle</td></tr>
    <tr><td>11/04/2025</td><td>Added Defence Skill Guide</td></tr>
    <tr><td>09/04/2025</td><td>Added Woodcutting Skill Guide</td></tr>
    <tr><td>09/04/2025</td><td>Added Firemaking Skill Guide</td></tr>
    <tr><td>08/04/2025</td><td>Cleaned up PHP a bit</td></tr>
    <tr><td>08/04/2025</td><td>Added spritesheet parsing for item images</td></tr>
    <tr><td>08/04/2025</td><td>Added Mining Skill Guide</td></tr>
    <tr><td>08/04/2025</td><td>Added Prayer Skill Guide</td></tr>
    <tr><td>07/04/2025</td><td>Added Tourist Trap to Quests</td></tr>
    <tr><td>07/04/2025</td><td>Added Eilert's Icons!</td></tr>
    <tr><td>04/04/2025</td><td>Added Eilert's drop tables!</td></tr>
    <tr><td>04/04/2025</td><td>Smithing Skill Added</td></tr>
    <tr><td>04/04/2025</td><td>Homepage added calculator and drop tables coming soon</td></tr>
    <tr><td>02/04/2025</td><td>Updated Cook's Assistant</td></tr>
    <tr><td>02/04/2025</td><td>Updated Black Knight's Fortress</td></tr>
    <tr><td>02/04/2025</td><td>Runecraft Skill Guide added</td></tr>
    <tr><td>02/04/2025</td><td>Range Skill Guide added</td></tr>
    <tr><td>02/04/2025</td><td>Fishing Skill Guide added</td></tr>
    <tr><td>02/04/2025</td><td>Link Preview Changes - Collin</td></tr>
    <tr><td>02/04/2025</td><td>Thieving Skill Guide added</td></tr>
    <tr><td>02/04/2025</td><td>Magic Skill Guide added</td></tr>
    <tr><td>02/04/2025</td><td>Herblore Skill Guide added</td></tr>
    <tr><td>02/04/2025</td><td>Fletching Skill Guide added</td></tr>
    <tr><td>02/04/2025</td><td>Crafting Skill Guide added</td></tr>
    <tr><td>02/04/2025</td><td>Agility Skill Guide added</td></tr>
    <tr><td>01/04/2025</td><td>Cooking Skill Guide added</td></tr>
    <tr><td>31/03/2025</td><td>Website rebuilt with php - Collin</td></tr>
    <tr><td>31/03/2025</td><td>Created new homepage</td></tr>
    <tr><td>31/03/2025</td><td>Moved Quests to own page</td></tr>
    <tr><td>31/03/2025</td><td>Meta Data for Link Previews Added</td></tr>
    <tr><td>31/03/2025</td><td>Witches House Added</td></tr>
    <tr><td>31/03/2025</td><td>Waterfall Quest Added</td></tr>
    <tr><td>31/03/2025</td><td>Watchtower Added</td></tr>
    <tr><td>31/03/2025</td><td>Tribal Totem Added</td></tr>
    <tr><td>31/03/2025</td><td>Tree Gnome Village Added</td></tr>
    <tr><td>31/03/2025</td><td>Underground Pass Added</td></tr>
    <tr><td>31/03/2025</td><td>The Holy Grail Added</td></tr>
    <tr><td>31/03/2025</td><td>The Grand Tree Added</td></tr>
    <tr><td>31/03/2025</td><td>Temple of Ikov Added</td></tr>
    <tr><td>31/03/2025</td><td>Shilo Village Added</td></tr>
    <tr><td>31/03/2025</td><td>Sheep Herder Added</td></tr>
    <tr><td>31/03/2025</td><td>Sea Slug Added</td></tr>
    <tr><td>31/03/2025</td><td>Scorpion Catcher Added</td></tr>
    <tr><td>31/03/2025</td><td>Plague City Added</td></tr>
    <tr><td>31/03/2025</td><td>Observatory Quest Added</td></tr>
    <tr><td>28/03/2025</td><td>Murder Mystery Added</td></tr>
    <tr><td>28/03/2025</td><td>Monks Friend Added</td></tr>
    <tr><td>28/03/2025</td><td>Merlins Crystal Added</td></tr>
    <tr><td>27/03/2025</td><td>Lost City Added</td></tr>
    <tr><td>27/03/2025</td><td>Legends Quest Added</td></tr>
    <tr><td>27/03/2025</td><td>Jungle Potion Added</td></tr>
    <tr><td>27/03/2025</td><td>Hero's Quest Added</td></tr>
    <tr><td>27/03/2025</td><td>Gertrude's Cat Added</td></tr>
    <tr><td>27/03/2025</td><td>Fishing Contest Added</td></tr>
    <tr><td>27/03/2025</td><td>Fight Arena Added</td></tr>
    <tr><td>27/03/2025</td><td>Family Crest Added</td></tr>
    <tr><td>27/03/2025</td><td>Elemental Workshop Added</td></tr>
    <tr><td>27/03/2025</td><td>Dwarf Cannon Added</td></tr>
    <tr><td>27/03/2025</td><td>Druidic Ritual Added</td></tr>
    <tr><td>27/03/2025</td><td>Clock Tower Added</td></tr>
    <tr><td>27/03/2025</td><td>Biohazard Added</td></tr>
    <tr><td>27/03/2025</td><td>Change Log Added</td></tr>
    <tr><td>27/03/2025</td><td>Big Chompy Bird Hunting Added</td></tr>
    <tr><td>27/03/2025</td><td>Hazeel Cult Added</td></tr>
    <tr><td>26/03/2025</td><td>F2P Quests Added</td></tr>
    <tr><td>26/03/2025</td><td>Website Launch</td></tr>
  </tbody>
</table>

<div id="pagination"></div>
</div>
<script>
let ascending = false;
let currentPage = 1;
const rowsPerPage = 10;

const table = document.getElementById("entry-table");
const tbody = table.tBodies[0];
const filterInput = document.getElementById("filter-input");
const pagination = document.getElementById("pagination");

function parseDate(str) {
  const parts = str.split('/');
  if (parts.length !== 3) return new Date('Invalid');
  const [day, month, year] = parts;
  return new Date('\${year}-\${month}-\${day}');
}

function sortTable() {
  const rows = Array.from(tbody.rows);

  rows.sort((a, b) => {
    const dateA = parseDate(a.cells[0].textContent);
    const dateB = parseDate(b.cells[0].textContent);
    return ascending ? dateA - dateB : dateB - dateA;
  });

  ascending = !ascending;

  rows.forEach(row => tbody.appendChild(row));
  updateTable();
}

function filterTable() {
  currentPage = 1;
  updateTable();
}

function updateTable() {
  const search = filterInput.value.toLowerCase();
  const rows = Array.from(tbody.rows);
  const filteredRows = rows.filter(row =>
    row.textContent.toLowerCase().includes(search)
  );

  rows.forEach(row => row.style.display = "none");

  const start = (currentPage - 1) * rowsPerPage;
  const end = start + rowsPerPage;
  filteredRows.slice(start, end).forEach(row => row.style.display = "");

  renderPagination(filteredRows.length);
}

function renderPagination(totalRows) {
  const pageCount = Math.ceil(totalRows / rowsPerPage);
  pagination.innerHTML = "";

  for (let i = 1; i <= pageCount; i++) {
    const btn = document.createElement("button");
    btn.textContent = i;
    btn.className = (i === currentPage) ? "active" : "";
    btn.onclick = () => {
      currentPage = i;
      updateTable();
    };
    pagination.appendChild(btn);
  }
}

filterInput.addEventListener("input", filterTable);

// Initialize display
updateTable();
</script>
HTML; }