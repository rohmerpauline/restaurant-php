/* for (let i=0; i<=3; i++) { 
document.getElementsByClassName("input-length")[i].addEventListener("input", function() {
    document.getElementsByClassName("input-length")[i].maxLength = 50;
});
} */

// Compteur nombre de caractères textarea du formulaire
document.getElementById("message_contenu").addEventListener("input", function(){
    let textAreaCheck = document.getElementById("message_contenu");
    textAreaCheck.maxLength = 1000;
    for (let i=0; i<=1000; i++) {
        if (textAreaCheck.value.length == i) {
            document.getElementById("count").innerHTML = `${i}/1000`;
                if (textAreaCheck.value.length >= 950 && textAreaCheck.value.length <= 1000) {
                    document.getElementById("count").style.color ="red";
                } else {
                    document.getElementById("count").style.color = "initial";
                }
            }
        };
});