<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CVController extends Controller
{
    public function index()
    {
            $data = [
               "title"  => "@Dev Adams CV",
               "date" => date("m/d/y"),
            ];

            $pdf = Pdf::loadView('livewire.pdf.cv', $data);
            return $pdf->download('invoice.pdf');
    }
}
