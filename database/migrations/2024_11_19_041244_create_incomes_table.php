<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->bigIncrements('icm_id');
            $table->timestamp('icm_datetime');

            $table->unsignedBigInteger('icm_order_id');  
            $table->unsignedBigInteger('icm_created_by')->unsigned()->nullable();
            $table->unsignedBigInteger('icm_deleted_by')->unsigned()->nullable();
            $table->unsignedBigInteger('icm_updated_by')->unsigned()->nullable();

            $table->softDeletes();
            $table->renameColumn('deleted_at', 'icm_deleted_at');
            $table->string('icm_sys_note')->nullable();


            $table->foreign('icm_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('icm_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('icm_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('icm_order_id')->references('odr_id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incomes');
    }
};
