<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\ProductInspections;

class UiActionController extends Controller
{
    // Book the time for physical inspection
    public function updateinspections(Request $request, $id)
    {
        $inspection = ProductInspections::find($id);

        if($inspection) {
           $inspection->product_id = $request->product_id;
           $inspection->inspection_status = $request->inspection_status;
           $inspection->buyer_id = $request->buyer_id;
           $inspection->save();

           activity('Product Inspection Time Slot Updated')->performedOn($inspection)->log('Product inspection time slot has been booked - Website Activity By User');
        }

        return Redirect::back()->with('message', 'You have successfully booked a time slot for physical inspection.')->with('class', 'alert-info');
    }

    // Palce a bid for the product
    public function placebid(Request $request, $id)
    {
        $this->validate($request, [
            'bid_price' => 'required',
            'product_id' => 'required',
            'buyer_id' => 'required'
        ]);

        $productbid = ProductBids::find($id);

        if($productbid) {
            $productbid = new ProductBids();
            $productbid->bid_price = $request->bid_price;
            $productbid->product_id = $request->product_id;
            $productbid->buyer_id = $request->buyer_id;
            $category->save();

            activity('Product Bid Price Updated')->performedOn($productbid)->log('Product bid price has been updated - Dashboard Activity');
        }

        return Redirect::back()->with('message', 'You have succesfully palce a bid for this product.')->with('class', 'alert-info');
    }
}
