<?php
/**
 * PHP Version 7.2
 * Mnt
 *
 * @category Controller
 * @package  Controllers\Mnt
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 *           Colaboración con alumna: Andrea Nicold Aleman Quinto <an_alemanq@unicah.edu>
 * @license  Comercial http://
 * @version  CVS:1.0.0
 * @link     http://url.com
 */
 namespace Controllers\Mnt;

// ---------------------------------------------------------------
// Sección de imports
// ---------------------------------------------------------------
use Controllers\PublicController;
use Dao\Mnt\Pianos as DaoPianos;
use Views\Renderer;

/**
 * Pianos
 *
 * @category Public
 * @package  Controllers\Mnt;
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 *           Colaboración con alumna: Andrea Nicold Aleman Quinto <an_alemanq@unicah.edu>
 * @license  MIT http://
 * @link     http://
 */
class Pianos extends PublicController
{
    /**
     * Runs the controller
     *
     * @return void
     */
    public function run():void
    {
        // code
        $viewData = array();
        $viewData["Pianos"] = DaoPianos::getAll();
        error_log(json_encode($viewData));
      
        Renderer::render('mnt/pianos', $viewData); 
    }
}

?>