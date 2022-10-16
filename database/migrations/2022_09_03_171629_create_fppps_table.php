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
        Schema::create('fppps', function (Blueprint $table) {
            $table->id();
            $table->integer("number")->default(0)->nullable();
            $table->string("fppp_no")->nullable();
            $table->string("file_bom_alumunium")->nullable();
            $table->string("file_bom_aksesoris")->nullable();
            $table->string("file_detail_wo")->nullable();
            $table->string("file_wo_potong_alumunium")->nullable();
            $table->string("production_phase")->nullable();
            $table->string("production_time")->nullable();
            $table->string("fppp_revisino")->nullable(); //Cara bikin "Revisi dari FPPP No" dan "Lain-Lain" bisa diinput???
            $table->string("fppp_keterangan")->nullable(); //Cara bikin "Revisi dari FPPP No" dan "Lain-Lain" bisa diinput???
            $table->string("color")->nullable();
            $table->string("glass_type")->nullable();
            $table->date("retrieval_deadline")->nullable();
            $table->enum("fppp_type", ["produksi", "memo"])->nullable();
            $table->enum("order_status", ["baru", "tambahan", "revisino", "lainlain"])->nullable();
            $table->enum("glass", ["included", "excluded", "included_excluded"])->nullable();
            $table->boolean("box_usage")->nullable();
            $table->boolean("sealant_usage")->nullable();
            $table->boolean("delivery_to_expedition")->nullable();
            $table->text("note")->nullable();
            $table->enum('acc_produksi',['ACCEPT','PENDING'])->default('PENDING');
            $table->enum('acc_pengiriman',['ACCEPT','PENDING','ACCEPT WITH NOTE'])->default('PENDING');
            $table->text("note_acc")->nullable();
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
        Schema::dropIfExists('fppps');
    }
};
