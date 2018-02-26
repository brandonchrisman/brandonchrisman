var
  body = document.body.classList,
  loader = document.querySelector('#loader'),
  main = document.querySelector('#main');

function clearScreen() {
  "use strict";
  console.log('FUNCTION CALLED');
  loader.addEventListener('transitionend', function(){
    console.log('EVENT FIRED');
    if (body.contains('loaded')){
      loader.setAttribute("class",'');
      loader.classList.add('fadeUp');
    }
  }, false);
  loader.addEventListener('webkitTransitionEnd', function(){
    if (body.contains('loaded')){
      loader.setAttribute("class",'');
      loader.classList.add('fadeUp');
    }
  }, false);
}

function removeLoader(){
  "use strict";
  window.addEventListener('load',
  function(){
    console.log('LOADED');
    if (body.contains('loading')){
      console.log('BODY CONTAINS LOADING CLASS');
      setTimeout(
        function(){
          console.log('INSIDE LOADING TIMEOUT');
          body.remove('loading');
          body.add('loaded');
          clearScreen();
        }, 1200);
    }
  }, false);
}
