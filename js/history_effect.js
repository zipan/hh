function bildzeigen(bild) {
document.getElementById('bild0').style.display = 'none';
document.getElementById(bild).style.display = 'inline-block';
}

function bildverstecken(bild) {
document.getElementById('bild0').style.display = 'inline-block';
document.getElementById(bild).style.display = 'none';
}