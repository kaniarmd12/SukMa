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
        Schema::create('product_categories', function (Blueprint $table) {
            $table->bigIncrements('ctg_id');
            $table->string('ctg_name');
            $table->timestamps();
            $table->renameColumn('updated_at', 'ctg_updated_at');
            $table->renameColumn('created_at', 'ctg_created_at');
            $table->unsignedBigInteger('ctg_created_by')->unsigned()->nullable();
            $table->unsignedBigInteger('ctg_deleted_by')->unsigned()->nullable();
            $table->unsignedBigInteger('ctg_updated_by')->unsigned()->nullable();
      
            $table->softDeletes();
            $table->renameColumn('deleted_at', 'ctg_deleted_at');
            $table->string('ctg_sys_note')->nullable();


            $table->foreign('ctg_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('ctg_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('ctg_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
