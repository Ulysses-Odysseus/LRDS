/* =============================================================================
	Style CSS by FatCat Online											
  	http://fatcatonline.net/ 
	Last Update June/28/13 
   ========================================================================== */
/* SASS Settings -- Delete this title when done ediitng
=============================*/
/* Background */
/* Font Color */
/* Line Color */
/* Background Colors */
/* General Settings
=============================*/
html,
body {
  background: white url("../img/body-bg.jpg") no-repeat center center fixed !important;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; }

img {
  max-width: 100%;
  height: auto; }

/* Visible Elements */
.visible {
  display: none; }

.novisible {
  display: block; }

/* Clearfix */
.group:after {
  content: "";
  display: table;
  clear: both; }

/* Divider for nav Bar */
.divider {
  height: 0;
  padding: 0;
  opacity: 0.3;
  display: block;
  list-style: none;
  border-top: 1px solid;
  border-top-color: #858585; }

.dividerVertical {
  opacity: 0.3;
  height: 70px;
  list-style: none;
  border-right: 1px solid #858585; }

li {
  list-style-type: none; }

a {
  color: inherit;
  text-decoration: none; }

/* Keyframes Fade In/Out Animation (under ".content" div) 
=============================*/
/* Fade In */
@keyframes fadeIn {
  0% {
    opacity: 0; }

  100% {
    opacity: 1; } }

@-webkit-keyframes fadeIn {
  0% {
    opacity: 0; }

  100% {
    opacity: 1; } }

@-moz-keyframes fadeIn {
  0% {
    opacity: 0; }

  100% {
    opacity: 1; } }

@-o-keyframes fadeIn {
  0% {
    opacity: 0; }

  100% {
    opacity: 1; } }

/* Fade Out */
@keyframes fadeOut {
  0% {
    opacity: 1; }

  100% {
    opacity: 0; } }

@-webkit-keyframes fadeOut {
  0% {
    opacity: 1; }

  100% {
    opacity: 0; } }

@-moz-keyframes fadeOut {
  0% {
    opacity: 1; }

  100% {
    opacity: 0; } }

@-o-keyframes fadeOut {
  0% {
    opacity: 1; }

  100% {
    opacity: 0; } }

/* Slide In Text Side Bar 
=============================*/
@keyframes slideIn {
  0% {
    margin: 0 0 0 -40px; }

  100% {
    margin: 0 0 0 0; } }

@-webkit-keyframes slideIn {
  0% {
    margin: 0 0 0 -40px; }

  100% {
    margin: 0 0 0 0; } }

@-moz-keyframes slideIn {
  0% {
    margin: 0 0 0 -40px; }

  100% {
    margin: 0 0 0 0; } }

@-o-keyframes slideIn {
  0% {
    margin: 0 0 0 -40px; }

  100% {
    margin: 0 0 0 0; } }

/* =============================================================================
	Container
   ========================================================================== */
.container {
  width: 960px;
  height: 100%; }

/* Search Bar
-------------------------*/
.searchBar {
  width: 300px;
  height: 70px;
  margin: 0 0 0 19px;
  float: left !important; }
  .searchBar .searchForm {
    width: 300px;
    height: 70px;
    position: relative; }
    .searchBar .searchForm .searchInput {
      width: 300px;
      border: none;
      height: 100%;
      color: #555555;
      font-size: 16px;
      padding: 0 60px 0 20px;
      font-family: 'Raleway', arial , sans-serif;
      font-weight: 100; }
    .searchBar .searchForm .searchInput:focus {
      outline: none;
      border-color: #999999;
      -webkit-box-shadow: 0 0 5px #999999;
      -moz-box-shadow: 0 0 5px #999999;
      box-shadow: 0 0 5px #999999; }
    .searchBar .searchForm .searchIcon {
      z-index: 2;
      width: 10px;
      height: inherit;
      padding: 0px 30px;
      position: absolute;
      right: 0;
      top: 0;
      border: none !important;
      outline: none !important;
      background: white url("../img/icon-search.png") no-repeat center; }

/* =============================================================================
	Side Bar
   ========================================================================== */
.sideBar {
  width: 150px;
  height: 100% !important;
  position: fixed;
  /* Logo */
  /* Navigation Bar
  -------------------------*/ }
  .sideBar .logoarea {
    width: 150px;
    height: 168px;
    background: url("../img/bar-bg-active.png") repeat; }
    .sideBar .logoarea .logo {
      width: inherit;
      height: inherit;
      background: url("../img/bar-bg-active.png") repeat; }
      .sideBar .logoarea .logo a {
        width: inherit;
        height: inherit; }
        .sideBar .logoarea .logo a h1 {
          margin: 0;
          padding: 0;
          width: inherit;
          height: inherit;
          display: block;
          text-indent: -99999em;
          background: url("../img/logo.png") no-repeat; }
  .sideBar #textActiveBar {
    width: 80px;
    margin: 19px 0 0 0;
    float: right;
    overflow: hidden; }
    .sideBar #textActiveBar ul {
      margin: 0;
      padding: 0;
      /* Li Active/Non Active */
      /* Li Colors */ }
      .sideBar #textActiveBar ul li {
        width: 80px;
        height: 70px;
        margin-bottom: 1px;
        color: #efefef;
        line-height: 70px;
        text-align: center; }
      .sideBar #textActiveBar ul .liActive {
        visibility: visible;
        transition: all 0.1s ease-in-out;
        -webkit-animation-name: slideIn;
        -webkit-animation-duration: 0.3s;
        -webkit-animation-iteration-count: 1;
        -webkit-animation-delay: 0.0s;
        -webkit-animation-direction: alternate;
        -webkit-transition: all 0.1s ease-in-out;
        -moz-animation-name: slideIn;
        -moz-animation-duration: 0.3s;
        -moz-animation-iteration-count: 1;
        -moz-animation-delay: 0.0s;
        -moz-animation-direction: alternate;
        -moz-transition: all 0.1s ease-in-out;
        -o-animation-name: slideIn;
        -o-animation-duration: 0.3s;
        -o-animation-iteration-count: 1;
        -o-animation-delay: 0.0s;
        -o-animation-direction: alternate;
        -o-transition: all 0.1s ease-in-out; }
      .sideBar #textActiveBar ul .liNoActive {
        visibility: hidden; }
      .sideBar #textActiveBar ul #texthome {
        background: url("../img/bar-bg-active.png") repeat; }
      .sideBar #textActiveBar ul #textstore {
        background: url("../img/bar-bg-active-red.png") repeat; }
      .sideBar #textActiveBar ul #textshows {
        background: url("../img/bar-bg-active-green.png") repeat; }
      .sideBar #textActiveBar ul #textabout {
        background: url("../img/bar-bg-active-blue.png") repeat; }
      .sideBar #textActiveBar ul #textsubscribe {
        background: url("../img/bar-bg-active-orange.png") repeat; }
  .sideBar .navBar {
    width: 70px;
    height: 100%;
    background: url("../img/bar-bg-active.png") repeat; }
    .sideBar .navBar ul {
      padding: 0;
      margin: 19px 0 0 0; }
      .sideBar .navBar ul li {
        width: 70px;
        list-style-type: none; }
        .sideBar .navBar ul li:hover {
          cursor: pointer;
          background: url("../img/bar-bg-active.png") repeat; }
        .sideBar .navBar ul li a {
          display: block;
          width: inherit;
          height: inherit;
          text-indent: -999em; }
        .sideBar .navBar ul li .home {
          background: url(../img/nav-icon-home.png) no-repeat center; }
        .sideBar .navBar ul li .store {
          background: url(../img/nav-icon-store.png) no-repeat center; }
        .sideBar .navBar ul li .shows {
          background: url(../img/nav-icon-shows.png) no-repeat center; }
        .sideBar .navBar ul li .about {
          background: url(../img/nav-icon-about.png) no-repeat center; }
        .sideBar .navBar ul li .subscribe {
          background: url(../img/nav-icon-newsletter.png) no-repeat center; }
      .sideBar .navBar ul .navButton {
        height: 70px; }
      .sideBar .navBar ul .activeNav {
        background: url("../img/bar-bg-active.png") repeat; }
    .sideBar .navBar .newsletterBar .rssTitle {
      font-size: 25px; }
    .sideBar .navBar .newsletterBar .rssSubTitle {
      display: block;
      margin: 10px 0 0 0;
      font-size: 17px; }
    .sideBar .navBar .newsletterBar .rssText {
      display: block;
      font-size: 13px;
      margin: 10px 0 10px 0; }
      .sideBar .navBar .newsletterBar .rssText a:hover {
        color: #dc8d40; }

/* Link Up
-------------------------*/
.linkUp {
  bottom: 2%;
  display: none;
  position: fixed; }
  .linkUp .linkUpButton a img {
    width: 70px;
    height: 20px; }

/* =============================================================================
	Header
   ========================================================================== */
.header {
  width: 480px;
  height: 168px;
  margin: 0 0 0 150px;
  background: url("../img/bar-bg-active.png") repeat; }
  .header .feuturedArea {
    height: 130px;
    padding: 19px 0 0 0;
    /* Bar */
    /* Video */
    /* Video Info Area */
    /* Text */ }
    .header .feuturedArea div {
      display: inline-block; }
    .header .feuturedArea .separationBar {
      width: 1px;
      height: 130px;
      background: #858585;
      margin: 0 0 0 19px; }
    .header .feuturedArea .videoArea {
      width: 228px;
      height: 130px;
      background: black;
      margin: 0 0 0 19px; }
    .header .feuturedArea .infoArea {
      width: 190px;
      height: 130px;
      margin: 0 0 0 10px;
      overflow: hidden;
      position: relative;
      vertical-align: top; }
    .header .feuturedArea ul {
      height: 130px;
      padding: 0;
      margin: 0;
      list-style-type: none;
      vertical-align: middle; }
      .header .feuturedArea ul li {
        color: white; }
      .header .feuturedArea ul .info {
        font-size: 29px; }
      .header .feuturedArea ul .videolink {
        margin: 5px 0 0 0;
        font-size: 13px; }
        .header .feuturedArea ul .videolink a {
          color: white;
          text-decoration: none; }

/* =============================================================================
	Content
   ========================================================================== */
.content {
  width: 780px;
  overflow: hidden;
  margin: 19px 0 0 169px;
  /* =============================================================================
  	HOME
     ========================================================================== */
  /* End Home */
  /* =============================================================================
  	STORE
     ========================================================================== */
  /* End Store */
  /* =============================================================================
  	SHOWS
     ========================================================================== */
  /* End Shows */
  /* =============================================================================
  	NEWSLETTER
     ========================================================================== */
  /* =============================================================================
  	SINGLE PAGE ~ about, blog-single, shows-single
     ========================================================================== */
  /* End single */ }
  .content .activeContent {
    display: block;
    -webkit-animation-name: fadeIn;
    -webkit-animation-duration: 0.8s;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-delay: 0.0s;
    -webkit-animation-direction: alternate;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-animation-name: fadeIn;
    -moz-animation-duration: 0.8s;
    -moz-animation-iteration-count: 1;
    -moz-animation-delay: 0.0s;
    -moz-animation-direction: alternate;
    -moz-transition: all 0.1s ease-in-out;
    -o-animation-name: fadeIn;
    -o-animation-duration: 0.8s;
    -o-animation-iteration-count: 1;
    -o-animation-delay: 0.0s;
    -o-animation-direction: alternate;
    -o-transition: all 0.1s ease-in-out;
    animation: fadeIn 0.5s 1;
    transition: all 0.1s ease-in-out; }
  .content .no-active {
    display: none;
    opacity: 0;
    -webkit-animation-name: fadeOut;
    -webkit-animation-duration: 0.8s;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-delay: 0.0s;
    -webkit-animation-direction: alternate;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-animation-name: fadeOut;
    -moz-animation-duration: 0.8s;
    -moz-animation-iteration-count: 1;
    -moz-animation-delay: 0.0s;
    -moz-animation-direction: alternate;
    -moz-transition: all 0.1s ease-in-out;
    -o-animation-name: fadeOut;
    -o-animation-duration: 0.8s;
    -o-animation-iteration-count: 1;
    -o-animation-delay: 0.0s;
    -o-animation-direction: alternate;
    -o-transition: all 0.1s ease-in-out;
    animation: fadeOut 0.5s 1;
    transition: all 0.1s ease-in-out; }
  .content #home {
    width: 200%;
    padding: 0 0 20px 0;
    overflow-x: hidden;
    /* Social Sub Nav
    -------------------------*/
    /* Social Feed Area
    -------------------------*/ }
    .content #home .socialFeedBar {
      float: left; }
      .content #home .socialFeedBar ul {
        margin: 0;
        padding: 0;
        width: 461px;
        height: 70px;
        list-style-type: none;
        background: url("../img/bar-bg-active.png") repeat; }
        .content #home .socialFeedBar ul li {
          float: left !important;
          height: inherit; }
          .content #home .socialFeedBar ul li a {
            width: 76px;
            height: inherit;
            outline: none;
            float: left !important;
            vertical-align: middle;
            text-indent: -9999em; }
            .content #home .socialFeedBar ul li a img {
              margin: 0 auto;
              padding: 30% 0;
              display: block; }
          .content #home .socialFeedBar ul li a:hover, .content #home .socialFeedBar ul li .active {
            outline: none;
            background: url("../img/bar-bg-active.png") repeat; }
        .content #home .socialFeedBar ul .all {
          background: url(../img/media-icon-view-all.png) center no-repeat; }
        .content #home .socialFeedBar ul .blog {
          background: url(../img/media-icon-blog.png) center no-repeat; }
        .content #home .socialFeedBar ul .facebook {
          background: url(../img/media-icon-facebook.png) center no-repeat; }
        .content #home .socialFeedBar ul .twitter {
          background: url(../img/media-icon-twitter.png) center no-repeat; }
        .content #home .socialFeedBar ul .instagram {
          background: url(../img/media-icon-instagram.png) center no-repeat; }
        .content #home .socialFeedBar ul .rss {
          background: url(../img/media-icon-rss.png) center no-repeat; }
    .content #home .bloglist {
      width: 50%;
      float: left;
      overflow-x: hidden;
      margin: 0;
      padding: 0; }
      .content #home .bloglist .socialFeedArea {
        width: 105%;
        margin: 0 auto; }
        .content #home .bloglist .socialFeedArea ul {
          min-width: 105%;
          margin: 0;
          padding: 0;
          overflow: hidden;
          list-style-type: none; }
          .content #home .bloglist .socialFeedArea ul li {
            margin: 20px 0 0 0;
            overflow: hidden; }
            .content #home .bloglist .socialFeedArea ul li a {
              font-size: 11px;
              color: #ccc;
              opacity: 1; }
            .content #home .bloglist .socialFeedArea ul li .mainContentEffect {
              /* linear */
              -webkit-transition: all 200ms cubic-bezier(0.25, 0.25, 0.75, 0.75);
              -moz-transition: all 200ms cubic-bezier(0.25, 0.25, 0.75, 0.75);
              -ms-transition: all 200ms cubic-bezier(0.25, 0.25, 0.75, 0.75);
              -o-transition: all 200ms cubic-bezier(0.25, 0.25, 0.75, 0.75);
              transition: all 200ms cubic-bezier(0.25, 0.25, 0.75, 0.75); }
              .content #home .bloglist .socialFeedArea ul li .mainContentEffect:hover {
                opacity: .7; }
          .content #home .bloglist .socialFeedArea ul .feedBar {
            height: 45px;
            display: block;
            bottom: 0;
            position: absolute;
            background: url("../img/bar-bg-active.png") repeat;
            line-height: 45px; }
            .content #home .bloglist .socialFeedArea ul .feedBar:before {
              content: "";
              width: 29px;
              height: 25px;
              bottom: 6px;
              right: 3px;
              display: block;
              position: absolute;
              background-size: 80% !important; }
          .content #home .bloglist .socialFeedArea ul .facebook .feedBar:before {
            background: url("../img/media-icon-facebook.png") no-repeat; }
          .content #home .bloglist .socialFeedArea ul .blog .feedBar:before {
            background: url("../img/media-icon-blog.png") no-repeat; }
          .content #home .bloglist .socialFeedArea ul .twitter .feedBar:before {
            background: url("../img/media-icon-twitter.png") no-repeat; }
          .content #home .bloglist .socialFeedArea ul .instagram .feedBar:before {
            background: url("../img/media-icon-instagram.png") no-repeat; }
          .content #home .bloglist .socialFeedArea ul .video .play {
            bottom: 50%;
            left: 37%;
            position: absolute; }
          .content #home .bloglist .socialFeedArea ul .video .videoImage {
            background: black;
            padding-bottom: 100%; }
            .content #home .bloglist .socialFeedArea ul .video .videoImage img {
              width: 100% !important; }
          .content #home .bloglist .socialFeedArea ul .verticalImage a img {
            width: 100%; }
          .content #home .bloglist .socialFeedArea ul .horizontalImage a img {
            height: 100%; }
          .content #home .bloglist .socialFeedArea ul .small, .content #home .bloglist .socialFeedArea ul .smallBorder, .content #home .bloglist .socialFeedArea ul .big {
            word-wrap: break-word;
            background: url("../img/bar-bg-active.png") repeat;
            background-color: black; }
          .content #home .bloglist .socialFeedArea ul .small {
            width: 140px;
            height: 140px; }
            .content #home .bloglist .socialFeedArea ul .small .feedBar {
              width: 100%;
              padding-left: 10px; }
              .content #home .bloglist .socialFeedArea ul .small .feedBar:before {
                bottom: 6px;
                right: 8px; }
          .content #home .bloglist .socialFeedArea ul .smallBorder {
            width: 120px;
            height: 120px;
            padding: 10px; }
            .content #home .bloglist .socialFeedArea ul .smallBorder .feedBar {
              width: 100%; }
              .content #home .bloglist .socialFeedArea ul .smallBorder .feedBar:before {
                bottom: 6px;
                right: 8px; }
          .content #home .bloglist .socialFeedArea ul .big {
            width: 300px;
            height: 300px; }
            .content #home .bloglist .socialFeedArea ul .big a {
              display: block;
              text-align: center; }
            .content #home .bloglist .socialFeedArea ul .big .feedBar {
              width: 96.5%;
              padding-left: 3.5%; }
              .content #home .bloglist .socialFeedArea ul .big .feedBar a {
                text-align: left; }
  .content #store {
    width: 100%;
    /* Shop Sub Nav
    -------------------------*/
    /* Products List Area
    -------------------------*/ }
    .content #store .shopBar {
      float: left;
      width: 461px; }
      .content #store .shopBar div {
        float: left; }
        .content #store .shopBar div ul {
          margin: 0;
          padding: 0;
          width: 461px;
          height: 70px;
          list-style-type: none;
          background: url("../img/bar-bg-active.png") repeat; }
          .content #store .shopBar div ul li {
            float: left !important;
            text-align: center;
            line-height: 70px;
            vertical-align: middle; }
            .content #store .shopBar div ul li a {
              height: inherit;
              float: left !important;
              color: #ffffff;
              font-size: 13px;
              text-decoration: none; }
            .content #store .shopBar div ul li a:hover, .content #store .shopBar div ul li .active {
              background: url("../img/bar-bg-active.png") repeat; }
            .content #store .shopBar div ul li .productbb {
              width: 108px; }
            .content #store .shopBar div ul li .cartbb {
              width: 81px; }
            .content #store .shopBar div ul li .itemsbb {
              width: 145px; }
            .content #store .shopBar div ul li .checkoutbb {
              width: 124px;
              background: url("../img/bar-bg-active-red.png") repeat; }
      .content #store .shopBar .checkOutul {
        width: 124px;
        height: 70px;
        background: url("../img/bar-bg-active-red.png") repeat; }
        .content #store .shopBar .checkOutul .checkoutbb {
          width: 124px;
          height: 70px;
          float: left;
          color: #ffffff;
          font-size: 13px;
          line-height: 70px;
          text-align: center;
          text-decoration: none;
          vertical-align: middle; }
        .content #store .shopBar .checkOutul a:hover {
          background: url("../img/bar-bg-active-red.png") repeat; }
    .content #store .productsListMainArea {
      width: 100%;
      margin: 20px 0 0 0;
      float: left;
      /* Product Tree */
      /* Product Area */ }
      .content #store .productsListMainArea ul {
        padding: 0;
        margin: 0; }
      .content #store .productsListMainArea .productTree {
        font-size: 13px;
        text-transform: uppercase;
        color: white;
        font-weight: 100; }
        .content #store .productsListMainArea .productTree li, .content #store .productsListMainArea .productTree span {
          color: white;
          display: inline-block;
          list-style-type: none; }
          .content #store .productsListMainArea .productTree li a, .content #store .productsListMainArea .productTree span a {
            color: white;
            text-decoration: none; }
      .content #store .productsListMainArea .productsArea {
        margin: 20px 0 0 0;
        /* Single Product Page */
        /* End singleProductContainer */ }
        .content #store .productsListMainArea .productsArea .allProducts .oddItem {
          margin: 0 20px 0 0; }
        .content #store .productsListMainArea .productsArea .allProducts li {
          width: 380px;
          height: 380px;
          margin: 0 0 20px 0;
          float: left;
          background: white;
          list-style-type: none; }
          .content #store .productsListMainArea .productsArea .allProducts li .productInfo {
            width: inherit;
            height: inherit;
            position: relative; }
            .content #store .productsListMainArea .productsArea .allProducts li .productInfo .productMeta {
              position: absolute;
              bottom: 0;
              left: 0; }
              .content #store .productsListMainArea .productsArea .allProducts li .productInfo .productMeta .imgProduct {
                width: 380px;
                height: 380px;
                bottom: 0;
                z-index: 1;
                border: none;
                position: absolute; }
              .content #store .productsListMainArea .productsArea .allProducts li .productInfo .productMeta .imgProduct:hover {
                opacity: 0.8; }
              .content #store .productsListMainArea .productsArea .allProducts li .productInfo .productMeta div {
                z-index: 2;
                position: relative; }
              .content #store .productsListMainArea .productsArea .allProducts li .productInfo .productMeta .price {
                width: 137px;
                height: 72px;
                margin: 0 0 20px 0;
                float: right;
                color: #ffffff;
                font-size: 29px;
                line-height: 72px;
                text-align: center;
                background: url("../img/bar-bg-active-black.png") repeat; }
              .content #store .productsListMainArea .productsArea .allProducts li .productInfo .productMeta .productBottomBar {
                width: 380px;
                height: 45px; }
                .content #store .productsListMainArea .productsArea .allProducts li .productInfo .productMeta .productBottomBar span {
                  display: inline-block;
                  float: left; }
                .content #store .productsListMainArea .productsArea .allProducts li .productInfo .productMeta .productBottomBar .productName {
                  padding: 0 0 0 20px;
                  color: #ffffff;
                  line-height: 45px;
                  width: 315px;
                  height: inherit;
                  background: url("../img/bar-bg-active-black.png") repeat; }
                .content #store .productsListMainArea .productsArea .allProducts li .productInfo .productMeta .productBottomBar .productLink {
                  width: 45px;
                  height: inherit; }
                  .content #store .productsListMainArea .productsArea .allProducts li .productInfo .productMeta .productBottomBar .productLink a {
                    width: inherit;
                    height: inherit;
                    display: block;
                    background: #575757 url("../img/icon-eye-product.png") no-repeat center;
                    background-size: 55%; }
                  .content #store .productsListMainArea .productsArea .allProducts li .productInfo .productMeta .productBottomBar .productLink a:hover {
                    background: #841212 url("../img/icon-eye-product.png") no-repeat center;
                    background-size: 55%; }
        .content #store .productsListMainArea .productsArea .singleProductContainer {
          /* Product Info Single Page */ }
          .content #store .productsListMainArea .productsArea .singleProductContainer .singleProduct {
            float: left; }
            .content #store .productsListMainArea .productsArea .singleProductContainer .singleProduct .productBig {
              width: 461px;
              height: 461px;
              margin: 0 0 10px 0;
              background: #ffffff; }
              .content #store .productsListMainArea .productsArea .singleProductContainer .singleProduct .productBig li {
                width: inherit;
                height: inherit; }
                .content #store .productsListMainArea .productsArea .singleProductContainer .singleProduct .productBig li a {
                  width: inherit;
                  height: inherit; }
                  .content #store .productsListMainArea .productsArea .singleProductContainer .singleProduct .productBig li a img {
                    width: inherit;
                    height: inherit; }
            .content #store .productsListMainArea .productsArea .singleProductContainer .singleProduct .productSmall {
              margin: 0 0 20px 0; }
              .content #store .productsListMainArea .productsArea .singleProductContainer .singleProduct .productSmall .allbutlast {
                margin: 0 9px 0 0; }
              .content #store .productsListMainArea .productsArea .singleProductContainer .singleProduct .productSmall li {
                display: inline-block; }
                .content #store .productsListMainArea .productsArea .singleProductContainer .singleProduct .productSmall li a img {
                  width: 60px;
                  height: 60px; }
          .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage {
            width: 300px;
            float: right;
            background: url("../img/bar-bg-active.png") repeat; }
            .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage .infoContainer {
              color: #ffffff;
              padding: 20px; }
              .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage .infoContainer .productTitle {
                padding: 0;
                margin: 0 0 10px 0;
                font-size: 24px; }
              .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage .infoContainer .line {
                width: 40%;
                height: 0;
                padding: 0;
                display: block;
                list-style: none;
                border-top: 1px solid;
                border-top-color: #858585; }
              .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage .infoContainer .productPrice {
                width: inherit;
                margin: 35px 0 35px 33px;
                display: block;
                font-size: 29px; }
              .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage .infoContainer .info {
                font-size: 13px; }
              .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage .infoContainer ul {
                margin: 20px 0 0 0; }
                .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage .infoContainer ul li {
                  margin: 0 0px 0 0;
                  display: inline-block; }
                  .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage .infoContainer ul li p {
                    margin: 0 0 15px 0;
                    padding: 0;
                    font-size: 13px; }
                  .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage .infoContainer ul li .size {
                    width: 175px;
                    height: 35px;
                    margin: 0 20px 0 0;
                    padding: 0 14px;
                    display: block;
                    font-size: 13px; }
                    .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage .infoContainer ul li .size option {
                      font-size: 13px; }
                  .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage .infoContainer ul li .qty {
                    width: 60px;
                    height: 35px;
                    padding: 0 0 0 16px;
                    display: block;
                    font-size: 13px; }
              .content #store .productsListMainArea .productsArea .singleProductContainer .productInfoSinglePage .infoContainer .addCartSpace .addToCart {
                width: 120px;
                height: 45px;
                margin: 32px 0 0 0;
                display: block;
                line-height: 45px;
                background: #841212;
                text-align: center; }
  .content #shows {
    width: 200%;
    padding: 0 0 20px 0;
    overflow-x: hidden; }
    .content #shows .showlist {
      width: 50%;
      float: left;
      margin: 0;
      padding: 0; }
      .content #shows .showlist li {
        margin: 0 0 23px 0;
        color: white;
        list-style-type: none; }
        .content #shows .showlist li div {
          padding: 0;
          margin: 0;
          vertical-align: top;
          display: inline-block; }
        .content #shows .showlist li .date {
          width: 140px;
          height: 140px;
          line-height: 30px;
          position: relative;
          text-align: center;
          vertical-align: middle;
          background: url("../img/bar-bg-active-green.png") repeat; }
          .content #shows .showlist li .date .dateContainer {
            padding: 30px 0 0 0; }
          .content #shows .showlist li .date .month {
            font-size: 34.46px; }
          .content #shows .showlist li .date .day {
            font-size: 59.6px; }
        .content #shows .showlist li .place {
          width: 615px;
          height: 140px;
          margin: 0 0 0 20px;
          background: url("../img/bar-bg-active.png") repeat;
          /* HOVER ON */ }
          .content #shows .showlist li .place .namePlace {
            font-size: 29px;
            margin: 0 0 0 30px;
            line-height: 135px; }
          .content #shows .showlist li .place .button {
            width: 140px;
            height: 140px;
            float: right;
            cursor: pointer;
            overflow: hidden;
            text-align: center;
            background: url("../img/bar-bg-active.png") repeat; }
            .content #shows .showlist li .place .button img {
              padding: 24% 0; }
          .content #shows .showlist li .place .namePlace:hover ~ .button a, .content #shows .showlist li .place .button:hover a {
            margin: 0 0 0 -85px;
            transition: all 0.1s ease-in-out;
            -webkit-animation-name: fordward;
            -webkit-animation-duration: 0.3s;
            -webkit-animation-iteration-count: 1;
            -webkit-animation-delay: 0.0s;
            -webkit-animation-direction: alternate;
            -webkit-transition: all 0.1s ease-in-out;
            -moz-animation-name: fordward;
            -moz-animation-duration: 0.3s;
            -moz-animation-iteration-count: 1;
            -moz-animation-delay: 0.0s;
            -moz-animation-direction: alternate;
            -moz-transition: all 0.1s ease-in-out;
            -o-animation-name: fordward;
            -o-animation-duration: 0.3s;
            -o-animation-iteration-count: 1;
            -o-animation-delay: 0.0s;
            -o-animation-direction: alternate;
            -o-transition: all 0.1s ease-in-out; }
  .content #subscribe {
    width: 421px;
    padding: 20px;
    color: #efefef;
    background: url("../img/bar-bg-active.png") repeat; }
    .content #subscribe .rssTitle {
      font-size: 25px; }
    .content #subscribe .rssSubTitle {
      display: block;
      margin: 10px 0 0 0;
      font-size: 17px; }
    .content #subscribe .rssText {
      display: block;
      font-size: 13px;
      margin: 10px 0 10px 0; }
      .content #subscribe .rssText a:hover {
        color: #dc8d40; }
    .content #subscribe .rssSubscribe {
      margin: 15px 0 0 0;
      font-size: 16px; }
    .content #subscribe .socialIconsButtons {
      margin: 10px 0 0 0;
      padding: 0;
      text-align: left;
      list-style-type: none; }
      .content #subscribe .socialIconsButtons li {
        margin: 0;
        display: inline-block; }
        .content #subscribe .socialIconsButtons li a {
          display: block;
          width: 49px;
          height: 45px;
          outline: none;
          float: left;
          vertical-align: middle;
          text-indent: -9999em; }
      .content #subscribe .socialIconsButtons .facebook {
        background: url(../img/media-icon-facebook.png) center no-repeat; }
      .content #subscribe .socialIconsButtons .twitter {
        background: url(../img/media-icon-twitter.png) center no-repeat; }
      .content #subscribe .socialIconsButtons .instagram {
        background: url(../img/media-icon-instagram.png) center no-repeat; }
  .content #about {
    width: 100%; }
  .content #about, .content #blogsingle, .content #showsingle {
    background: url("../img/bar-bg-active.png") repeat; }
    .content #about .aboutContainer, .content #blogsingle .aboutContainer, .content #showsingle .aboutContainer {
      width: 95%;
      padding: 2.5%;
      color: #ffffff; }
      .content #about .aboutContainer .aboutTitle, .content #blogsingle .aboutContainer .aboutTitle, .content #showsingle .aboutContainer .aboutTitle {
        font-size: 29px;
        margin: 0 0 15px 0;
        padding: 25px 0 0 0; }
      .content #about .aboutContainer .aboutImage, .content #blogsingle .aboutContainer .aboutImage, .content #showsingle .aboutContainer .aboutImage {
        width: 740px;
        height: 358px;
        margin: 20px 0;
        background: #366c9a; }
      .content #about .aboutContainer .aboutText, .content #blogsingle .aboutContainer .aboutText, .content #showsingle .aboutContainer .aboutText {
        width: 100%;
        padding: 2.5% 0 2.5% 0;
        font-size: 13px;
        line-height: 23px; }
        .content #about .aboutContainer .aboutText div, .content #blogsingle .aboutContainer .aboutText div, .content #showsingle .aboutContainer .aboutText div {
          display: inline-block; }
        .content #about .aboutContainer .aboutText a, .content #blogsingle .aboutContainer .aboutText a, .content #showsingle .aboutContainer .aboutText a {
          text-decoration: underline; }
        .content #about .aboutContainer .aboutText .columText, .content #blogsingle .aboutContainer .aboutText .columText, .content #showsingle .aboutContainer .aboutText .columText {
          width: 47.5%;
          padding: 0 2.5% 0 0;
          float: left; }
          .content #about .aboutContainer .aboutText .columText a, .content #blogsingle .aboutContainer .aboutText .columText a, .content #showsingle .aboutContainer .aboutText .columText a {
            text-decoration: none !important; }
  .content #blogsingle,
  .content #showsingle {
    width: 50%;
    float: left;
    margin: 0;
    padding: 0; }
    .content #blogsingle .back,
    .content #showsingle .back {
      color: #ccc;
      line-height: 45px;
      padding: 10px 15px 10px 15px;
      background: url("../img/bar-bg-active-green.png") repeat; }
      .content #blogsingle .back:hover,
      .content #showsingle .back:hover {
        background: url("../img/bar-bg-active-black.png") repeat; }
  .content #blogsingle, .content .bloglist,
  .content #showsingle, .content .showlist,
  .content .back {
    /* ease-out */
    -webkit-transition: all 300ms cubic-bezier(0, 0, 0.58, 1);
    -moz-transition: all 300ms cubic-bezier(0, 0, 0.58, 1);
    -ms-transition: all 300ms cubic-bezier(0, 0, 0.58, 1);
    -o-transition: all 300ms cubic-bezier(0, 0, 0.58, 1);
    transition: all 300ms cubic-bezier(0, 0, 0.58, 1); }

/* =============================================================================
	Isotope
   ========================================================================== */
/**** Isotope Filtering ****/
.isotope-item {
  z-index: 2; }

.isotope-hidden.isotope-item {
  pointer-events: none;
  z-index: 1; }

/**** Isotope CSS3 transitions ****/
.isotope,
.isotope .isotope-item {
  -webkit-transition-duration: 0.8s;
  -moz-transition-duration: 0.8s;
  -ms-transition-duration: 0.8s;
  -o-transition-duration: 0.8s;
  transition-duration: 0.8s; }

.isotope {
  -webkit-transition-property: height, width;
  -moz-transition-property: height, width;
  -ms-transition-property: height, width;
  -o-transition-property: height, width;
  transition-property: height, width; }

.isotope .isotope-item {
  -webkit-transition-property: -webkit-transform, opacity;
  -moz-transition-property: -moz-transform, opacity;
  -ms-transition-property: -ms-transform, opacity;
  -o-transition-property: -o-transform, opacity;
  transition-property: transform, opacity; }

/**** disabling Isotope CSS3 transitions ****/
.isotope.no-transition,
.isotope.no-transition .isotope-item,
.isotope .isotope-item.no-transition {
  -webkit-transition-duration: 0s;
  -moz-transition-duration: 0s;
  -ms-transition-duration: 0s;
  -o-transition-duration: 0s;
  transition-duration: 0s; }
