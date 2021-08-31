<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateA2pTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a2p', function (Blueprint $table) {
            $table->id();
            $table->string('source');
            $table->string('asal');
            $table->string('costumer');
            $table->string('SMSC');
            $table->string('link');
            $table->string('operator');
            $table->string('sender');
            $table->string('terminasi');
            $table->string('tipe_terminasi');
            $table->string('SID');
            $table->string('status_terminasi');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('a2p');
    }
}
