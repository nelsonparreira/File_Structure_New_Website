<h3 align="center">File Structure for a New Website</h3>

## Table of content

- [Description](#Description)
- [Quick start](#Quick-start)
- [File Struture](#File-Struture)
- [Dependencies](#Dependencies)
- [Versioning](#versioning)
- [Inspiring](#Inspiring)
- [Creators](#creators)
- [Copyright and license](#copyright-and-license)


## Description

This project will contain the file structure to start a new project.

## Dependencies
<a href="https://getbootstrap.com">
    <img src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" width=36 height=36>
Bootstrap  - Version 3.3.7</a>

## Quick start

1. Choose the index file you want to use:
  - index.html          -> Basic HTML file
  - index.php           -> Basic php file
  - index-boot.html     -> HTML based on the Bootstrap 3.3.7 framework.
  - index-boot-inc.php  -> HTML based on the Bootstrap 3.3.7 framework.

2. On  the file "/core/includes/header.ini.php" change or delete the initial php code:
  - Development= On (default)
  - Production = Off



## File Struture
```
root/
├── public_html/
│    ├── .htaccess
│    ├── index.php
│    ├── assets/
│    │    ├── css/
│    │    │   ├── styles.css
│    │    │   ├── bootstrap.css
│    │    │   ├── bootstrap.css.map
│    │    │   ├── bootstrap.min.css
│    │    │   ├── bootstrap.min.css.map
│    │    │   ├── bootstrap-theme.css
│    │    │   ├── bootstrap-theme.css.map
│    │    │   ├── bootstrap-theme.min.css
│    │    │   └── bootstrap-theme.min.css.map
│    │    ├── js/
│    │    │   ├── script.js
│    │    │   ├── bootstrap.js
│    │    │   └── bootstrap.min.js
│    │    ├── fonts/
│    │    │    ├── glyphicons-halflings-regular.eot
│    │    │    ├── glyphicons-halflings-regular.svg
│    │    │    ├── glyphicons-halflings-regular.ttf
│    │    │    ├── glyphicons-halflings-regular.woff
│    │    │    └── glyphicons-halflings-regular.woff2
│    │    │    └── images/
│    │    └── images/
│    │        ├── layout/
│    │        └── content/
│    │            └── carousel/
│    │
│    ├── resources/
│    │    │
│    │    ├── includes/
│    │    │   ├── config.inc.php
│    │    │   └── init.inc.php
│    │    │
│    │    ├── templates/
│    │    │   ├── header.temp.php
│    │    │   ├── nav.temp.php
│    │    │   └── footer.temp.php
│    │    │
│    │    ├── libraries/
│    │    │   └── <thirth party libraries>
│    │    │
│    │    ├── controlers/
│    │    │   ├── email/
│    │    │   │   └── email.controler.php
│    │    │   ├── db/
│    │    │   │   └── db.controler.php
│    │    │   └── security/
│    │    │       └── security.controler.php
│    │    │
│    │    ├── functions/
│    │    │   └── functions.php
│    │    └── errors/
│    │        └── 404.php
│    │ 
│    └── admin/
│         │
│         ├── includes/
│         │   ├── header.admin.php
│         │   ├── nav.admin.php
│         │   └── footer.admin.php
├── Production/
├── Design/
└── Assets/
```

# DATABASE

How to use the token.

1. Check if you have "include_once 'core/controlers/db.controler.php';"
2. On the file you setup the form, first set the token value:
        
        - tokenSet()
        
3. see if exists
        
        - if( tokenExists() ){
          }  
        
4. And don't forget to put the hidden input on your form.
  
        - <input type="hidden" name="_token" value="<?php echo $_SESSION['_token']; ?>" >
 
5. to see the "_token" value:
        - echo "{$_SESSION['_token']}";


## Inspiring

  Links to inspired stuff(Assets) we can use on a project:

    BOOTSTRAP
      Headers
        - <a href="https://tutorialzine.com/2016/09/freebie-5-beautiful-bootstrap-headers">
          5 Beautiful Bootstrap Headers
        </a> 

      Footers
        - <a href="https://tutorialzine.com/2016/10/freebie-5-fantastic-bootstrap-footers">
        5 Fantastic Bootstrap Footers</a>

        - <a href="https://demo.tutorialzine.com/2015/01/freebie-5-responsive-footer-templates/index.html">
        5 Responsive Footer Templates</a>

      Carousel

        - <a href="https://codepen.io/andrearufo/pen/rVWpyE">
          Bootstrap default carousel with swipe and touch gestures</a>

      Forms
        - <a href="https://demo.tutorialzine.com/2016/11/freebie-3-elegant-bootstrap-forms/">
        Elegant Bootstrap Forms</a>

      Gallerys
        - <a href="https://tutorialzine.com/2017/02/freebie-4-bootstrap-galleries">
          4 Bootstrap Gallery Templates</a>
      E-commerce
        - <a href="https://tutorialzine.com/2014/04/responsive-shopping-cart-layout-twitter-bootstrap-3">
        Responsive Shopping Cart</a>
    
    ICONS
      - <a href="http://themes-pixeden.com/font-demos/7-stroke/index.html">
        icon font packicon font packicon font pack</a>

      - <a href="https://linearicons.com/free">
        Linearicons</a>

    FONTS

    CAROUSELS
      - <a href="https://flickity.metafizzy.co/">
        Flickity - Touch, responsive, flickable carousels</a>


## Logos
  
  <a href="https://globalspex.com/logo-dimensions/">Standard Logo Dimensions</a>
  
  Dimensions used on this project: 
    - Favicon 16px X 16px
    - Logo: 
        .Horizontal: 250px X 150px
        .Square: 160px X 160px

    



## Versioning

  For transparency into our release cycle and in striving to maintain backward compatibility, File Structure for a New Website is maintained under [the Semantic Versioning guidelines](http://semver.org/). Sometimes we screw up, but we'll adhere to those rules whenever possible.

  <p align=center>  
    <h4 align=center>Given a version number MAJOR.MINOR.PATCH, increment the:</h4>

    MAJOR version when you make incompatible API changes,
    MINOR version when you add functionality in a backwards-compatible manner, and
    PATCH version when you make backwards-compatible bug fixes.
    Additional labels for pre-release and build metadata are available as extensions to the MAJOR.MINOR.PATCH format.
  </p>




## Creators

  **Nelson Parreira**

  - <https://github.com/nelsonparreira>



## Copyright and license

  Code and documentation copyright 2017 the [File Structure for a New Website Author](https://github.com/nelsonparreira/File_Structure_New_Website) Code released under the [MIT License](https://github.com/nelsonparreira/File_Structure_New_Website/blob/master/LICENSE). Docs released under [Creative Commons](https://github.com/nelsonparreira/File_Structure_New_Website/blob/master/docs/LICENSE_CC).
