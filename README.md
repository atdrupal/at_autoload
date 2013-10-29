at_autoload
===========

[![Build Status](https://secure.travis-ci.org/andytruong/at_autoload.png?branch=7.x-1.x)](http://travis-ci.org/andytruong/at_autoload)

Support PSR-4 autloading for Drupal 7 modules.

Module that defines dependencies[] = at_base in info file,can autoload the classes:

````
/path/to/module/lib/Class.php -> \Drupal\module_name\Class
/path/to/module/lib/Controller/PageX.php -> \Drupal\module_name\Controller\PageX
````
