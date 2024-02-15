// public/js/filter.js

function applyFilters() {
    var url = window.location.href.split('?')[0];
    var search = document.getElementById('searchInput').value;
    var kategori = document.getElementById('kategoriSort').value;
    var status = document.getElementById('statusSort').value;

    var filterUrl = url + '?pageno=1';

    if (search.trim() !== '') {
        filterUrl += '&search=' + encodeURIComponent(search.trim());
    }

    if (kategori.trim() !== '') {
        filterUrl += '&kategori=' + encodeURIComponent(kategori.trim());
    }

    if (status.trim() !== '') {
        filterUrl += '&status_pewartakan=' + encodeURIComponent(status.trim());
    }

    window.location.href = filterUrl;
}

function clearFilters() {
    var url = window.location.href.split('?')[0];
    window.location.href = url;
}
