// button.js
// Description: This javascript file will animate our button on the home page

//declare our variables
var svgMorphToClose = document.getElementById("morph-to-close"),
  svgMorphToArrow= document.getElementById("morph-to-arrow"),
  button = document.getElementById("button"),
  main = document.getElementById("main"),
  mainWrapper = document.getElementById("mainWrapper"),
  rightSlideImg = document.getElementById("rightSlideBg"),
  projectSlide = document.getElementById("projectSlide");

function bindButtonClick(){
  "use strict";
  button.addEventListener("click", function(){
    "use strict";
    if (button.classList.contains('arrow')) {
        svgMorphToClose.beginElement();
        button.classList.remove('arrow');
        mainWrapper.classList.add('projectActive');
    } else {
      svgMorphToArrow.beginElement();
      button.classList.add('arrow');
      mainWrapper.classList.remove('projectActive');
    }
  }, false);
}
