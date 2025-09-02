<?php
$cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
$cms->landing(1686, 3051); //topsykey ?>
<!DOCTYPE html>
<html lang="it-IT">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="robots" content="max-image-preview:large" />
  <title>Hemoliv+</title>

  <link rel="icon" href="./img/product.webp" type="image/x-icon" />
  <style>
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 0.07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <link rel="stylesheet" id="wp-block-library-css" href="css/style.min_1.css" media="all" />
  <link rel="stylesheet" id="classic-theme-styles-css" href="css/classic-themes.min.css" media="all" />
  <style>
    .faq {
      background-color: #f6f6f6;
      color: black;
      padding: 20px;
      margin: 20px 0;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
      width: 80%;
      display: block;
      margin: 0 auto;
      text-align: center;
    }

    .faq-question {
      margin-bottom: 10px;
    }

    .faq-answer {
      display: none;
    }

    .faq-answer.is-open {
      display: block;
    }

    .faq h2 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      line-height: 1.5;
    }

    .faq-question {
      margin-bottom: 20px;
      border: 1px solid #ccc;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .faq-question h3 {
      font-size: 18px;
      padding: 15px;
      margin: 0;
      cursor: pointer;
    }

    .faq-answer {
      padding: 15px;
      display: none;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .faq-answer p {
      margin: 0;
      line-height: 1.5;
    }
  </style>
  <style id="global-styles-inline-css">
    body {
      --wp--preset--color--black: #000000;
      --wp--preset--color--cyan-bluish-gray: #abb8c3;
      --wp--preset--color--white: #ffffff;
      --wp--preset--color--pale-pink: #f78da7;
      --wp--preset--color--vivid-red: #cf2e2e;
      --wp--preset--color--luminous-vivid-orange: #ff6900;
      --wp--preset--color--luminous-vivid-amber: #fcb900;
      --wp--preset--color--light-green-cyan: #7bdcb5;
      --wp--preset--color--vivid-green-cyan: #00d084;
      --wp--preset--color--pale-cyan-blue: #8ed1fc;
      --wp--preset--color--vivid-cyan-blue: #0693e3;
      --wp--preset--color--vivid-purple: #9b51e0;
      --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
          rgba(6, 147, 227, 1) 0%,
          rgb(155, 81, 224) 100%);
      --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
          rgb(122, 220, 180) 0%,
          rgb(0, 208, 130) 100%);
      --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
          rgba(252, 185, 0, 1) 0%,
          rgba(255, 105, 0, 1) 100%);
      --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
          rgba(255, 105, 0, 1) 0%,
          rgb(207, 46, 46) 100%);
      --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
          rgb(238, 238, 238) 0%,
          rgb(169, 184, 195) 100%);
      --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
          rgb(74, 234, 220) 0%,
          rgb(151, 120, 209) 20%,
          rgb(207, 42, 186) 40%,
          rgb(238, 44, 130) 60%,
          rgb(251, 105, 98) 80%,
          rgb(254, 248, 76) 100%);
      --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
          rgb(255, 206, 236) 0%,
          rgb(152, 150, 240) 100%);
      --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
          rgb(254, 205, 165) 0%,
          rgb(254, 45, 45) 50%,
          rgb(107, 0, 62) 100%);
      --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
          rgb(255, 203, 112) 0%,
          rgb(199, 81, 192) 50%,
          rgb(65, 88, 208) 100%);
      --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
          rgb(255, 245, 203) 0%,
          rgb(182, 227, 212) 50%,
          rgb(51, 167, 181) 100%);
      --wp--preset--gradient--electric-grass: linear-gradient(135deg,
          rgb(202, 248, 128) 0%,
          rgb(113, 206, 126) 100%);
      --wp--preset--gradient--midnight: linear-gradient(135deg,
          rgb(2, 3, 129) 0%,
          rgb(40, 116, 252) 100%);

      --wp--preset--font-size--small: 13px;
      --wp--preset--font-size--medium: 20px;
      --wp--preset--font-size--large: 36px;
      --wp--preset--font-size--x-large: 42px;
      --wp--preset--spacing--20: 0.44rem;
      --wp--preset--spacing--30: 0.67rem;
      --wp--preset--spacing--40: 1rem;
      --wp--preset--spacing--50: 1.5rem;
      --wp--preset--spacing--60: 2.25rem;
      --wp--preset--spacing--70: 3.38rem;
      --wp--preset--spacing--80: 5.06rem;
      --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
      --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
        6px 6px rgba(0, 0, 0, 1);
      --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
      gap: 0.5em;
    }

    body .is-layout-flow>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
      max-width: var(--wp--style--global--content-size);
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
      max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
      display: flex;
    }

    body .is-layout-flex {
      flex-wrap: wrap;
      align-items: center;
    }

    body .is-layout-flex>* {
      margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    .has-black-color {
      color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
      color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
      color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
      color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
      color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
      color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
      color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
      color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
      color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
      color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
      color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
      color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
      background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
      background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
      background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
      background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
      background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
      background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
      background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
      background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
      background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
      background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
      border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
      border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
      border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
      border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
      border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
      border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
      border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
      border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
      border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
      border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
      background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
      background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
      background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
      background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
      background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
      background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
      background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
      background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
      background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
      background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
      font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
      font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
      font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
      font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
      color: inherit;
    }

    :where(.wp-block-columns.is-layout-flex) {
      gap: 2em;
    }

    .wp-block-pullquote {
      font-size: 1.5em;
      line-height: 1.6;
    }
  </style>
  <link rel="stylesheet" id="hello-elementor-css" href="css/style.min.css" media="all" />
  <link rel="stylesheet" id="hello-elementor-theme-style-css" href="css/theme.min.css" media="all" />
  <link rel="stylesheet" id="elementor-icons-css" href="css/elementor-icons.min.css" media="all" />
  <link rel="stylesheet" id="elementor-frontend-legacy-css" href="css/frontend-legacy.min.css" media="all" />
  <link rel="stylesheet" id="elementor-frontend-css" href="css/frontend.min.css" media="all" />
  <link rel="stylesheet" id="swiper-css" href="css/swiper.min.css" media="all" />
  <link rel="stylesheet" id="elementor-post-7-css" href="css/post-7.css" media="all" />
  <link rel="stylesheet" id="elementor-pro-css" href="css/frontend.min_1.css" media="all" />
  <link rel="stylesheet" id="elementor-global-css" href="css/global.css" media="all" />
  <link rel="stylesheet" id="elementor-post-2348-css" href="css/post-2348.css" media="all" />
  <link rel="stylesheet" id="google-fonts-1-css" href="css/css.css" media="all" />
  <link rel="stylesheet" id="google-earlyaccess-2-css" href="css/opensanshebrewcondensed.css" media="all" />
  <link rel="stylesheet" id="elementor-icons-shared-0-css" href="css/fontawesome.min.css" media="all" />
  <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="css/solid.min.css" media="all" />
  <link rel="stylesheet" id="elementor-icons-fa-brands-css" href="css/brands.min.css" media="all" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

  <?php $cms->
    header(); ?>
</head>

<body
  class="page-template-default page page-id-2348 elementor-default elementor-kit-7 elementor-page elementor-page-2348">
  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-dark-grayscale">
        <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
        <fecomponenttransfer color-interpolation-filters="sRGB">
          <fefuncr type="table" tablevalues="0 0.49803921568627"></fefuncr>
          <fefuncg type="table" tablevalues="0 0.49803921568627"></fefuncg>
          <fefuncb type="table" tablevalues="0 0.49803921568627"></fefuncb>
          <fefunca type="table" tablevalues="1 1"></fefunca>
        </fecomponenttransfer>
        <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
      </filter>
    </defs>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-grayscale">
        <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
        <fecomponenttransfer color-interpolation-filters="sRGB">
          <fefuncr type="table" tablevalues="0 1"></fefuncr>
          <fefuncg type="table" tablevalues="0 1"></fefuncg>
          <fefuncb type="table" tablevalues="0 1"></fefuncb>
          <fefunca type="table" tablevalues="1 1"></fefunca>
        </fecomponenttransfer>
        <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
      </filter>
    </defs>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-purple-yellow">
        <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
        <fecomponenttransfer color-interpolation-filters="sRGB">
          <fefuncr type="table" tablevalues="0.54901960784314 0.98823529411765"></fefuncr>
          <fefuncg type="table" tablevalues="0 1"></fefuncg>
          <fefuncb type="table" tablevalues="0.71764705882353 0.25490196078431"></fefuncb>
          <fefunca type="table" tablevalues="1 1"></fefunca>
        </fecomponenttransfer>
        <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
      </filter>
    </defs>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-blue-red">
        <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
        <fecomponenttransfer color-interpolation-filters="sRGB">
          <fefuncr type="table" tablevalues="0 1"></fefuncr>
          <fefuncg type="table" tablevalues="0 0.27843137254902"></fefuncg>
          <fefuncb type="table" tablevalues="0.5921568627451 0.27843137254902"></fefuncb>
          <fefunca type="table" tablevalues="1 1"></fefunca>
        </fecomponenttransfer>
        <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
      </filter>
    </defs>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-midnight">
        <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
        <fecomponenttransfer color-interpolation-filters="sRGB">
          <fefuncr type="table" tablevalues="0 0"></fefuncr>
          <fefuncg type="table" tablevalues="0 0.64705882352941"></fefuncg>
          <fefuncb type="table" tablevalues="0 1"></fefuncb>
          <fefunca type="table" tablevalues="1 1"></fefunca>
        </fecomponenttransfer>
        <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
      </filter>
    </defs>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-magenta-yellow">
        <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
        <fecomponenttransfer color-interpolation-filters="sRGB">
          <fefuncr type="table" tablevalues="0.78039215686275 1"></fefuncr>
          <fefuncg type="table" tablevalues="0 0.94901960784314"></fefuncg>
          <fefuncb type="table" tablevalues="0.35294117647059 0.47058823529412"></fefuncb>
          <fefunca type="table" tablevalues="1 1"></fefunca>
        </fecomponenttransfer>
        <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
      </filter>
    </defs>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-purple-green">
        <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
        <fecomponenttransfer color-interpolation-filters="sRGB">
          <fefuncr type="table" tablevalues="0.65098039215686 0.40392156862745"></fefuncr>
          <fefuncg type="table" tablevalues="0 1"></fefuncg>
          <fefuncb type="table" tablevalues="0.44705882352941 0.4"></fefuncb>
          <fefunca type="table" tablevalues="1 1"></fefunca>
        </fecomponenttransfer>
        <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
      </filter>
    </defs>
  </svg>
  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="
        visibility: hidden;
        position: absolute;
        left: -9999px;
        overflow: hidden;
      ">
    <defs>
      <filter id="wp-duotone-blue-orange">
        <fecolormatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 "></fecolormatrix>
        <fecomponenttransfer color-interpolation-filters="sRGB">
          <fefuncr type="table" tablevalues="0.098039215686275 1"></fefuncr>
          <fefuncg type="table" tablevalues="0 0.66274509803922"></fefuncg>
          <fefuncb type="table" tablevalues="0.84705882352941 0.41960784313725"></fefuncb>
          <fefunca type="table" tablevalues="1 1"></fefunca>
        </fecomponenttransfer>
        <fecomposite in2="SourceGraphic" operator="in"></fecomposite>
      </filter>
    </defs>
  </svg>
  <a class="skip-link screen-reader-text" href="#content">Vai al contenido</a>

  <main id="content" class="site-main post-2348 page type-page status-publish hentry">
    <div class="page-content">
      <div data-elementor-type="wp-page" data-elementor-id="2348" class="elementor elementor-2348">
        <div class="elementor-inner">
          <div class="elementor-section-wrap">
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-ff6d820 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default"
              data-id="ff6d820" data-element_type="section"
              data-settings='{"background_background":"classic","sticky":"top","stretch_section":"section-stretched","sticky_on":["desktop","tablet","mobile"],"sticky_offset":0,"sticky_effects_offset":0}'>
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                  <div
                    class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-1b00b952"
                    data-id="1b00b952" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-6929a0b1 elementor-widget elementor-widget-heading"
                          data-id="6929a0b1" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">
                              Hemoliv+
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div
                    class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-288fd446"
                    data-id="288fd446" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap"></div>
                    </div>
                  </div> -->
                  <!-- <div
                    class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7568a5e8"
                    data-id="7568a5e8" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-283db35 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                          data-id="283db35" data-element_type="widget" data-settings='{"_animation":"bounceIn"}'
                          data-widget_type="button.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                              <a href="#ordina" class="elementor-button-link elementor-button elementor-size-xs"
                                role="button">
                                <span class="elementor-button-content-wrapper">
                                  <span class="elementor-button-icon elementor-align-icon-left">
                                    <i aria-hidden="true" class="fas fa-shopping-cart"></i>
                                  </span>
                                  <span class="elementor-button-text">Pide ahora</span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <div
                    class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5a7f4f87"
                    data-id="5a7f4f87" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-3d11bbcd elementor-star-rating--align-right elementor-star-rating-mobile--align-center elementor--star-style-star_fontawesome elementor-widget elementor-widget-star-rating"
                          data-id="3d11bbcd" data-element_type="widget" data-widget_type="star-rating.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-star-rating__wrapper">
                              <div class="elementor-star-rating__title">
                                Calificaci&oacute;n del cliente:
                              </div>
                              <div class="elementor-star-rating" title="4.7/5" itemtype="http://schema.org/Rating"
                                itemscope itemprop="reviewRating">
                                <i class="elementor-star-full">&#59700;</i><i class="elementor-star-full">&#59700;</i><i
                                  class="elementor-star-full">&#59700;</i><i class="elementor-star-full">&#59700;</i><i
                                  class="elementor-star-7">&#59700;</i>
                                <span itemprop="ratingValue" class="elementor-screen-only">4.7/5</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-3aacc791 elementor-widget elementor-widget-heading"
                          data-id="3aacc791" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">
                              Pago a la recogida y env&iacute;o urgente
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-76406b43 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="76406b43" data-element_type="section" data-settings='{"background_background":"gradient"}'>
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                  <div
                    class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7d293b6b"
                    data-id="7d293b6b" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-2a3054a9 elementor-widget elementor-widget-heading"
                          data-id="2a3054a9" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">
                              Hemoliv+
                            </p>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-68572873 elementor-widget elementor-widget-heading"
                          data-id="68572873" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">
                              Trata las hemorroides de una vez por todas
                            </p>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-5f6a2b06 elementor-widget elementor-widget-image"
                          data-id="5f6a2b06" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-image">
                              <img decoding="async" src="img/product.webp" title="product" alt="product" loading="lazy"
                                style="height: auto" />
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-79a3cce4 elementor-widget elementor-widget-heading"
                          data-id="79a3cce4" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">
                              Cápsulas para el tratamiento de las hemorroides
                              y las venas varicosas
                            </p>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-6d73402c elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button"
                          data-id="6d73402c" data-element_type="widget" data-widget_type="button.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                              <a href="#ordina" class="elementor-button-link elementor-button elementor-size-md"
                                role="button">
                                <span class="elementor-button-content-wrapper">
                                  <span class="elementor-button-text">PIDE AHORA <br />
                                    <font face="Verdana" size="2" color="white">
                                      PAGO CUANDO RECIBES
                                    </font>
                                  </span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-630d6a59"
                    data-id="630d6a59" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-6ab361fc elementor-widget elementor-widget-image"
                          data-id="6ab361fc" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-image">
                              <img decoding="async" width="347" height="285"
                                src="img/Schermata-2022-06-15-alle-16.36.20.webp"
                                class="attachment-large size-large wp-image-2351" alt loading="lazy" srcset="img/Schermata-2022-06-15-alle-16.36.20.pngchermata-2022-06-15-alle-16.36.20.png         347wimg/Schermata-2022-06-15-alle-16.36.20-300x246.pnga-2022-06-15-alle-16.36.20-300x246.png 300w
                  " sizes="(max-width: 347px) 100vw, 347px" />
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-58f873cc elementor-widget elementor-widget-text-editor"
                          data-id="58f873cc" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-text-editor elementor-clearfix">
                              <b>¡Atención! ¡La oferta de Hemoliv+ con entrega
                                exprés y pago contra entrega está por expirar!
                              </b>
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-4fb16a2 elementor-align-left elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                          data-id="4fb16a2" data-element_type="widget" data-widget_type="icon-list.default">
                          <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                              <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                  <i aria-hidden="true" class="fas fa-check-circle"></i>
                                </span>
                                <span class="elementor-icon-list-text">Elimina hemorroides y varices.</span>
                              </li>
                              <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                  <i aria-hidden="true" class="fas fa-check-circle"></i>
                                </span>
                                <span class="elementor-icon-list-text">Previene la reaparici&oacute;n.</span>
                              </li>
                              <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                  <i aria-hidden="true" class="fas fa-check-circle"></i>
                                </span>
                                <span class="elementor-icon-list-text">Elimina el dolor y otros
                                  s&iacute;ntomas.</span>
                              </li>
                              <li class="elementor-icon-list-item">
                                <span class="elementor-icon-list-icon">
                                  <i aria-hidden="true" class="fas fa-check-circle"></i>
                                </span>
                                <span class="elementor-icon-list-text">Contiene ingredientes seguros y
                                  naturales.</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <section
                          class="elementor-section elementor-inner-section elementor-element elementor-element-3d678618 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                          data-id="3d678618" data-element_type="section"
                          data-settings='{"background_background":"classic"}'>
                          <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                              <div
                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-65329c28"
                                data-id="65329c28" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-61628f49 elementor-widget elementor-widget-heading"
                                      data-id="61628f49" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">
                                          Precio inicial
                                        </p>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-26028408 elementor-widget elementor-widget-heading"
                                      data-id="26028408" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">
                                          <?= $cms->oldpr; ?><?= $cms->currency;
                                            ?>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-49ae113b"
                                data-id="49ae113b" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-61b8f8b7 elementor-view-default elementor-widget elementor-widget-icon"
                                      data-id="61b8f8b7" data-element_type="widget" data-widget_type="icon.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-icon-wrapper">
                                          <div class="elementor-icon">
                                            <i aria-hidden="true" class="fas fa-arrow-right"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1fc9d00b"
                                data-id="1fc9d00b" data-element_type="column"
                                data-settings='{"background_background":"classic"}'>
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-10855852 elementor-widget elementor-widget-heading"
                                      data-id="10855852" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">
                                          OFERTA
                                        </p>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-33f5637f elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline"
                                      data-id="33f5637f" data-element_type="widget"
                                      data-widget_type="animated-headline.default">
                                      <div class="elementor-widget-container">
                                        <h3 class="elementor-headline">
                                          <span
                                            class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                                            <span
                                              class="elementor-headline-dynamic-text elementor-headline-text-active">
                                              <?= $cms->price; ?><?= $cms->currency;
                                                ?>
                                            </span>
                                          </span>
                                        </h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9c7ecb7"
                                data-id="9c7ecb7" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-31ea4ebd elementor-align-left elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                      data-id="31ea4ebd" data-element_type="widget"
                                      data-widget_type="icon-list.default">
                                      <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items">
                                          <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                              <i aria-hidden="true" class="fas fa-truck"></i>
                                            </span>
                                            <span class="elementor-icon-list-text"><b> Env&iacute;o rapido</b> en
                                              48h</span>
                                          </li>
                                          <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                              <i aria-hidden="true" class="fas fa-money-bill-wave"></i>
                                            </span>
                                            <span class="elementor-icon-list-text"><b>Paga cuando recibes</b>
                                            </span>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-23b1a18d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="23b1a18d" data-element_type="section" data-settings='{"background_background":"classic"}'>
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                  <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f5fc54e"
                    data-id="6f5fc54e" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-3afb4b33 elementor-widget elementor-widget-heading"
                          data-id="3afb4b33" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                              De las hemorroides al c&aacute;ncer de colon 1
                              paso
                            </h2>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-da19729 elementor-widget elementor-widget-text-editor"
                          data-id="da19729" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-text-editor elementor-clearfix">
                              <p>
                                Mucha gente ignora el problema de las
                                hemorroides, a pesar de su grave amenaza para
                                la salud.
                              </p>
                            </div>
                          </div>
                        </div>
                        <section
                          class="elementor-section elementor-inner-section elementor-element elementor-element-2748404b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                          data-id="2748404b" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                              <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3b25da25"
                                data-id="3b25da25" data-element_type="column"
                                data-settings='{"background_background":"classic"}'>
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-bd61b95 elementor-widget elementor-widget-image"
                                      data-id="bd61b95" data-element_type="widget" data-widget_type="image.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                          <img decoding="async" width="344" height="172" src="img/rak-1.webp"
                                            class="attachment-large size-large wp-image-2352" alt loading="lazy" srcset="img/rak-1.webp                                      img/rak-1.webp        344wimg/Schermata-2022-04-13-alle-19.24.04-1.webp/Schermata-2022-04-13-alle-19.24.04-1.webp 300w
                        " sizes="(max-width: 344px) 100vw, 344px" />
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-6a981c17 elementor-widget elementor-widget-heading"
                                      data-id="6a981c17" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                          C&aacute;ncer de colon en formas
                                          m&aacute;s avanzadas.
                                        </h2>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-57e66842"
                                data-id="57e66842" data-element_type="column"
                                data-settings='{"background_background":"classic"}'>
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-75f1095 elementor-widget elementor-widget-image"
                                      data-id="75f1095" data-element_type="widget" data-widget_type="image.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                          <img decoding="async" width="340" height="168"
                                            src="img/Schermata-2022-04-13-alle-19.24.04-1.webp"
                                            class="attachment-large size-large wp-image-2353" alt loading="lazy" srcset="img/Schermata-2022-04-13-alle-19.24.04-1.webp     img/Schermata-2022-04-13-alle-19.24.04-1.webp         340wimg/Schermata-2022-04-13-alle-19.24.08-1-300x148.pngg/Schermata-2022-04-13-alle-19.24.08-1-300x148.png 300w
                        " sizes="(max-width: 340px) 100vw, 340px" />
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-1411e121 elementor-widget elementor-widget-heading"
                                      data-id="1411e121" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                          Tromboflebitis y posterior
                                          trombosis: vasos sangu&iacute;neos
                                          que se dilatan y son visibles debajo
                                          de la piel.
                                        </h2>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-3636872b"
                                data-id="3636872b" data-element_type="column"
                                data-settings='{"background_background":"classic"}'>
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-44cbfebd elementor-widget elementor-widget-image"
                                      data-id="44cbfebd" data-element_type="widget" data-widget_type="image.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                          <img decoding="async" width="342" height="174"
                                            src="img/Schermata-2022-04-13-alle-19.24.13-1.webp"
                                            class="attachment-large size-large wp-image-2354" alt loading="lazy" srcset="img/Schermata-2022-04-13-alle-19.24.13-1.webp     img/Schermata-2022-04-13-alle-19.24.13-1.webp         342wimg/Schermata-2022-04-13-alle-19.24.13-1.webp/Schermata-2022-04-13-alle-19.24.13-1.webp 300w
                        " sizes="(max-width: 342px) 100vw, 342px" />
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-6b7fe039 elementor-widget elementor-widget-heading"
                                      data-id="6b7fe039" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                          Sangrado, incluso severo, en caso de
                                          rotura de venas y/o n&oacute;dulos
                                        </h2>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-596fb13d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="596fb13d" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                  <div
                    class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-56d3cffe"
                    data-id="56d3cffe" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-4fed93bb elementor-widget elementor-widget-heading"
                          data-id="4fed93bb" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                              Soluci&oacute;n Revolucionaria
                            </h2>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-72f5bfc8 elementor-widget elementor-widget-image"
                          data-id="72f5bfc8" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-image">
                              <img decoding="async" src="img/product-main.webp"
                                title="Schermata-2022-04-13-alle-19.31.51-1.png"
                                alt="Schermata-2022-04-13-alle-19.31.51-1.png" loading="lazy" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4433f21f"
                    data-id="4433f21f" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-1fdbf4d3 elementor-widget elementor-widget-text-editor"
                          data-id="1fdbf4d3" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-text-editor elementor-clearfix">
                              <p></p>
                              <h2>
                                Molestias en el ano o hemorroides severas?
                              </h2>

                              <p>Es hora de probar Hemoliv+.</p>
                              <p>
                                La formulaci&oacute;n &uacute;nica de Hemoliv+
                                incluye todos los ingredientes naturales y
                                seguros que necesita para combatir las
                                hemorroides, el dolor y prevenir las venas
                                varicosas.
                              </p>
                              <p>
                                Los ingredientes activos incluyen extractos de
                                ginkgo biloba, castaño de indias, romero y
                                malva, los cuales estimulan la circulación
                                sanguínea y aumentan la elasticidad de las
                                paredes venosas.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-2031ed5f elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button"
                          data-id="2031ed5f" data-element_type="widget" data-widget_type="button.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                              <a href="#ordina" class="elementor-button-link elementor-button elementor-size-md"
                                role="button">
                                <span class="elementor-button-content-wrapper">
                                  <span class="elementor-button-text">PIDE AHORA <br />
                                    <font face="Verdana" size="2" color="white">
                                      PAGO CUANDO RECIBES
                                    </font>
                                  </span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-59c7fcfc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="59c7fcfc" data-element_type="section" data-settings='{"background_background":"classic"}'>
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                  <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a522622"
                    data-id="6a522622" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-31c43f45 elementor-widget elementor-widget-heading"
                          data-id="31c43f45" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                              Recomendamos aprovechar la oferta del
                              fabricante, disponible exclusivamente para
                              compradores en El Salvador:
                            </h2>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-3f5fa9d4 elementor-widget elementor-widget-image"
                          data-id="3f5fa9d4" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-image">
                              <img decoding="async" src="img/product-2.webp" title="product" alt="product"
                                loading="lazy" />
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-343bcbc6 elementor-widget elementor-widget-heading"
                          data-id="343bcbc6" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                              Oferta limitada
                            </h2>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-13b00452 elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline"
                          data-id="13b00452" data-element_type="widget" data-widget_type="animated-headline.default">
                          <div class="elementor-widget-container">
                            <h3 class="elementor-headline">
                              <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                                <span class="elementor-headline-dynamic-text elementor-headline-text-active">
                                  <?= $cms->price; ?><?= $cms->currency; ?>
                                </span>
                              </span>
                            </h3>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-1902a08a elementor-widget elementor-widget-heading"
                          data-id="1902a08a" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                              en lugar de
                              <?= $cms->oldpr; ?><?= $cms->currency; ?>
                            </h2>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-7700711b elementor-widget elementor-widget-heading"
                          data-id="7700711b" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                              Pago Contra Reembolso y Env&iacute;o Rapido
                            </h2>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-3e58bc8e elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button"
                          data-id="3e58bc8e" data-element_type="widget" data-widget_type="button.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                              <a href="#ordina" class="elementor-button-link elementor-button elementor-size-md"
                                role="button">
                                <span class="elementor-button-content-wrapper">
                                  <span class="elementor-button-text">PIDE AHORA <br />
                                    <font face="Verdana" size="2" color="white">
                                      PAGO CUANDO RECIBES
                                    </font>
                                  </span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-43934935 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="43934935" data-element_type="section" data-settings='{"background_background":"classic"}'>
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                  <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62d7149a"
                    data-id="62d7149a" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-5d34fbd1 elementor-widget elementor-widget-text-editor"
                          data-id="5d34fbd1" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-text-editor elementor-clearfix">
                              <p>Prevenir la operaci&oacute;n</p>
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-3030d58e elementor-widget elementor-widget-image"
                          data-id="3030d58e" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-image">
                              <img decoding="async" width="800" height="610" src="img/003_big.webp"
                                class="attachment-large size-large wp-image-2356" alt loading="lazy" srcset="img/003_big.jpg                      img/003_big.jpg         899wimg/003_big.jpg                       img/003_big.jpg 300img/003_big.jpg                        img/003_big.jpg 768w
                  " sizes="(max-width: 800px) 100vw, 800px" />
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-7a06fb68 elementor-widget elementor-widget-text-editor"
                          data-id="7a06fb68" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-text-editor elementor-clearfix">
                              <p>
                                La mayor&iacute;a de los medicamentos
                                generalmente solo alivian los s&iacute;ntomas
                                de las hemorroides, eliminan la
                                hinchaz&oacute;n y alivian el dolor.
                              </p>
                              <p><b>ADEM&Aacute;S, Hemoliv+ PUEDE: </b></p>
                              <p>
                                Ayuda a disolver los co&aacute;gulos de sangre
                                y aliviar los s&iacute;ntomas.
                              </p>
                              <p>
                                Estimula la circulaci&oacute;n
                                sangu&iacute;nea y fortalece las paredes de
                                los vasos sangu&iacute;neos.
                              </p>
                              <p>
                                Hemoliv+ es un producto seguro y probado que
                                cualquiera puede usar.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-684bcfed elementor-widget elementor-widget-image"
                          data-id="684bcfed" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-image">
                              <img decoding="async" width="800" height="223"
                                src="img/Schermata-2022-04-13-alle-19.31.25-1-1024x285.webp"
                                class="attachment-large size-large wp-image-2357" alt loading="lazy" srcset="img/Schermata-2022-04-13-alle-19.31.25-1-1024x285.png22-04-13-alle-19.31.25-1-1024x285.png 1024wimg/Schermata-2022-04-13-alle-19.31.25-1-300x84.png-2022-04-13-alle-19.31.25-1-300x84.png    300img/Schermata-2022-04-13-alle-19.31.25-1-768x214.png-2022-04-13-alle-19.31.25-1-768x214.png   76img/Schermata-2022-04-13-alle-19.31.25-1-1536x428.png-2022-04-13-alle-19.31.25-1-1536x428.png 15img/Schermata-2022-04-13-alle-19.31.25-1.png/Schermata-2022-04-13-alle-19.31.25-1.png          1894w
                  " sizes="(max-width: 800px) 100vw, 800px" />
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-2d052412 elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button"
                          data-id="2d052412" data-element_type="widget" data-widget_type="button.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                              <a href="#ordina" class="elementor-button-link elementor-button elementor-size-md"
                                role="button">
                                <span class="elementor-button-content-wrapper">
                                  <span class="elementor-button-text">PIDE AHORA <br />
                                    <font face="Verdana" size="2" color="white">
                                      PAGO CUANDO RECIBES
                                    </font>
                                  </span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-60031de1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="60031de1" data-element_type="section" data-settings='{"background_background":"classic"}'>
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                  <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7f8cfd70"
                    data-id="7f8cfd70" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-540e90c8 elementor-widget elementor-widget-heading"
                          data-id="540e90c8" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">
                              EFECTO TOTAL DEL PRODUCTO, PASO A PASO:
                            </p>
                          </div>
                        </div>
                        <section
                          class="elementor-section elementor-inner-section elementor-element elementor-element-e82c1b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                          data-id="e82c1b" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                              <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6a247104"
                                data-id="6a247104" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-6c90ca09 elementor-widget elementor-widget-image"
                                      data-id="6c90ca09" data-element_type="widget" data-widget_type="image.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                          <img decoding="async" width="800" height="663"
                                            src="img/Schermata-2022-04-13-alle-19.36.21-1.webp"
                                            class="attachment-large size-large wp-image-2358" alt loading="lazy" srcset="img/Schermata-2022-04-13-alle-19.36.21-1.png     img/Schermata-2022-04-13-alle-19.36.21-1.png         854wimg/Schermata-2022-04-13-alle-19.36.21-1-300x249.pngg/Schermata-2022-04-13-alle-19.36.21-1-300x249.png 300img/Schermata-2022-04-13-alle-19.36.21-1-768x637.pngmg/Schermata-2022-04-13-alle-19.36.21-1-768x637.png 768w
                        " sizes="(max-width: 800px) 100vw, 800px" />
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-14c22559 elementor-widget elementor-widget-heading"
                                      data-id="14c22559" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                          RESTAURACI&Oacute;N DE LA
                                          FUNCI&Oacute;N NORMAL DE LA
                                          V&Aacute;LVULA VASCULAR
                                        </h2>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-98c1598 elementor-widget elementor-widget-text-editor"
                                      data-id="98c1598" data-element_type="widget"
                                      data-widget_type="text-editor.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                          <p>
                                            El desarrollo de hemorroides y
                                            venas varicosas conduce a la
                                            formaci&oacute;n de
                                            co&aacute;gulos de sangre.
                                            Hemoliv+ normaliza la
                                            circulaci&oacute;n
                                            sangu&iacute;nea, evitando la
                                            formaci&oacute;n de
                                            co&aacute;gulos de sangre.
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-35ee6b0"
                                data-id="35ee6b0" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-1e51b4bf elementor-widget elementor-widget-image"
                                      data-id="1e51b4bf" data-element_type="widget" data-widget_type="image.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                          <img decoding="async" width="800" height="661"
                                            src="img/Schermata-2022-04-13-alle-19.36.26-1-1.webp"
                                            class="attachment-large size-large wp-image-2359" alt loading="lazy" srcset="img/Schermata-2022-04-13-alle-19.36.26-1-1.png   img/Schermata-2022-04-13-alle-19.36.26-1-1.png         850wimg/Schermata-2022-04-13-alle-19.36.26-1-1-300x248.pngSchermata-2022-04-13-alle-19.36.26-1-1-300x248.png 300img/Schermata-2022-04-13-alle-19.36.26-1-1-768x634.png/Schermata-2022-04-13-alle-19.36.26-1-1-768x634.png 768w
                        " sizes="(max-width: 800px) 100vw, 800px" />
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-6e8c603e elementor-widget elementor-widget-heading"
                                      data-id="6e8c603e" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                          FORTALECIMIENTO DE LA ESTRUCTURA DE
                                          LAS PAREDES VENOSAS
                                        </h2>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-29edf2aa elementor-widget elementor-widget-text-editor"
                                      data-id="29edf2aa" data-element_type="widget"
                                      data-widget_type="text-editor.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                          <p>
                                            En las enfermedades de los vasos,
                                            las c&eacute;lulas de la capa
                                            interna de los vasos se debilitan,
                                            las paredes se vuelven m&aacute;s
                                            delgadas.
                                          </p>
                                          <p>
                                            Los componentes de las cápsulas
                                            hacen que los vasos sanguíneos
                                            sean más firmes y elásticos, y
                                            ejercen un efecto positivo sobre
                                            el estado de las paredes venosas.
                                          </p>
                                          <div class="block6__doc">
                                            &nbsp;
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5cc04c37"
                                data-id="5cc04c37" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-14120e75 elementor-widget elementor-widget-image"
                                      data-id="14120e75" data-element_type="widget" data-widget_type="image.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                          <img decoding="async" width="800" height="662"
                                            src="img/Schermata-2022-04-13-alle-19.36.32-1.webp"
                                            class="attachment-large size-large wp-image-2360" alt loading="lazy" srcset="img/Schermata-2022-04-13-alle-19.36.32-1.png     img/Schermata-2022-04-13-alle-19.36.32-1.png         846wimg/Schermata-2022-04-13-alle-19.36.32-1-300x248.pngg/Schermata-2022-04-13-alle-19.36.32-1-300x248.png 300img/Schermata-2022-04-13-alle-19.36.32-1-768x635.pngmg/Schermata-2022-04-13-alle-19.36.32-1-768x635.png 768w
                        " sizes="(max-width: 800px) 100vw, 800px" />
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-36018c4d elementor-widget elementor-widget-heading"
                                      data-id="36018c4d" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                          ELIMINACI&Oacute;N DEL DOLOR Y LAS
                                          SENSACIONES DESAGRADADAS
                                        </h2>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-36ffece elementor-widget elementor-widget-text-editor"
                                      data-id="36ffece" data-element_type="widget"
                                      data-widget_type="text-editor.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                          <p>
                                            Los co&aacute;gulos de sangre y
                                            tromb&oacute;ticos se acumulan en
                                            las venas hinchadas e inflamadas,
                                            causando molestias y afectando la
                                            calidad de vida.
                                          </p>
                                          <p>
                                            Las cápsulas actúan sobre las
                                            causas del dolor a largo plazo, y
                                            también proporcionan alivio rápido
                                            gracias al romero en su
                                            composición.
                                          </p>
                                          <div class="block6__doc">
                                            &nbsp;
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-6edf544 elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="6edf544" data-element_type="section" data-settings='{"background_background":"classic"}'>
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                  <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-25b64636"
                    data-id="25b64636" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-69def425 elementor-widget elementor-widget-heading"
                          data-id="69def425" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <p class="elementor-heading-title elementor-size-default">
                              Nuestros clientes no pueden estar equivocados...
                            </p>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-789c64e6 elementor-widget elementor-widget-menu-anchor"
                          data-id="789c64e6" data-element_type="widget" data-widget_type="menu-anchor.default">
                          <div class="elementor-widget-container">
                            <div id="recensioni" class="elementor-menu-anchor"></div>
                          </div>
                        </div>

                        <section
                          class="elementor-section elementor-inner-section elementor-element elementor-element-25d8fa9b elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                          data-id="25d8fa9b" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                              <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-55c8af06"
                                data-id="55c8af06" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-512d7f26 elementor-arrows-yes elementor-pagination-type-bullets elementor-review--has-separator elementor--star-style-star_fontawesome elementor-widget elementor-widget-reviews"
                                      data-id="512d7f26" data-element_type="widget"
                                      data-settings='{"show_arrows":"yes","pagination":"bullets","speed":500,"autoplay":"yes","autoplay_speed":5000,"loop":"yes","pause_on_hover":"yes","pause_on_interaction":"yes","space_between":{"unit":"px","size":10,"sizes":[]},"space_between_tablet":{"unit":"px","size":10,"sizes":[]},"space_between_mobile":{"unit":"px","size":10,"sizes":[]}}'
                                      data-widget_type="reviews.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-swiper">
                                          <div class="elementor-main-swiper swiper-container">
                                            <div class="swiper-wrapper">
                                              <div class="swiper-slide">
                                                <div class="elementor-testimonial elementor-repeater-item-5cd9594">
                                                  <div class="elementor-testimonial__header">
                                                    <div class="elementor-testimonial__image">
                                                      <img decoding="async" src="img/otz1.webp" alt="Raquel G." />
                                                    </div>
                                                    <cite class="elementor-testimonial__cite"><span
                                                        class="elementor-testimonial__name">Carlos Martínez</span>
                                                      <div class="elementor-star-rating">
                                                        <i class="elementor-star-full">&#59700;</i><i
                                                          class="elementor-star-full">&#59700;</i><i
                                                          class="elementor-star-full">&#59700;</i><i
                                                          class="elementor-star-full">&#59700;</i><i
                                                          class="elementor-star-full">&#59700;</i>
                                                      </div>
                                                    </cite>
                                                    <div
                                                      class="elementor-testimonial__icon elementor-icon elementor-icon-facebook-f">
                                                      <i aria-hidden="true" class="fab fa-facebook-f"></i><span
                                                        class="elementor-screen-only">Leggi Tutto</span>
                                                    </div>
                                                  </div>
                                                  <div class="elementor-testimonial__content">
                                                    <div class="elementor-testimonial__text">
                                                      ¡Con estas cápsulas mi
                                                      vida se ha vuelto mucho
                                                      más cómoda! Durante
                                                      mucho tiempo sufrí de
                                                      dolor y picazón debido a
                                                      las hemorroides. Pero
                                                      gracias a Hemoliv+ sentí
                                                      alivio en solo unos
                                                      días. Los bultos se
                                                      hicieron menos visibles
                                                      y el malestar
                                                      desapareció. ¡Muchísimas
                                                      gracias a los
                                                      fabricantes por un
                                                      producto tan
                                                      maravilloso!
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-fa5c573"
                                data-id="fa5c573" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-a45f335 elementor-arrows-yes elementor-pagination-type-bullets elementor-review--has-separator elementor--star-style-star_fontawesome elementor-widget elementor-widget-reviews"
                                      data-id="a45f335" data-element_type="widget"
                                      data-settings='{"show_arrows":"yes","pagination":"bullets","speed":500,"autoplay":"yes","autoplay_speed":5000,"loop":"yes","pause_on_hover":"yes","pause_on_interaction":"yes","space_between":{"unit":"px","size":10,"sizes":[]},"space_between_tablet":{"unit":"px","size":10,"sizes":[]},"space_between_mobile":{"unit":"px","size":10,"sizes":[]}}'
                                      data-widget_type="reviews.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-swiper">
                                          <div class="elementor-main-swiper swiper-container">
                                            <div class="swiper-wrapper">
                                              <div class="swiper-slide">
                                                <div class="elementor-testimonial elementor-repeater-item-5cd9594">
                                                  <div class="elementor-testimonial__header">
                                                    <div class="elementor-testimonial__image">
                                                      <img decoding="async" src="img/otz2.webp" alt="Ana L." />
                                                    </div>
                                                    <cite class="elementor-testimonial__cite"><span
                                                        class="elementor-testimonial__name">José Ramírez</span>
                                                      <div class="elementor-star-rating">
                                                        <i class="elementor-star-full">&#59700;</i><i
                                                          class="elementor-star-full">&#59700;</i><i
                                                          class="elementor-star-full">&#59700;</i><i
                                                          class="elementor-star-full">&#59700;</i><i
                                                          class="elementor-star-full">&#59700;</i>
                                                      </div>
                                                    </cite>
                                                    <div
                                                      class="elementor-testimonial__icon elementor-icon elementor-icon-facebook-f">
                                                      <i aria-hidden="true" class="fab fa-facebook-f"></i><span
                                                        class="elementor-screen-only">Leggi Tutto</span>
                                                    </div>
                                                  </div>
                                                  <div class="elementor-testimonial__content">
                                                    <div class="elementor-testimonial__text">
                                                      He sufrido de
                                                      hemorroides crónicas
                                                      durante muchos años y he
                                                      probado numerosos
                                                      productos, pero Hemoliv+
                                                      me dio los mejores
                                                      resultados. ¡Son
                                                      cápsulas realmente
                                                      efectivas! Ayudaron a
                                                      reducir la inflamación,
                                                      disminuir la hinchazón y
                                                      mejorar
                                                      significativamente la
                                                      circulación en la zona
                                                      afectada. Ahora me
                                                      siento mejor que nunca y
                                                      recomiendo Hemoliv+ a
                                                      todos los que buscan un
                                                      remedio confiable para
                                                      las hemorroides.
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-10ac4b0a"
                                data-id="10ac4b0a" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-67c68d30 elementor-arrows-yes elementor-pagination-type-bullets elementor-review--has-separator elementor--star-style-star_fontawesome elementor-widget elementor-widget-reviews"
                                      data-id="67c68d30" data-element_type="widget"
                                      data-settings='{"show_arrows":"yes","pagination":"bullets","speed":500,"autoplay":"yes","autoplay_speed":5000,"loop":"yes","pause_on_hover":"yes","pause_on_interaction":"yes","space_between":{"unit":"px","size":10,"sizes":[]},"space_between_tablet":{"unit":"px","size":10,"sizes":[]},"space_between_mobile":{"unit":"px","size":10,"sizes":[]}}'
                                      data-widget_type="reviews.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-swiper">
                                          <div class="elementor-main-swiper swiper-container">
                                            <div class="swiper-wrapper">
                                              <div class="swiper-slide">
                                                <div class="elementor-testimonial elementor-repeater-item-5cd9594">
                                                  <div class="elementor-testimonial__header">
                                                    <div class="elementor-testimonial__image">
                                                      <img decoding="async" src="img/otz3.webp" alt="Paloma M." />
                                                    </div>
                                                    <cite class="elementor-testimonial__cite"><span
                                                        class="elementor-testimonial__name">Luis Hernández</span>
                                                      <div class="elementor-star-rating">
                                                        <i class="elementor-star-full">&#59700;</i><i
                                                          class="elementor-star-full">&#59700;</i><i
                                                          class="elementor-star-full">&#59700;</i><i
                                                          class="elementor-star-full">&#59700;</i><i
                                                          class="elementor-star-full">&#59700;</i>
                                                      </div>
                                                    </cite>
                                                    <div
                                                      class="elementor-testimonial__icon elementor-icon elementor-icon-facebook-f">
                                                      <i aria-hidden="true" class="fab fa-facebook-f"></i><span
                                                        class="elementor-screen-only">Leggi Tutto</span>
                                                    </div>
                                                  </div>
                                                  <div class="elementor-testimonial__content">
                                                    <div class="elementor-testimonial__text">
                                                      Estuve mucho tiempo
                                                      dudando antes de probar
                                                      Hemoliv+, pero no me
                                                      arrepiento de haberme
                                                      arriesgado. ¡Las
                                                      cápsulas realmente
                                                      funcionan! No solo
                                                      alivian los síntomas de
                                                      las hemorroides, sino
                                                      que también previenen su
                                                      reaparición. Empecé a
                                                      notar que los problemas
                                                      con las venas ocurren
                                                      con menos frecuencia, y
                                                      eso es muy alentador. Lo
                                                      recomiendo a todos los
                                                      que quieren deshacerse
                                                      de las hemorroides de
                                                      una vez por todas.
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-3e2d8efb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="3e2d8efb" data-element_type="section" data-settings='{"background_background":"classic"}'>
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                  <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7477cc7d"
                    data-id="7477cc7d" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <section
                          class="elementor-section elementor-inner-section elementor-element elementor-element-80606a0 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                          data-id="80606a0" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                              <div
                                class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7d39e7da"
                                data-id="7d39e7da" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-68473414 elementor-widget elementor-widget-heading"
                                      data-id="68473414" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">
                                          COMO PEDIR
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                        <section
                          class="elementor-section elementor-inner-section elementor-element elementor-element-76c2ea7b elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                          data-id="76c2ea7b" data-element_type="section">
                          <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                              <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7fe021e6"
                                data-id="7fe021e6" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-33a15441 elementor-widget elementor-widget-image"
                                      data-id="33a15441" data-element_type="widget" data-widget_type="image.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                          <img decoding="async" width="220" height="220"
                                            src="img/deliv-icon-copia-2-1-1-1-2-1-2-1.webp"
                                            class="attachment-large size-large wp-image-2364" alt loading="lazy" srcset="img/deliv-icon-copia-2-1-1-1-2-1-2-1.png         img/deliv-icon-copia-2-1-1-1-2-1-2-1.png         220wimg/deliv-icon-copia-2-1-1-1-2-1-2-1-150x150.png  img/deliv-icon-copia-2-1-1-1-2-1-2-1-150x150.png 150w
                        " sizes="(max-width: 220px) 100vw, 220px" />
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-121e3e8e elementor-widget elementor-widget-text-editor"
                                      data-id="121e3e8e" data-element_type="widget"
                                      data-widget_type="text-editor.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                          <p>
                                            Escriba su nombre y n&uacute;mero
                                            de tel&eacute;fono en el siguiente
                                            formulario.
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1297bfb0"
                                data-id="1297bfb0" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-13e8c0a7 elementor-widget elementor-widget-image"
                                      data-id="13e8c0a7" data-element_type="widget" data-widget_type="image.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                          <img decoding="async" width="220" height="220"
                                            src="img/deliv-icon-copia-3-1-2-1-2-1.webp"
                                            class="attachment-large size-large wp-image-2365" alt loading="lazy" srcset="img/deliv-icon-copia-3-1-2-1-2-1.png             img/deliv-icon-copia-3-1-2-1-2-1.png         220wimg/deliv-icon-copia-3-1-2-1-2-1-150x150.png      img/deliv-icon-copia-3-1-2-1-2-1-150x150.png 150w
                        " sizes="(max-width: 220px) 100vw, 220px" />
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-3e3ebe8c elementor-widget elementor-widget-text-editor"
                                      data-id="3e3ebe8c" data-element_type="widget"
                                      data-widget_type="text-editor.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                          <p>
                                            El operador te llamar&aacute; para
                                            confirmar tu pedido y resolver
                                            cualquier duda
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6f5d4ad9"
                                data-id="6f5d4ad9" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-2e209df4 elementor-widget elementor-widget-image"
                                      data-id="2e209df4" data-element_type="widget" data-widget_type="image.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                          <img decoding="async" width="220" height="220"
                                            src="img/deliv-icon-copia-4-1-1-1-2-1-2-1.webp"
                                            class="attachment-large size-large wp-image-2366" alt loading="lazy" srcset="img/deliv-icon-copia-4-1-1-1-2-1-2-1.png         img/deliv-icon-copia-4-1-1-1-2-1-2-1.png         220wimg/deliv-icon-copia-4-1-1-1-2-1-2-1-150x150.png  img/deliv-icon-copia-4-1-1-1-2-1-2-1-150x150.png 150w
                        " sizes="(max-width: 220px) 100vw, 220px" />
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-48b417f2 elementor-widget elementor-widget-text-editor"
                                      data-id="48b417f2" data-element_type="widget"
                                      data-widget_type="text-editor.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                          <p>
                                            Enviamos su pedido dentro de las
                                            24 horas por mensajer&iacute;a
                                            urgente
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3398b0d2"
                                data-id="3398b0d2" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-3db93610 elementor-widget elementor-widget-image"
                                      data-id="3db93610" data-element_type="widget" data-widget_type="image.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-image">
                                          <img decoding="async" width="218" height="218"
                                            src="img/deliv-icon-copia-5-1-1-1-2-1-2-1.webp"
                                            class="attachment-large size-large wp-image-2367" alt loading="lazy" srcset="img/deliv-icon-copia-5-1-1-1-2-1-2-1.png         img/deliv-icon-copia-5-1-1-1-2-1-2-1.png         218wimg/deliv-icon-copia-5-1-1-1-2-1-2-1-150x150.png  img/deliv-icon-copia-5-1-1-1-2-1-2-1-150x150.png 150w
                        " sizes="(max-width: 218px) 100vw, 218px" />
                                        </div>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-60a52de elementor-widget elementor-widget-text-editor"
                                      data-id="60a52de" data-element_type="widget"
                                      data-widget_type="text-editor.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-text-editor elementor-clearfix">
                                          <p>
                                            Pagar&aacute;s solo al recibir el
                                            pedido en casa
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section
              class="elementor-section elementor-top-section elementor-element elementor-element-43347f43 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
              data-id="43347f43" data-element_type="section" id="modulo"
              data-settings='{"background_background":"classic"}'>
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                  <div
                    class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7b66d4b2"
                    data-id="7b66d4b2" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div class="elementor-element elementor-element-91ed6d5 elementor-widget elementor-widget-image"
                          data-id="91ed6d5" data-element_type="widget" data-widget_type="image.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-image">
                              <img decoding="async" width="768" height="1024" src="img/product.webp"
                                class="attachment-large size-large wp-image-2350" />
                            </div>
                          </div>
                        </div>
                        <section
                          class="elementor-section elementor-inner-section elementor-element elementor-element-4f522086 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                          data-id="4f522086" data-element_type="section"
                          data-settings='{"background_background":"classic"}'>
                          <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-row">
                              <div
                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-662e47f9"
                                data-id="662e47f9" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-48377f8d elementor-widget elementor-widget-heading"
                                      data-id="48377f8d" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">
                                          Precio inicial
                                        </p>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-2df15025 elementor-widget elementor-widget-heading"
                                      data-id="2df15025" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">
                                          <?= $cms->oldpr; ?><?= $cms->currency;
                                            ?>
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4dfa383a"
                                data-id="4dfa383a" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-50ab5783 elementor-view-default elementor-widget elementor-widget-icon"
                                      data-id="50ab5783" data-element_type="widget" data-widget_type="icon.default">
                                      <div class="elementor-widget-container">
                                        <div class="elementor-icon-wrapper">
                                          <div class="elementor-icon">
                                            <i aria-hidden="true" class="fas fa-arrow-right"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-65bc731a"
                                data-id="65bc731a" data-element_type="column"
                                data-settings='{"background_background":"classic"}'>
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-37c2d65f elementor-widget elementor-widget-heading"
                                      data-id="37c2d65f" data-element_type="widget" data-widget_type="heading.default">
                                      <div class="elementor-widget-container">
                                        <p class="elementor-heading-title elementor-size-default">
                                          OFERTA
                                        </p>
                                      </div>
                                    </div>
                                    <div
                                      class="elementor-element elementor-element-59d1828b elementor-headline--style-highlight elementor-widget elementor-widget-animated-headline"
                                      data-id="59d1828b" data-element_type="widget"
                                      data-widget_type="animated-headline.default">
                                      <div class="elementor-widget-container">
                                        <h3 class="elementor-headline">
                                          <span
                                            class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                                            <span
                                              class="elementor-headline-dynamic-text elementor-headline-text-active">
                                              <?= $cms->price; ?><?= $cms->currency;
                                                ?>
                                            </span>
                                          </span>
                                        </h3>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-456469fb"
                                data-id="456469fb" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                  <div class="elementor-widget-wrap">
                                    <div
                                      class="elementor-element elementor-element-3487d916 elementor-align-left elementor-mobile-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                      data-id="3487d916" data-element_type="widget"
                                      data-widget_type="icon-list.default">
                                      <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items">
                                          <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                              <i aria-hidden="true" class="fas fa-truck"></i>
                                            </span>
                                            <span class="elementor-icon-list-text"><b> Env&iacute;o rapido</b> en
                                              48h</span>
                                          </li>
                                          <li class="elementor-icon-list-item">
                                            <span class="elementor-icon-list-icon">
                                              <i aria-hidden="true" class="fas fa-money-bill-wave"></i>
                                            </span>
                                            <span class="elementor-icon-list-text"><b>Paga cuando recibes</b>
                                            </span>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                      </div>
                    </div>
                  </div>
                  <div
                    class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5f6059aa"
                    data-id="5f6059aa" data-element_type="column">
                    <div class="elementor-column-wrap elementor-element-populated">
                      <div class="elementor-widget-wrap">
                        <div
                          class="elementor-element elementor-element-42496ba3 elementor-widget elementor-widget-menu-anchor"
                          data-id="42496ba3" data-element_type="widget" data-widget_type="menu-anchor.default">
                          <div class="elementor-widget-container">
                            <div id="ordina" class="elementor-menu-anchor"></div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-7f7ebccc elementor-widget elementor-widget-heading"
                          data-id="7f7ebccc" data-element_type="widget" data-widget_type="heading.default">
                          <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">
                              RELLENA EL FORMULARIO PARA REALIZAR EL PEDIDO
                            </h2>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-49b9d470 elementor-widget elementor-widget-text-editor"
                          data-id="49b9d470" data-element_type="widget" data-widget_type="text-editor.default">
                          <div class="elementor-widget-container">
                            <div class="elementor-text-editor elementor-clearfix">
                              <p>
                                Uno de nuestros asesores se pondr&aacute; en
                                contacto con usted y le ayudar&aacute; de
                                forma gratuita.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-3343b080 elementor-button-align-stretch elementor-widget elementor-widget-form"
                          data-id="3343b080" data-element_type="widget"
                          data-settings='{"step_next_label":"Successivo","step_previous_label":"Precedente","button_width":"100","step_type":"number_text","step_icon_shape":"circle"}'
                          data-widget_type="form.default">
                          <div class="elementor-widget-container">
                            <form method="post" action="">
                              <?= $cms->params(); ?>

                              <div class="elementor-form-fields-wrapper elementor-labels-above">
                                <div
                                  class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">
                                  <label for="form-field-name" class="elementor-field-label">
                                    Nombre y Apellido
                                  </label>
                                  <input size="1" type="text" name="name" minlength="2" id="form-field-name"
                                    class="elementor-field elementor-size-sm elementor-field-textual"
                                    placeholder="Ingrese su Nombre" required="required" aria-required="true" />
                                </div>
                                <div
                                  class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-phone elementor-col-100 elementor-field-required">
                                  <label for="form-field-phone" class="elementor-field-label">
                                    N&uacute;mero de Tel&eacute;fono
                                  </label>
                                  <input size="1" type="tel" name="phone" minlength="7" id="form-field-phone"
                                    class="elementor-field elementor-size-sm elementor-field-textual"
                                    placeholder="Ingrese su n&uacute;mero telef&oacute;nico" required="required"
                                    aria-required="true"
                                    title="Sono accettati solo numeri e caratteri telefonici (#, -, *, ecc.)." />
                                </div>
                                <div
                                  class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                  <button type="submit" class="elementor-button elementor-size-sm">
                                    <span>
                                      <span class="elementor-button-icon">
                                      </span>
                                      <span class="elementor-button-text">PIDE AHORA</span>
                                    </span>
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <div class="faq">
              <h2>PREGUNTAS FRECUENTES</h2>
              <div class="faq-question">
                <h3>1. &iquest;Cu&aacute;les son los plazos de entrega?</h3>
                <div class="faq-answer">
                  <p>
                    Normalmente, el servicio de mensajer&iacute;a realiza la
                    entrega en un plazo m&aacute;ximo de 2-3 d&iacute;as.
                  </p>
                </div>
              </div>
              <div class="faq-question">
                <h3>2. &iquest;Puedo pagar directamente contra entrega?</h3>
                <div class="faq-answer">
                  <p>
                    S&iacute;, para garantizar una mayor comodidad y seguridad
                    ofrecemos Pago Contra Reembolso, &iexcl;puedes pagar
                    directamente al mensajero cuando llegue a tu casa!
                  </p>
                </div>
              </div>
              <div class="faq-question">
                <h3>3. &iquest;Est&aacute;n seguros mis datos?</h3>
                <div class="faq-answer">
                  <p>
                    Sin duda, sí. En la esquina superior izquierda verá un
                    ícono de candado con “https”. Esto garantiza la
                    transmisión segura de sus datos a nuestros operadores,
                    quienes se encargarán de la entrega del producto
                  </p>
                </div>
              </div>
              <div class="faq-question">
                <h3>4. &iquest;Puedo tener m&aacute;s informaci&oacute;n?</h3>
                <div class="faq-answer">
                  <p>
                    &iexcl;Por supuesto! Si a&uacute;n no ha completado el
                    formulario de pedido y no est&aacute; seguro de qu&eacute;
                    hacer, al completarlo, uno de nuestros operadores lo
                    contactar&aacute; por tel&eacute;fono para responder a
                    todas sus preguntas antes de comprar.
                  </p>
                </div>
              </div>

              <script>
                const questions = document.querySelectorAll(".faq-question");

                // &#1044;&#1086;&#1073;&#1072;&#1074;&#1083;&#1103;&#1077;&#1084; &#1086;&#1073;&#1088;&#1072;&#1073;&#1086;&#1090;&#1095;&#1080;&#1082; &#1082;&#1083;&#1080;&#1082;&#1072; &#1085;&#1072; &#1082;&#1072;&#1078;&#1076;&#1099;&#1081; &#1074;&#1086;&#1087;&#1088;&#1086;&#1089;
                questions.forEach((question) => {
                  const button = question.querySelector("h3");
                  const answer = question.querySelector(".faq-answer");
                  button.addEventListener("click", () => {
                    // &#1055;&#1077;&#1088;&#1077;&#1082;&#1083;&#1102;&#1095;&#1072;&#1077;&#1084; &#1082;&#1083;&#1072;&#1089;&#1089; 'is-open' &#1091; &#1073;&#1083;&#1086;&#1082;&#1072; &#1086;&#1090;&#1074;&#1077;&#1090;&#1072;
                    answer.classList.toggle("is-open");
                  });
                });
              </script>

              <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-2207288e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="2207288e" data-element_type="section" data-settings='{"background_background":"classic"}'>
                <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-row">
                    <div
                      class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-604255c"
                      data-id="604255c" data-element_type="column" data-settings='{"background_background":"classic"}'>
                      <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                          <!-- <div
                              class="elementor-element elementor-element-7dd8d14f elementor-widget elementor-widget-heading"
                              data-id="7dd8d14f"
                              data-element_type="widget"
                              data-widget_type="heading.default"
                            >
                              <div class="elementor-widget-container">
                                <p
                                  class="elementor-heading-title elementor-size-default"
                                >
                                  <a href="https://privacy-term.com/privacy-en/"
                                    >Privacy Policy - Cookie Policy</a
                                  >
                                </p>
                              </div>
                            </div> -->
                          <!-- <div
                              class="elementor-element elementor-element-49d37b05 elementor-widget elementor-widget-heading"
                              data-id="49d37b05"
                              data-element_type="widget"
                              data-widget_type="heading.default"
                            >
                              <div class="elementor-widget-container">
                                <p
                                  class="elementor-heading-title elementor-size-default"
                                >
                                  <a href="https://privacy-term.com/terms-en/"
                                    >Terms &amp; Condition</a
                                  >
                                </p>
                              </div>
                            </div> -->
                          <div
                            class="elementor-element elementor-element-578d5c47 elementor-widget elementor-widget-heading"
                            data-id="578d5c47" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                              <p class="elementor-heading-title elementor-size-default">
                                Copyright
                                <script>
                                  document.write(new Date().getFullYear());
                                </script>
                                :<br />This site is not a part of the Facebook
                                Website or Facebook Inc. Additionaly. This
                                site is NOT endorsed by FACEBOOK is a
                                trademark of FACEBOOK, Inc. <br />Discaimer:
                                the results are subjective and may vary from
                                person to person
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section
                class="elementor-section elementor-top-section elementor-element elementor-element-303d6df2 elementor-hidden-mobile elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="303d6df2" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                  <div class="elementor-row">
                    <div
                      class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1b00ba5d"
                      data-id="1b00ba5d" data-element_type="column">
                      <div class="elementor-column-wrap elementor-element-populated">
                        <div class="elementor-widget-wrap">
                          <div
                            class="elementor-element elementor-element-5f205255 elementor-widget elementor-widget-text-editor"
                            data-id="5f205255" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                              <div class="elementor-text-editor elementor-clearfix">
                                <p>
                                  ATENCI&Oacute;N: los productos recomendados
                                  en este sitio se venden en
                                  afiliaci&oacute;n, por lo tanto, no somos el
                                  fabricante ni el vendedor oficial de todos
                                  los productos que puede encontrar en nuestro
                                  sitio. Por lo tanto, para cualquier
                                  solicitud de reembolso u otros problemas con
                                  los productos pedidos a trav&eacute;s del
                                  sitio, siempre debe consultar al vendedor
                                  oficial. Sin embargo, estaremos disponibles
                                  para ayudarlo y apoyarlo.<br />Los productos
                                  se revisan con fines informativos: de
                                  ninguna manera es posible garantizar ciertos
                                  resultados, las posibilidades de
                                  &eacute;xito de cualquier resultado
                                  var&iacute;an de un cliente a otro.<br />Este
                                  blog no es un peri&oacute;dico ya que se
                                  actualiza sin ninguna periodicidad. Por lo
                                  tanto, no puede ser considerado un producto
                                  editorial de conformidad con la ley n. 62
                                  del 7.03.2001. Algunas im&aacute;genes y
                                  rese&ntilde;as del blog se han encontrado en
                                  la web, si cree que pueden infringir sus
                                  derechos, h&aacute;ganoslo saber y se
                                  eliminar&aacute;n de inmediato.
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
        <div class="post-tags"></div>
      </div>
    </div>
  </main>

  <?php $cms->footer(); ?>
</body>

</html>