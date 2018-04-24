<?php
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  public function __construct($arguments){
    $this->subulclasses = $arguments['subulclasses'];
  }
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"$this->subulclasses\">\n";
  }
}
?>
