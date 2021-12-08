<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdfDetail2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('pdf_detail2', function (Blueprint $table) {
                $table->id();
                
                $table->string('_id',5);
                
                $table->string('f61',30)->nullable();
                $table->string('f62',30)->nullable();
                $table->string('f63',30)->nullable();
                $table->string('f64',30)->nullable();
                $table->string('f65',30)->nullable();
                $table->string('f66',30)->nullable();
                $table->string('f67',30)->nullable();
                $table->string('f68',30)->nullable();
                $table->string('f69',30)->nullable();

                $table->string('f70',30)->nullable();
                $table->string('f71',30)->nullable();
                $table->string('f72',30)->nullable();
                $table->string('f73',30)->nullable();
                $table->string('f74',30)->nullable();
                $table->string('f75',30)->nullable();
                $table->string('f76',30)->nullable();
                $table->string('f77',30)->nullable();
                $table->string('f78',30)->nullable();
                $table->string('f79',30)->nullable();

                $table->string('f80',30)->nullable();
                $table->string('f81',30)->nullable();
                $table->string('f82',30)->nullable();
                $table->string('f83',30)->nullable();
                $table->string('f84',30)->nullable();
                $table->string('f85',30)->nullable();
                $table->string('f86',30)->nullable();
                $table->string('f87',30)->nullable();
                $table->string('f88',30)->nullable();
                $table->string('f89',30)->nullable();

                $table->string('f90',30)->nullable();
                $table->string('f91',30)->nullable();
                $table->string('f92',30)->nullable();
                $table->string('f93',30)->nullable();
                $table->string('f94',30)->nullable();
                $table->string('f95',30)->nullable();
                $table->string('f96',30)->nullable();
                $table->string('f97',30)->nullable();
                $table->string('f98',30)->nullable();
                $table->string('f99',30)->nullable();

                $table->string('f100',30)->nullable();
                $table->string('f101',30)->nullable();
                $table->string('f102',30)->nullable();
                $table->string('f103',30)->nullable();
                $table->string('f104',30)->nullable();
                $table->string('f105',30)->nullable();
                $table->string('f106',30)->nullable();
                $table->string('f107',30)->nullable();
                $table->string('f108',30)->nullable();
                $table->string('f109',30)->nullable();
                
                $table->string('f110',30)->nullable();
                $table->string('f111',30)->nullable();
                $table->string('f112',30)->nullable();
                $table->string('f113',30)->nullable();
                $table->string('f114',30)->nullable();
                $table->string('f115',30)->nullable();
                $table->string('f116',30)->nullable();
                $table->string('f117',30)->nullable();
                $table->string('f118',30)->nullable();
                $table->string('f119',30)->nullable();
                
                

                $table->string('created',20);
                $table->string('updated',20);
            });
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
