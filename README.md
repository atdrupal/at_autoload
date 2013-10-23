at_autoload
===========

Support PSR-4 autloading for Drupal 7 modules.

Module which implements hook_go_api() can autoload the classes:

````
/path/to/module/lib/Class.php -> \Drupal\module_name\Class
/path/to/module/lib/Controller/PageX.php -> \Drupal\module_name\Controller\PageX
````
