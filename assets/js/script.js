// VARIABLES
var gryff = document.querySelector(".gryff");
var huff = document.querySelector(".huff");
var rav = document.querySelector(".rav");
var slyth = document.querySelector(".slyth");
var bodyElement = document.querySelector("body");

// PHP TO JS
fetch("../api/profiles.php")
  .then(function(response) {
    return response.json();
  }).then(function(profiles) {

    var keys = [];
    // var count = 0;

    for (var property in profiles){
      keys.push(Number(profiles[property].gryffindor) + Number(profiles[property].hufflepuff) + Number(profiles[property].ravenclaw) + Number(profiles[property].slytherin));
    }

    var container = document.querySelector(".container");

    for (var i = 0; i < profiles.length; i++) {
      var gryffindor = profiles[i].gryffindor;
      var hufflepuff = profiles[i].hufflepuff;
      var ravenclaw = profiles[i].ravenclaw;
      var slytherin = profiles[i].slytherin;

      if (gryffindor == 0) {
        gryffindor = 0;
      }
      else {
        gryffindor = Math.round(profiles[i].gryffindor / keys[i] * 100);
      }

      if (hufflepuff == 0) {
        hufflepuff = 0;
      }
      else {
        hufflepuff = Math.round(profiles[i].hufflepuff / keys[i] * 100);
      }

      if (ravenclaw == 0) {
        ravenclaw = 0;
      }
      else {
        ravenclaw = Math.round(profiles[i].ravenclaw / keys[i] * 100);
      }
      
      if (slytherin == 0) {
        slytherin = 0;
      }
      else {
        slytherin = Math.round(profiles[i].slytherin / keys[i] * 100);
      }

      container.innerHTML += "<div class='box'>" + profiles[i].firstname + " " + profiles[i].lastname + "<p class='percentage'>" + "<span class='gryffindor'>" + gryffindor + "% </span> <span class='hufflepuff'>" + hufflepuff + "% </span> <br> <span class='ravenclaw'>" + ravenclaw + "% </span> <span class='slytherin'>" + slytherin + "% </span> </p>" + "</div>";
    }

});