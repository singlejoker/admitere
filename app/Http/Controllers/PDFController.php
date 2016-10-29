<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PDF;
use App\Customer;
class PDFController extends Controller
{
public function getPDF(){
    $customers=  Customer::all();
    $pdf=PDF::loadView('pdf.customer',['customers'=>$customers]);
    return $pdf->stream('customer.pdf');
}
}
