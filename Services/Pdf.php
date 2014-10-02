<?php
namespace BiberLtd\Bundle\PdfBundle\Services;

class Pdf{
    /**
     * @name            indexAction ()
     *                  DOMAIN/{_locale}/pdf
     *
     * @author          Said İmamoğlu
     * @since           1.0.0
     * @version         1.0.0
     *
     * @return          \Symfony\Component\HttpFoundation\Response
     */
    public $tcpdf;

    /**
     * @name            __construct ()
     *
     * @author          Said İmamoğlu
     * @since           1.0.0
     * @version         1.0.0
     *
     */
    public function __construct()
    {
        require_once(realpath(dirname(__FILE__)) . '/../src/tcpdf.php');
        $this->tcpdf = new \TCPDF();
    }

    /**
     * @name            getBarcode1d ()
     *
     * @author          Said İmamoğlu
     * @since           1.0.0
     * @version         1.0.0
     *
     * @param           $code
     * @param           $type
     *
     * @return          \TCPDFBarcode
     */
    public function getBarcode1d($code, $type)
    {
        require_once(realpath(dirname(__FILE__)) . '/../src/tcpdf_barcodes_1d.php');
        return new \TCPDFBarcode($code, $type);
    }

    /**
     * @name            getBarcode2d ()
     *
     * @author          Said İmamoğlu
     * @since           1.0.0
     * @version         1.0.0
     *
     * @param           $code
     * @param           $type
     *
     * @return          \TCPDF2DBarcode
     */
    public function getBarcode2d($code, $type)
    {
        require_once(realpath(dirname(__FILE__)) . '/../src/tcpdf_barcodes_2d.php');
        return new \TCPDF2DBarcode($code, $type);
    }

    /**
     * @name            getImport ()
     *
     * @author          Said İmamoğlu
     * @since           1.0.0
     * @version         1.0.0
     *
     * @return          \TCPDF_IMPORT
     */
    public function getImport()
    {
        require_once(realpath(dirname(__FILE__)) . '/../src/tcpdf_import.php');
        return new \TCPDF_IMPORT();
    }

    /**
     * @name            getParser ()
     *
     * @author          Said İmamoğlu
     * @since           1.0.0
     * @version         1.0.0
     *
     * @param           $data
     * @param           $cfg
     *
     * @return          \TCPDF_PARSER
     */
    public function getParser($data, $cfg = array())
    {
        require_once(realpath(dirname(__FILE__)) . '/../src/tcpdf_parser.php');
        return new \TCPDF_PARSER($data, $cfg);
    }

    /**
     * @name            getPreviewImage ()
     *
     * @author          Can Berkol
     * @author          Said İmamoğlu
     * @since           1.0.2
     * @version         1.0.2
     *
     * @uses     \Imagick
     *
     * @param    string         $path Source file path
     * @param    string         $to Target file path
     * @param    int        $page Which page will be captured
     *
     * @return  string  $savePath   Path of target file.
     */
    public function getPreviewImage($path, $to, $page = 0){
        $im = new \Imagick($path . '[' . $page . ']');
        $im->setImageFormat('jpg');

        $im->writeimage($to);
        return $to;
    }

}

/**
 * Change Log:
 * **************************************
 * v1.0.2                      Can Berkol
 * **************************************
 * U getPreviewImage()
 *
 * **************************************
 * v1.0.1                   Said Imamoglu
 * **************************************
 * A getPreviewImage()
 *
 * **************************************
 * v1.0.0                      Can Berkol
 * **************************************
 * A __construct()
 * A getBarcode1d()
 * A getBarcode2d()
 * A getImport()
 * A getParser()
 *
 */
