// button.js
// Description: This javascript file will animate our button on the home page

//declare our variables
var svgMorphToClose = document.getElementById("morph-to-close"),
  svgMorphToArrow= document.getElementById("morph-to-arrow"),
  button = document.getElementById("button"),
  main = document.getElementById("main"),
  leftSlide = document.getElementById("leftSlide"),
  rightSlide = document.getElementById("rightSlide"),
  rightSlideImg = document.getElementById("rightSlideBg"),
  projectSlide = document.getElementById("projectSlide");

function bindButtonClick(){
  "use strict";
  button.addEventListener("click", function(){
    "use strict";
    if (button.classList.contains('arrow')) {
        svgMorphToClose.beginElement();
        button.classList.remove('arrow');
        leftSlide.classList.add('projectActive');
        rightSlide.classList.add('projectActive');
        projectSlide.classList.add('projectActive');
    } else {
      svgMorphToArrow.beginElement();
      button.classList.add('arrow');
      leftSlide.classList.remove('projectActive');
      rightSlide.classList.remove('projectActive');
      projectSlide.classList.remove('projectActive');
    }
  }, false);
}
