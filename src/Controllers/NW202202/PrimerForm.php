<?php
namespace Controllers\NW202202;

use Controllers\PublicController;
use Views\Renderer;

class PrimerForm extends PublicController
{
    public function run() :void
    {
        $viewData = array();
        $viewData["txtNombre"] = "Andrea";
        $viewData["txtApellido"] = "Quinto";
        if (isset($_POST["btnEnviar"])) {
            $viewData["txtNombre"] = $_POST["nombre"];
        }
        if ($this->isPostBack()) {
            $viewData["txtApellido"] = $_POST["apellido"];
        }
        Renderer::render('nw202202/primerform', $viewData); //Esta es la parte de renderización de la View en templates
    }
}
?>
