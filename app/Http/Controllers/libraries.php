<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class libraries extends Controller
{
    public function searchadvertiser(Request $request)
    {
        $output = "";
      //  if($request->ajax()) {

            if(is_numeric($request->search))
            {
                $advertisers = DB::table('advertiser')->WhereRaw("advertiserid::TEXT ILIKE '%". $request->search ."%'")->get();
            }
            else
            {
                $advertisers = DB::table('advertiser')->Where('advertisername', 'ILIKE', '%' . $request->search . "%")->get();
            }

            if ($advertisers) {
                $output = '<ul class="list-group">';
                foreach ($advertisers as $key => $product) {
                    $output .= '<li class="list-group-item">' .
                        $product->advertiserid .'. '.$product->advertisername.
                        '</li>';
                }
                $output .= '</ul>';
            }
      //  }
        return Response($output);
    }
}
