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
        Schema::create('logistic_work_order', function (Blueprint $table) {
            $table->id();
            // ini on update sama on deletenya tolong dicek ya pun mau dipake apa engga
            $table->foreignId('logistic_id')->constrained('logistics')->onDelete('restrict')->onUpdate('cascade');
            $table->foreignId('work_order_id')->constrained('work_orders')->onDelete('restrict')->onUpdate('cascade');
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
        Schema::dropIfExists('logistic_work_order');
    }
};
