<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSparepartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spareparts', function (Blueprint $table) {
            $table->id();
            $table->string('name_sparepart')->nullable();
            $table->string('slug')->nullable();
            $table->integer('stock_sparepart')->nullable();
            $table->string('status_sparepart')->nullable();
            $table->double('selling_price')->nullable();
            $table->double('purchase_price')->nullable();
            $table->string('description')->nullable();
            $table->string('foto_sparepart')->nullable();
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
        Schema::dropIfExists('spareparts');
    }
}
