<?php
namespace Drupal\at_autoload;

class CustomMapping {
  /**
   * Rebuild custom mappings defined by modules.
   * @return array
   */
  public function rebuild() {
    $mapping = array();
    foreach (system_list('module_enabled') as $module_name => $project) {
      if (!empty($project->info['psr4'])) {
        foreach ($project->info['psr4'] as $ns_prefix => $dir) {
          $dir = drupal_get_path('module', $module_name) . '/' . $dir;
          $mapping[$ns_prefix] = $dir;
        }
      }
    }

    if (!empty($mapping)) {
      variable_set('at_autoload_mapping', $mapping);
    }

    return $mapping;
  }
}
