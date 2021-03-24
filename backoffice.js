document.getElementById("backoffice-data").style.display = "none";
document.getElementById("guestbook").style.display = "none";
document.getElementById("galerie").style.display = "none";

document.getElementById("backoffice-tab").addEventListener("click", function(){
    document.getElementById("backoffice-title").innerHTML = "Back-office"
    document.getElementById("backoffice-data").style.display = "block";
    document.getElementById("guestbook").style.display = "none";
    document.getElementById("galerie").style.display = "none";
});

document.getElementById("guestbook-tab").addEventListener("click", function(){
    document.getElementById("backoffice-title").innerHTML = "Guest-Book"
    document.getElementById("backoffice-data").style.display = "none";
    document.getElementById("guestbook").style.display = "block";
    document.getElementById("galerie").style.display = "none";
});

document.getElementById("galerie-tab").addEventListener("click", function(){
    document.getElementById("backoffice-title").innerHTML = "Galerie"
    document.getElementById("backoffice-data").style.display = "none";
    document.getElementById("guestbook").style.display = "none";
    document.getElementById("galerie").style.display = "block";
});

document.getElementById("delete1").addEventListener("click", function(){
    document.getElementById("backoffice-title").innerHTML = "Back-Office"
    document.getElementById("backoffice-data").style.display = "block";
    document.getElementById("guestbook").style.display = "none";
    document.getElementById("galerie").style.display = "none";
});

if (window.location.href.indexOf("#backoffice") > -1) {
    document.getElementById("backoffice-title").innerHTML = "Back-office"
    document.getElementById("backoffice-data").style.display = "block";
    document.getElementById("guestbook").style.display = "none";
    document.getElementById("galerie").style.display = "none";
}