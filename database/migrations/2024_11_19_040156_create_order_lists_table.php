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
        Schema::create('order_lists', function (Blueprint $table) {
            $table->bigIncrements('lis_id');
            $table->unsignedBigInteger('lis_order_id'); 
            $table->unsignedBigInteger('lis_product_id');
            $table->biginteger('lis_quantity');
            
            
            $table->unsignedBigInteger('lis_created_by')->unsigned()->nullable();
            $table->unsignedBigInteger('lis_deleted_by')->unsigned()->nullable();
            $table->unsignedBigInteger('lis_updated_by')->unsigned()->nullable();

            $table->softDeletes();
            $table->renameColumn('deleted_at', 'lis_deleted_at');
            $table->string('lis_sys_note')->nullable();


            $table->foreign('lis_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('lis_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('lis_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('lis_order_id')->references('odr_id')->on('orders')->onDelete('cascade');
            $table->foreign('lis_product_id')->references('pdc_id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_lists');
    }
};
