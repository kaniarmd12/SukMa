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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('cst_id');
            $table->string('cst_name');
            $table->string('cst_email')->unique();
            $table->string('cst_password');
            $table->biginteger('cst_no_handphone');
            $table->string('cst_adress');

            $table->unsignedBigInteger('cst_created_by')->unsigned()->nullable();
            $table->unsignedBigInteger('cst_deleted_by')->unsigned()->nullable();
            $table->unsignedBigInteger('cst_updated_by')->unsigned()->nullable();
      
            $table->softDeletes();
            $table->renameColumn('deleted_at', 'cst_deleted_at');
            $table->string('cst_sys_note')->nullable();


            $table->foreign('cst_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('cst_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('cst_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
