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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('pdc_id');
            $table->string('pdc_pictures_product');
            $table->string('pdc_name');
            $table->string('pdc_price');
            $table->string('pdc_detail_product');
            $table->string('pdc_stok_product');
            $table->unsignedBigInteger('pdc_category_product_id'); 
            $table->unsignedBigInteger('pdc_created_by')->unsigned()->nullable();
            $table->unsignedBigInteger('pdc_deleted_by')->unsigned()->nullable();
            $table->unsignedBigInteger('pdc_updated_by')->unsigned()->nullable();
      
            $table->softDeletes();
            $table->renameColumn('deleted_at', 'pdc_deleted_at');
            $table->string('pdc_sys_note')->nullable();


            $table->foreign('pdc_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('pdc_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('pdc_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('pdc_category_product_id')->references('ctg_id')->on('product_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
