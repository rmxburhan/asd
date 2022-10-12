<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('produk_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('qty');
            $table->enum('status', ['keranjang', 'cekout']);
            $table->integer('total_harga');
            $table->string('bukti_pembayaran')->nullable();
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
        Schema::dropIfExists('detail_transaksis');
    }
}
