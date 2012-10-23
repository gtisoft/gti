<?php
class ControlIndex {
  
  var $menu;
  var $contenido;

  function set_url_contenido($pagina) {
    $this->contenido=$pagina;
  }

  function set_menu_actual($menuactual) {
    $this->menu=$menuactual;
  }

  function index() {
    $this->a_vista("");
  }
}
?>