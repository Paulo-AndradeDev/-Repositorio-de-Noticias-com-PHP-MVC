<?php 

use App\core\Controller;
use Dompdf\Dompdf;

class Pdf extends Controller
{

	public function Index() {

		// instantiate and use the dompdf class
		$dompdf = new Dompdf();
		$dompdf->loadHtml('<h1>hello world</h1><hr>');

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream("Arquivo", ["Attachment"=>false]); // param 1 = no do aquivo; 2= download ou exibir no navegador (attachment)

		$this->view('pdf/index'); 
	}


	
}

?>