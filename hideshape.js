function showPersegi() {
    hideAllTabs();
    document.getElementById('persegi').classList.add('active');
}

function showPersegiPanjang() {
    hideAllTabs();
    document.getElementById('persegi-panjang').classList.add('active');
}

function hideAllTabs() {
    var tabs = document.querySelectorAll('.tab-pane');
    tabs.forEach(function (tab) {
        tab.classList.remove('active');
    });
}
