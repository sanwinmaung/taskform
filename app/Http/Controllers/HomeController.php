<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class HomeController extends Controller
{
	public function portfolio()
	{
		return view('portfolio');
	}

	public function getDownload(){
		$file = public_path() . "/cv/sanwinmaung-cv.pdf";
		$headers = array(
			'Content-Type: application/pdf',
		);
		return Response::download($file, 'filename.pdf', $headers);
	}
}
