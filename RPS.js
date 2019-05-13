function play(strChoice) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            var r = JSON.parse(this.response);
            document.getElementById("result").innerHTML = r[0];
            if (r[1]===1) {document.getElementById("1").style.display = "block";}
            else if (r[1]===2) {document.getElementById("2").style.display = "block";}
            else {document.getElementById("3").style.display = "block";};
            if (r[2]===4) {document.getElementById("4").style.display = "block";}
            else if (r[2]===5) {document.getElementById("5").style.display = "block";}
            else {document.getElementById("6").style.display = "block";};
            document.getElementById("computer").innerHTML =  r[3];
            document.getElementById("user").innerHTML = r[4];
    };};
    xhttp.open("GET", "GameFunctions2.php?player=" + strChoice, true);
    xhttp.send();
};

function veil() {
    document.getElementById("playAgain").innerHTML = "<h6>Play again?</h6>";
    $('.game').hide();
}
;
function unveil() {
window.location.reload();
}
;

function on() {
    document.getElementById("overlay").style.display = "block";
}
;

function off() {
    document.getElementById("overlay").style.display = "none";
}
;

function bigImg(x) {
    x.style.height = "200px";
    x.style.width = "205px";
}
;

function normalImg(x) {
    x.style.height = "200px";
    x.style.width = "200px";
}
;