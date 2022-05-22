<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderSparepartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_spareparts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sparepart_id')->constrained();
            $table->foreignId('transaction_sparepart_id')->constrained();
            $table->integer('qty')->nullable();
            $table->double('price')->nullable();
            $table->double('grand_price')->nullable();
            $table->double('profit_order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_spareparts');
    }
}
