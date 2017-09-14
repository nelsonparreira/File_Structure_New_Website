<h3 align="center">File Structure for a New Website</h3>

## Table of content

- [Description](#Description)
- [Quick start](#Quick-start)
- [File Struture](#File-Struture)
- [Dependencies](#Dependencies)
- [Versioning](#versioning)
- [Creators](#creators)
- [Copyright and license](#copyright-and-license)


## Description

This project will contain the file structure to start a new project.

## Dependencies
Version 3.3.7
<a href="https://getbootstrap.com">
    <img src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" width=36 height=36>
</a>

## Quick start

You need to delete the "index.xxx and index-xxxx.xxx" files that you will not need, keeping only one.

1) index.html  
   - Basic HTML file

2) index.php
   - Basic php file

3) index-boot.html
   - HTML based on the Bootstrap 3.3.7 framework.

4) index-boot-inc.php
   - HTML based on the Bootstrap 3.3.7 framework.

5) index-boot-inc.php
  - HTML based on the Bootstrap 3.3.7 framework.
  - The structure of this file in splited between the files:
      - /core/includes/header.php
      - /core/includes/footer.php

  - Bootstrap necessary code is on:
    - /css/
    - /js/


## File Struture
```
root/
├── Public/
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
│    │    ├── logo/
│    │    └── icons/
│    │
│    ├── core/
│    │    ├── functions.php
│    │    │
│    │    ├── includes/
│    │    │   ├── header.inc.php
│    │    │   ├── nav.inc.php
│    │    │   └──  footer.inc.php
│    │    ├── libraries/
│    │    │   ├── <thirth part libraries>
│    │    ├── controlers/
│    │    │   ├── security.controler.php
│    │    │   └── db.controler.php
│    │    └── errors/
│    │        └── 404.php
│    └── admin/
│         ├── .htaccess
│         │
│         ├── includes/
│         │   ├── header.admin.php
│         │   ├── nav.admin.php
│         │   └── footer.admin.php
├── Production/
├── Design/
└──  ?? Assets ??/
```

# DATABASE

How to use the token.

1. Check if you have "include_once 'core/controlers/db.controler.php';"
2. On the file you setup the form, first set the token value:
        ```
          tokenSet()
        ```
3. see if exists
        ```
          if( tokenExists() ){
          }  
        ```
4. And don't forget to put the hidden input on your form.
  ```
    <input type="hidden" name="_token" value="<?php echo $_SESSION['_token']; ?>" >
  ```
5. to see the "_token" value:
  ```
  echo "{$_SESSION['_token']}";

  ```



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

  Code and documentation copyright 2017 the [File Structure for a New Website Author](https://github.com/nelsonparreira/File_Structure_New_Website) Code released under the [MIT License](https://github.com/nelsonparreira/File_Structure_New_Website/blob/master/LICENSE. Docs released under [Creative Commons](https://github.com/nelsonparreira/File_Structure_New_Website/blob/master/docs/LICENSE_CC).
