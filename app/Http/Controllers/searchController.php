<?php

namespace App\Http\Controllers;


use App\Models\record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class searchController extends Controller
{
    public function pokaz(Request $request){

        $tytul= $request->title;
        $opis = $request->description;
        $daty = $request->created_at;



            if (isset($daty)) {
                $wynik = DB::table('records')->where('description', 'RLIKE', $opis)
                    ->where('title', 'RLIKE', $tytul)->where('created_at', $daty)->get();
            } else {
                $wynik = DB::table('records')->where('description', 'RLIKE', $opis)
                    ->where('title', 'RLIKE', $tytul)->get();
            }



        return view('szukaj',['wynik'=>$wynik]);
    }
}
