<h3 align="center">SETUP</h3>

## Table of content

- [Development](#Development)
- [Production](#Production)


## Development

- Changes to make on the ini.php file

1. display_errors = ON
2. it also defined us ON on the "/core/includes/header.ini.php"

## Production

- Changes to make on the ini.php file

1. display_errors = Off
2. if you can't turn it off do this on the "/core/includes/header.ini.php" file:
  ```
    ini_set('display_errors', Off);
    or
    error_reporting(0);
  ```
3. log_errors = On
