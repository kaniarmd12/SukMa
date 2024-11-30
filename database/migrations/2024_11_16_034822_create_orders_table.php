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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('odr_id');
            $table->string('odr_status order');
            $table->biginteger('odr_total');

            $table->unsignedBigInteger('odr_created_by')->unsigned()->nullable();
            $table->unsignedBigInteger('odr_deleted_by')->unsigned()->nullable();
            $table->unsignedBigInteger('odr_updated_by')->unsigned()->nullable();
      
            $table->softDeletes();
            $table->renameColumn('deleted_at', 'odr_deleted_at');
            $table->string('odr_sys_note')->nullable();


            $table->foreign('odr_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('odr_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('odr_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
            
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
