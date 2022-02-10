<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('created_at');
        });



       $a = "accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt";
        $a = explode(" ",$a);




        for($i=1;$i<=100;$i++){


            $data = date("Y-m-d",time()-($i*86400));

            $tytul = $a[rand(1,count($a)-1)]." ".$a[rand(1,count($a)-1)]." ".$a[rand(1,count($a)-1)]." ".$a[rand(1,count($a)-1)];



            $opis = $a[rand(1,count($a)-1)]." ".$a[rand(1,count($a)-1)]." ".$a[rand(1,count($a)-1)]." ".$a[rand(1,count($a)-1)].$a[rand(1,count($a)-1)]." ".$a[rand(1,count($a)-1)].$a[rand(1,count($a)-1)]." ".$a[rand(1,count($a)-1)];


            $opis = $opis.$opis.$opis.$opis.$opis;

            DB::table('records')->insert(array('title' => $tytul, "description" => $opis, 'created_at' => $data));



        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('searches');
    }
}
