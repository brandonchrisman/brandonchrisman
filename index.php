<?php
//shut off error reporting
error_reporting(0);

//Banned Douches
$ip = $_SERVER['REMOTE_ADDR'];

$browser = $_SERVER['HTTP_USER_AGENT'];

if ($browser === "SiteLockSpider [en] (WinNT; I ;Nav)"){
  header('Location: /banned.php');
}

if (fnmatch("184.154.36.*", $ip) || fnmatch("23.247.114.*", $ip)){
  header('Location: /banned.php');
}

// Analytics
include('analytics.php');
?>
<!doctype html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1">
    <meta name="theme-color" content="#2a2a2a" >
    <title>Brandon Chrisman - Web Developer</title>
    <style>
      <?php include('./css/top.min.css'); ?>
    </style>
  </head>
  <body class="loading">
    <div id="loader">
      <svg xmlns="http://www.w3.org/2000/svg" width="120px" height="120px" viewBox="-20 -20 336 336" id="logo">
      	<g>
      		<g id="bc-circles">
      			<path id="bc-circle-crust" d="M0,148a148,148 0 1,0 296,0a148,148 0 1,0 -296,0Z"/>
      			<path id="bc-circle-mantle" d="M8,148a140,140 0 1,0 280,0a140,140 0 1,0 -280,0Z"/>
      			<path id="bc-circle-core" d="M14,148a134,134 0 1,0 268,0a134,134 0 1,0 -268,0Z"/>
      		</g>
      		<g id="bc-letters">
      			<path id="bc-B" d="M48.1,220.3V75.7H98c9.5,0,17.5,0.9,24.2,2.7c6.7,1.8,12.2,4.4,16.5,7.7
      				c4.3,3.3,7.5,7.4,9.5,12.1c2,4.7,3,10.1,3,16c0,3.4-0.5,6.6-1.5,9.8s-2.6,6-4.7,8.7c-2.1,2.7-4.8,5.1-8,7.4
      				c-3.2,2.2-7.1,4.1-11.5,5.6c19.9,4.5,29.8,15.2,29.8,32.2c0,6.1-1.2,11.8-3.5,17c-2.3,5.2-5.7,9.7-10.2,13.5
      				c-4.5,3.8-10,6.7-16.5,8.8c-6.5,2.1-14,3.2-22.4,3.2H48.1z M75,138.3h21.5c9.1,0,16.1-1.7,20.8-5c4.7-3.3,7.1-8.6,7.1-15.9
      				c0-7.5-2.1-12.9-6.4-16.1c-4.3-3.2-10.9-4.8-20-4.8H75V138.3z M75,156.9v42.4h27.3c5,0,9.2-0.6,12.6-1.8c3.4-1.2,6.1-2.8,8.1-4.8
      				c2-2,3.5-4.3,4.4-7c0.9-2.7,1.4-5.5,1.4-8.5c0-3.1-0.5-5.9-1.5-8.4s-2.6-4.6-4.7-6.4c-2.1-1.8-4.9-3.1-8.2-4
      				c-3.3-0.9-7.4-1.4-12.1-1.4H75z"/>
      			<path id="bc-C" d="M232.7,186.2c1.5,0,2.7,0.6,3.8,1.7l10.6,11.5c-5.9,7.3-13.1,12.8-21.7,16.7
      				c-8.6,3.9-18.9,5.8-30.9,5.8c-10.7,0-20.4-1.8-28.9-5.5c-8.6-3.7-15.9-8.8-22-15.3c-6.1-6.5-10.7-14.3-14-23.4
      				c-3.2-9.1-4.8-19-4.8-29.7c0-10.9,1.8-20.8,5.4-29.9c3.6-9,8.7-16.8,15.2-23.4c6.5-6.5,14.4-11.6,23.5-15.2
      				c9.1-3.6,19.1-5.5,30.1-5.5c10.7,0,20.1,1.7,28.1,5.2c8,3.4,14.9,8,20.7,13.6l-9,12.5c-0.5,0.8-1.2,1.5-2,2.1
      				c-0.8,0.6-2,0.9-3.5,0.9c-1.5,0-3.1-0.6-4.7-1.8c-1.6-1.2-3.6-2.5-6.1-3.9c-2.5-1.4-5.6-2.7-9.4-3.9c-3.8-1.2-8.5-1.8-14.3-1.8
      				c-6.8,0-13.1,1.2-18.8,3.5c-5.7,2.4-10.6,5.8-14.7,10.1s-7.3,9.8-9.6,16.1c-2.3,6.3-3.4,13.4-3.4,21.2c0,8.1,1.1,15.4,3.4,21.7
      				c2.3,6.3,5.4,11.7,9.4,16c3.9,4.3,8.6,7.6,13.9,10c5.3,2.3,11.1,3.4,17.2,3.4c3.7,0,7-0.2,9.9-0.6c3-0.4,5.7-1,8.2-1.9
      				c2.5-0.9,4.9-2,7.1-3.3c2.2-1.4,4.4-3.1,6.6-5.1c0.7-0.6,1.4-1.1,2.1-1.4C231.1,186.4,231.9,186.2,232.7,186.2z"/>
      		</g>
      	</g>
      </svg>
    </div>
    <div id="main">
      <div class="leftSlide" id="leftSlide">
        <div class="leftSlide__wrapper">
          <div class="leftSlide__logoNavContainer">
            <div>
              <h1 class="leftSlide__logo">Brandon Chrisman</h1>
              <span class="leftSlide__subheading">Web&nbsp;Developer &amp;&nbsp;Designer</span>
              <!-- <div class="leftSlide__social">
                <ul class="leftSlide__socialList">
                  <li class="leftSlide__socialListItem">
                    <div class="leftSlide__facebook">
                      <a href="https://www.facebook.com/ChrismanWebServices" target="_blank">
                        <img alt="Facebook" src="./img/social-facebook.svg" height="24" width="24">
                      </a>
                    </div>
                  </li>
                  <li class="leftSlide__socialListItem">
                    <div class="leftSlide__twitter">
                      <a href="https://twitter.com/bchrisman12" target="_blank">
                        <img alt="Twitter" src="./img/social-twitter.svg" height="24" width="24">
                      </a>
                    </div>
                  </li>
                  <li class="leftSlide__socialListItem">
                    <div class="leftSlide__pinterest">
                      <a href="https://www.pinterest.com/bchrismanx/" target="_blank">
                        <img alt="Pinterest" src="./img/social-pinterest.svg" height="24" width="24">
                      </a>
                    </div>
                  </li>
                </ul>
              </div> -->
            </div>
          </div>
          <div class="leftSlide__projectWrapper">
            <div class="leftSlide__titleSpot" id="leftSlide__titleSpot">
              <ul class="leftSlide__projectTitleList">
                <li class="leftSlide__projectTitleItem">
                  <div class="title-container">
                    <h2 class="leftSlide__projectHeader">Smoogs</h2>
                  </div>
                </li>
                <li class="leftSlide__projectTitleItem">
                  <div class="title-container">
                    <h2 class="leftSlide__projectHeader">CharlieCo</h2>
                  </div>
                </li>
                <li class="leftSlide__projectTitleItem">
                  <div class="title-container">
                    <h2 class="leftSlide__projectHeader">MMSD Tool</h2>
                  </div>
                </li>
              </ul>
            </div>
            <div class="leftSlide__descriptionSpot">
              <ul class="leftSlide__projectDescriptionList">
                <li class="leftSlide__projectDescriptionItem">
                  <div class="description-container">
                    <p class="leftSlide__projectDescription">Design &amp; Development</p>
                  </div>
                </li>
                <li class="leftSlide__projectDescriptionItem">
                  <div class="description-container">
                    <p class="leftSlide__projectDescription">Wordpress Theme Customization</p>
                  </div>
                </li>
                <li class="leftSlide__projectDescriptionItem">
                  <div class="description-container">
                    <p class="leftSlide__projectDescription">PSD to HTML</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="leftSlide__contact">
            <a href="#">Contact</a>
          </div>
        </div>
      </div>
      <div class="rightSlide" id="rightSlide">
        <div class="rightSlide__wrapper">
          <div class="rightSlide__button arrow" id="button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.1 48.1" width="48" height="48" class="rightSlide__arrow">
              <polygon fill="#fafafa" points="33.3,29.6 39,24 39,24 39,24 33.3,18.4 33.3,18.4 14.7,0 9,5.6 27.6,24 9,42.4 14.7,48
                33.3,29.6">
              	<animate id="morph-to-close" begin="indefinite" fill="freeze" attributeName="points" dur="230ms" to="48.1,5.7 42.4,0 24,18.4 5.7,0 0,5.7 18.4,24 0,42.4 5.7,48.1 24,29.7 42.4,48.1 48.1,42.4 29.7,24"/>
                <animate id="morph-to-arrow" begin="indefinite" fill="freeze" attributeName="points" dur="230ms" to="33.3,29.6 39,24 39,24 39,24 33.3,18.4 33.3,18.4 14.7,0 9,5.6 27.6,24 9,42.4 14.7,48 33.3,29.6"/>
              </polygon>
            </svg>
          </div>
          <div class="rightSlide__background rightSlide__background--smoogs" id="rightSlideBg"></div>
        </div>
      </div>
      <div class="projectSlide" id="projectSlide">
        <div class="projectSlide__wrapper">
          <ul class="projectSlide__list">
            <li class="projectSlide__listItem">
              <div class="projectSlide__container">
                <h2 class="projectSlide__title">Smoogs</h2>
                <div class="projectSlide__subheading">Design &amp; Development</div>
                <div class="projectSlide__description">Smoogs is a micropayment solution for digital content creators. This is an ongoing long term commitment for me. I am responsible for the design of both the website and the apps that smoogs is creating and the front end development of the website.</div>
                <div class="projectSlide__images">
                  <ul class="projectSlide__imageList">
                    <li class="projectSlide__imageItem">
                      <video autoplay muted loop class="projectSlide__video">
                        <source src="vid/smoogsloader.ogg" type="video/ogg" />
                        <source src="vid/smoogsloader.webm" type="video/webm" />
                        <source src="vid/smoogsloader.mp4" type="video/mp4" />
                      </video>
                    </li>
                  </ul>
                </div>
                <div class="projectSlide__url">
                  <a class="projectSlide__url" href="https://smoogs.io/" target="_blank">Visit website</a>
                </div>
                <div class="projectSlide__tech">
                  <ul class="projectSlide__techList">
                    <li class="projectSlide__techListItem">
                      <strong>CMS:</strong> Grav
                    </li>
                    <li class="projectSlide__techListItem">
                      <strong>Languages Used:</strong>
                      <ul class="projectSlide__techList--subList">
                        <li class="projectSlide__techListItem--subItem">HTML 5</li>
                        <li class="projectSlide__techListItem--subItem">CSS 3</li>
                        <li class="projectSlide__techListItem--subItem">JS</li>
                        <li class="projectSlide__techListItem--subItem">Markdown</li>
                        <li class="projectSlide__techListItem--subItem">Twig</li>
                      </ul>
                    </li>
                    <li class="projectSlide__techListItem">
                      <strong>Frameworks: </strong>
                      <ul class="projectSlide__techList--subList">
                        <li class="projectSlide__techListItem--subItem">jQuery</li>
                        <li class="projectSlide__techListItem--subItem">Pure.css</li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <link href="https://fonts.googleapis.com/css?family=Amiri%7CLato:100,300,400,700,900" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet" type="text/css">
    <script src="js/scripts.min.js" type="text/javascript"></script>
    <noscript id="deferred-styles">
      <link rel="stylesheet" type="text/css" href="css/style.min.css"/>
    </noscript>
    <script type="text/javascript">
      window.addEventListener('load', bindButtonClick, false);
      removeLoader();
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
    </script>
  </body>

</html>
