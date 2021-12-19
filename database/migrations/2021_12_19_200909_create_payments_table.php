<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{

    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->float('total')->unsigned();
            $table->timestamp('f_pago')->nullable();
            //Número de pedido
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
