

document.getElementById('lang-form').onchange = function() {
    window.location.href = this.children[this.selectedIndex].getAttribute('href');
}