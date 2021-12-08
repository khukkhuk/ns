<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdfDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('pdf_detail')) {
            Schema::create('pdf_detail', function (Blueprint $table) {
                $table->id();
                
                $table->string('title_id',5);
                $table->string('pdf_type',5);
                
                $table->string('f1',30)->nullable();
                $table->string('f2',30)->nullable();
                $table->string('f3',30)->nullable();
                $table->string('f4',30)->nullable();
                $table->string('f5',30)->nullable();
                $table->string('f6',30)->nullable();
                $table->string('f7',30)->nullable();
                $table->string('f8',30)->nullable();
                $table->string('f9',30)->nullable();

                $table->string('f10',30)->nullable();
                $table->string('f11',30)->nullable();
                $table->string('f12',30)->nullable();
                $table->string('f13',30)->nullable();
                $table->string('f14',30)->nullable();
                $table->string('f15',30)->nullable();
                $table->string('f16',30)->nullable();
                $table->string('f17',30)->nullable();
                $table->string('f18',30)->nullable();
                $table->string('f19',30)->nullable();

                $table->string('f20',30)->nullable();
                $table->string('f21',30)->nullable();
                $table->string('f22',30)->nullable();
                $table->string('f23',30)->nullable();
                $table->string('f24',30)->nullable();
                $table->string('f25',30)->nullable();
                $table->string('f26',30)->nullable();
                $table->string('f27',30)->nullable();
                $table->string('f28',30)->nullable();
                $table->string('f29',30)->nullable();

                $table->string('f30',30)->nullable();
                $table->string('f31',30)->nullable();
                $table->string('f32',30)->nullable();
                $table->string('f33',30)->nullable();
                $table->string('f34',30)->nullable();
                $table->string('f35',30)->nullable();
                $table->string('f36',30)->nullable();
                $table->string('f37',30)->nullable();
                $table->string('f38',30)->nullable();
                $table->string('f39',30)->nullable();

                $table->string('f40',30)->nullable();
                $table->string('f41',30)->nullable();
                $table->string('f42',30)->nullable();
                $table->string('f43',30)->nullable();
                $table->string('f44',30)->nullable();
                $table->string('f45',30)->nullable();
                $table->string('f46',30)->nullable();
                $table->string('f47',30)->nullable();
                $table->string('f48',30)->nullable();
                $table->string('f49',30)->nullable();

                $table->string('f50',30)->nullable();
                $table->string('f51',30)->nullable();
                $table->string('f52',30)->nullable();
                $table->string('f53',30)->nullable();
                $table->string('f54',30)->nullable();
                $table->string('f55',30)->nullable();
                $table->string('f56',30)->nullable();
                $table->string('f57',30)->nullable();
                $table->string('f58',30)->nullable();
                $table->string('f59',30)->nullable();

                $table->string('f60',30)->nullable();

                $table->string('created',20);
                $table->string('updated',20);
            });
        } 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
