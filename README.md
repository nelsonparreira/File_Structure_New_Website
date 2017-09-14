# File_Structure_New_Website

This project will contain the file structure to start a new project.

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


# File Struture
<pre>
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
</pre>

# DATABASE

How to use the token.

1) Check if you have "include_once 'core/controlers/db.controler.php';"
2) on the file you setup the form, first run the PHP code:
      2.1 set the token value
        ```
          tokenSet()
        ```
      2.2 see if exists
        ```
          if( tokenExists() ){
          }  
        ```

3) And don't forget to put the hidden input on your form.
  ```
    <input type="hidden" name="_token" value="<?php echo $_SESSION['_token']; ?>" >
  ```

4) to see the "_token" value:
  ```
  echo "{$_SESSION['_token']}";

  ```
