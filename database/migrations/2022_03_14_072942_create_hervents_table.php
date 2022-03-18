<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hervents', function (Blueprint $table) {
            $table->id();
            $table->string('namacustomer')->nullable();
            $table->string('namaproject')->nullable();
            $table->string('tanggalbuat')->nullable();
            $table->string('jatuhtempo')->nullable();
            $table->string('metodebayar')->nullable();
            $table->string('nomorfa')->nullable();
            $table->string('editcode')->nullable();
            $table->string('item1')->nullable();
            $table->string('item2')->nullable();
            $table->string('item3')->nullable();
            $table->string('item4')->nullable();
            $table->string('item5')->nullable();
            $table->string('item6')->nullable();
            $table->string('item7')->nullable();
            $table->string('item8')->nullable();
            $table->string('item9')->nullable();
            $table->string('item10')->nullable();
            $table->string('qty1')->nullable();
            $table->string('qty2')->nullable();
            $table->string('qty3')->nullable();
            $table->string('qty4')->nullable();
            $table->string('qty5')->nullable();
            $table->string('qty6')->nullable();
            $table->string('qty7')->nullable();
            $table->string('qty8')->nullable();
            $table->string('qty9')->nullable();
            $table->string('qty10')->nullable();
            $table->string('harga1')->nullable();
            $table->string('harga2')->nullable();
            $table->string('harga3')->nullable();
            $table->string('harga4')->nullable();
            $table->string('harga5')->nullable();
            $table->string('harga6')->nullable();
            $table->string('harga7')->nullable();
            $table->string('harga8')->nullable();
            $table->string('harga9')->nullable();
            $table->string('harga10')->nullable();
            $table->string('amount1')->nullable();
            $table->string('amount2')->nullable();
            $table->string('amount3')->nullable();
            $table->string('amount4')->nullable();
            $table->string('amount5')->nullable();
            $table->string('amount6')->nullable();
            $table->string('amount7')->nullable();
            $table->string('amount8')->nullable();
            $table->string('amount9')->nullable();
            $table->string('amount10')->nullable();
            $table->string('total')->nullable();
            $table->string('pelunasan')->nullable();
            $table->string('downpayment')->nullable();
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
        Schema::dropIfExists('hervents');
    }
};
