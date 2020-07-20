<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Cart;
use App\Order;

use PDF;
class InvoiceController extends Controller
{

    public function store(Request $request,$id ,$quantity)
    {
        $order = Book::find($id);


            $view = \View::make('invoice.index',['order'=>$order,'qty'=>$quantity] );
            $html_content = $view->render();
            PDF::SetTitle("Invoice");
            PDF::AddPage();
            PDF::SetFont('aealarabiya', '', 18);
            PDF::Image('images/student.png', '', '', 40, 40, '', '', 'T', false, 300, '', false, false, 1, false, false, false);


            PDF::writeHTML($html_content, true, false, true, false, '');
            // D is the change of these two functions. Including D parameter will avoid
            // loading PDF in browser and allows downloading directly
            PDF::Output('invoice.pdf', 'D');


    }

}
