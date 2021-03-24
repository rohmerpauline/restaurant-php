// Cache contenu des onglets bac
document.getElementById("backoffice-title").innerHTML = "Back-office";
/* document.getElementById("backoffice-data").style.display = "block"; */
document.getElementById("guestbook").style.display = "none";
document.getElementById("galerie").style.display = "none";

// Montre contenu de l'onglet Back-office au clic du bouton Back-Office
document.getElementById("nav-home-tab").addEventListener("click", function(){
    document.getElementById("backoffice-title").innerHTML = "Back-office";
    document.getElementById("backoffice-data").style.display = "block";
    document.getElementById("guestbook").style.display = "none";
    document.getElementById("galerie").style.display = "none";
});

// Montre contenu de l'onglet Guest-Book au clic du bouton Guest-Book
document.getElementById("nav-guestbook-tab").addEventListener("click", function(){
    document.getElementById("backoffice-title").innerHTML = "Guest-Book";
    document.getElementById("backoffice-data").style.display = "none";
    document.getElementById("guestbook").style.display = "block";
    document.getElementById("galerie").style.display = "none";
});

// Montre contenu de l'onglet Galerie au clic du bouton Galerie
document.getElementById("nav-galerie-tab").addEventListener("click", function(){
    document.getElementById("backoffice-title").innerHTML = "Galerie";
    document.getElementById("backoffice-data").style.display = "none";
    document.getElementById("guestbook").style.display = "none";
    document.getElementById("galerie").style.display = "block";
});

// Refresh sur la page backoffice.php/#backoffice quand action sur l'onglet back-office
if (window.location.href.indexOf("#backoffice") > -1) {
    document.getElementById("backoffice-title").innerHTML = "Back-office";
    document.getElementById("backoffice-data").style.display = "block";
    document.getElementById("guestbook").style.display = "none";
    document.getElementById("galerie").style.display = "none";
}

// Refresh sur la page backoffice.php/#guestbook quand action sur l'onglet guest-book
if (window.location.href.indexOf("#guestbook") > -1) {
    document.getElementById("backoffice-title").innerHTML = "Guest-Book";
    document.getElementById("backoffice-data").style.display = "none";
    document.getElementById("guestbook").style.display = "block";
    document.getElementById("galerie").style.display = "none";
}

// Refresh sur la page backoffice.php/#galerie quand action sur l'onglet galerie
if (window.location.href.indexOf("#galerie") > -1) {
    document.getElementById("backoffice-title").innerHTML = "Galerie";
    document.getElementById("backoffice-data").style.display = "none";
    document.getElementById("guestbook").style.display = "none";
    document.getElementById("galerie").style.display = "block";
}