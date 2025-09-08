let itemData = {};

// Load itemlist.json and convert to lookup object
export async function loadItemList() {
  const response = await fetch('js/itemlist.json');
  const items = await response.json();
  itemData = Object.fromEntries(items.map(item => [item.debugname, item]));
}

// Fetch Google Sheet data from a specific tab
export async function fetchSheetData(sheetId, gid) {
  const url = `https://docs.google.com/spreadsheets/d/${sheetId}/gviz/tq?tqx=out:json&gid=${gid}`;
  const response = await fetch(url);
  const text = await response.text();
  const json = JSON.parse(text.substring(47).slice(0, -2));

  const rows = json.table.rows;

  // Force static column names
  const cols = ["Item", "Price Min", "Price Max"];

  return { cols, rows };
}

// Abbreviate value & add tooltip with full value
function formatValue(value) {
  if (isNaN(value)) return value;

  const fullValue = parseInt(value).toLocaleString();
  let displayValue = value;

  if (value >= 1_000_000) {
    displayValue = (value / 1_000_000).toFixed(1).replace(/\.0$/, '') + 'M';
  } else if (value >= 1_000) {
    displayValue = (value / 1_000).toFixed(1).replace(/\.0$/, '') + 'k';
  }

  const span = document.createElement('span');
  span.textContent = displayValue;
  span.title = fullValue;

  return span;
}

// Render the full table with pagination
export function renderTable(targetId, { cols, rows }, rowsPerPage = 10) {
  let currentPage = 1;

  function showPage(page) {
    const table = document.createElement('table');
    table.className = 'table';
    table.styleWidth = '100%';

    const thead = table.createTHead();

    // First header row
    const headerRow1 = thead.insertRow();

    const thItem = document.createElement('th');
    thItem.textContent = 'Item';
    thItem.rowSpan = 2;
    headerRow1.appendChild(thItem);

    const thPrice = document.createElement('th');
    thPrice.textContent = 'Price';
    thPrice.colSpan = 2;
    headerRow1.appendChild(thPrice);

    // Second header row
    const headerRow2 = thead.insertRow();

    const thMin = document.createElement('th');
    thMin.textContent = 'Min';
    headerRow2.appendChild(thMin);

    const thMax = document.createElement('th');
    thMax.textContent = 'Max';
    headerRow2.appendChild(thMax);

    const tbody = table.createTBody();
    const start = (page - 1) * rowsPerPage;
    const end = start + rowsPerPage;

    rows.slice(start, end).forEach(row => {
      const tr = tbody.insertRow();

      const debugname = row.c[0]?.v ?? '';
      const priceMin = parseInt(row.c[1]?.v ?? 0);
      const priceMax = parseInt(row.c[2]?.v ?? 0);
      const itemInfo = itemData[debugname] || { name: debugname, id: 0, desc: '' };

      // Item Column (canvas + name)
      const tdItem = tr.insertCell();
      tdItem.innerHTML = `<canvas data-itemid="${itemInfo.id}" data-itemname="${debugname}" data-show-label="inline"></canvas>`

      // Price Columns
      if (priceMin === priceMax) {
        const tdPrice = tr.insertCell();
        tdPrice.appendChild(formatValue(priceMin));
        tdPrice.colSpan = 2;
      } else {
        const tdMin = tr.insertCell();
        tdMin.appendChild(formatValue(priceMin));

        const tdMax = tr.insertCell();
        tdMax.appendChild(formatValue(priceMax));
      }
    });

    const target = document.getElementById(targetId);
    target.innerHTML = '';
    target.appendChild(table);
    renderPagination();
  }

  function renderPagination() {
    const totalPages = Math.ceil(rows.length / rowsPerPage);
    const pagination = document.createElement('div');
    pagination.className = 'sheet-pagination';

    for (let i = 1; i <= totalPages; i++) {
      const btn = document.createElement('button');
      btn.textContent = i;
      btn.disabled = i === currentPage;
      btn.addEventListener('click', () => {
        currentPage = i;
        showPage(currentPage);
      });
      pagination.appendChild(btn);
    }

    document.getElementById(targetId).appendChild(pagination);
  }

  showPage(currentPage);

  window.safeRenderAllSprites();
}
