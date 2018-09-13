// function bio() {
//     var x = document.getElementById("contents");
//     var y = document.getElementById("bio");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//         y.style.display = "block";
//     }
// }

// function aliens() {
//     var x = document.getElementById("contents");
//     var y = document.getElementById("aliens");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//         y.style.display = "block";
//     }
// }

// function latitude() {
//     var x = document.getElementById("contents");
//     var y = document.getElementById("latitude");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//         y.style.display = "block";
//     }
// }

function projects() {
    var a = document.getElementById("contents");
    var b = document.getElementById("bio");
    var c = document.getElementById("aliens");
    var d = document.getElementById("latitude");
}

function bio() {
    var a = document.getElementById("contents");
    var b = document.getElementById("bio");
    var c = document.getElementById("aliens");
    var d = document.getElementById("latitude");
    b.style.display = "block";

    a.style.display = "none";
    c.style.display = "none";
    d.style.display = "none";
}

function aliens() {
    var a = document.getElementById("contents");
    var b = document.getElementById("bio");
    var c = document.getElementById("aliens");
    var d = document.getElementById("latitude");
    c.style.display = "block";

    a.style.display = "none";
    b.style.display = "none";
    d.style.display = "none";
}

function latitude() {
    var a = document.getElementById("contents");
    var b = document.getElementById("bio");
    var c = document.getElementById("aliens");
    var d = document.getElementById("latitude");
    d.style.display = "block";

    a.style.display = "none";
    b.style.display = "none";
    c.style.display = "none";
}