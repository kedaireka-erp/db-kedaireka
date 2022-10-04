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
        Schema::create('logistics', function (Blueprint $table) {
            $table->id();
            // 1 fppp bisa punya banyak logistic
            // $table->foreignId("fppp_id")->constrained("manufactures")->onUpdate("cascade");
            $table->string('no_logistic')->nullable();
            $table->timestamp('tgl_input')->nullable();
            $table->timestamp('tgl_berangkat')->nullable();
            $table->string('driver')->nullable();
            $table->string('no_polisi')->nullable();
            $table->text('alamat')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('logistics');
    }
};
