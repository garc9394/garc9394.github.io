function myFunction() {
    var x = document.getElementById("contents");
    var y = document.getElementById("project");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
        y.style.display = "block";
    }
}