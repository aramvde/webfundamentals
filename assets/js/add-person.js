// VARIABLES FOR HOGWARTS EXPRESS
var img = document.querySelector(".img");
var position = 0 - 425;
var maxWidth = window.innerWidth;
var requestAnimationFrame = window.requestAnimationFrame;

// VARIABLES FOR INPUT FIELDS
var submit = document.querySelector(".button");
var form = document.querySelector("#form");
var firstname = document.querySelector("#firstname");
var lastname = document.querySelector("#lastname");
var age = document.querySelector("#age");
var details = document.querySelector("#details");
var firstnameStyle = document.querySelector(".firstname-style");
var lastnameStyle = document.querySelector(".lastname-style");
var ageStyle = document.querySelector(".age-style");
var detailsStyle = document.querySelector(".details-style");

// FALSE INFORMATION
form.addEventListener("submit", (e) => {
    if (firstname.value.length < 2) {
        e.preventDefault();
        firstnameStyle.style.backgroundColor = "rgb(" + 199 + ", " + 50 + ", " + 50 + ")";
    }

    if (lastname.value.length < 2) {
        e.preventDefault();
        lastnameStyle.style.backgroundColor = "rgb(" + 199 + ", " + 50 + ", " + 50 + ")";
    }

    if (age.value.length < 1 || age.value < 3) {
        e.preventDefault();
        ageStyle.style.backgroundColor = "rgb(" + 199 + ", " + 50 + ", " + 50 + ")";
    }

    if (details.value.length < 2) {
        e.preventDefault();
        detailsStyle.style.backgroundColor = "rgb(" + 199 + ", " + 50 + ", " + 50 + ")";
    }

    e.submit();
});

// MOVING HOGWARTS EXPRESS
function hogwartsExpress() {
    position += 3;
    img.style.left = position + "px";
    
    if (position >= maxWidth) {
        position = -435;
    }
    
    requestAnimationFrame(hogwartsExpress);
}

hogwartsExpress();