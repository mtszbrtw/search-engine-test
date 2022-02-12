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



        return view('szukaj',['wyniki'=>$wynik]);
    }

    public function dodaj(Request $request){

        $title = $request->title;
        $description = $request->description;
        $dat = $request->created_at;

        DB::table('records')->insert(array('title'=>$title,'description'=>$description,'created_at'=>$dat));
        return redirect()->route('glowna')->with('message','rekord został dodany');
    }

    public function edytuj_pokaz($id){

    $record =  DB::table('records')->find($id);

    return view('edytuj',['record'=>$record]);



    }

    public function edytuj_edytuj(Request $request,$id){

        $title = $request->title;
        $description = $request->description;
        $dat = $request->created_at;

        DB::table('records')->where('id',$id)->update(['title'=>$title,'description'=>$description,'created_at'=>$dat]);

      return redirect()->route('glowna')->with('message','rekord został edytowany');
    }


    public function usun($id){

        record::destroy($id);
        return redirect()->route('glowna')->with('message','rekord usunięty');

    }

}
