<?php

/**
 * DefaultController
 *
 * Default controller of ExifBundle
 *
 * @package		PdfBundle
 * @subpackage	Controller
 * @name        DefaultController
 *
 * @author		Can Berkol
 *
 * @copyright   Biber Ltd. (www.biberltd.com)
 *
 * @version     1.0.0
 *
 */

namespace BiberLtd\Bundle\PdfBundle\Controller;

use BiberLtd\Bundle\CoreBundle\CoreController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Symfony\Component\HttpKernel\Exception,
    Symfony\Component\HttpFoundation\Response,
    Symfony\Component\HttpFoundation\RedirectResponse,
    Symfony\Component\HttpFoundation\Request;

class DefaultController extends CoreController {

    public function testAction(){
        $pdf = $this->get('biberltd.pdf');
        $this->debugClass($pdf->getImport()->importPDF('/tmp/pdf-sample.pdf'));
        echo 'allrayt'; die;
    }
}
