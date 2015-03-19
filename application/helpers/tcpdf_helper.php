<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function tcpdf()
{
    require_once('tcpdf/tcpdf.php');
}

function tcpdf_custom_header_footer()
{
    require_once('tcpdf/tcpdf.php');

	class MYPDF extends TCPDF {

	    //Page header
	    public function Header() {
	        // Logo
	        $image_file = K_PATH_IMAGES.'logo_example.jpg';
	        $this->Image($image_file, 10, 10, 15, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
	        // Set font
	        $this->SetFont('helvetica', 'B', 20);
	        // Title
	        $this->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
	    }

	    // Page footer
	    public function Footer() {
	        $image_file = base_url().'assets/images/Bricktix_Logo.png';
	        // $image_file = K_PATH_IMAGES.'logo_example.jpg';
	        $this->Image($image_file, 118, 278, 80, 10, 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
	        // Position at 15 mm from bottom
	        $this->SetY(-15);

	        $this->writeHTMLCell(0, 0, 10, 265, '______________________________________________________________________________');
	        $this->writeHTMLCell(0, 0, 60, 273, 'Want Hassle-Free ticketing?');
	        $this->writeHTMLCell(0, 0, 33.5, 278, 'Build your next event on a solid foundation');
	        $this->writeHTMLCell(0, 0, 80.5, 284, 'www.bricktix.com');
	        $this->writeHTMLCell(0, 0, 77.5, 288, 'hello@bricktix.com');
	    }
	}
}
?>