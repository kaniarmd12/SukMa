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
        Schema::create('bussines', function (Blueprint $table) {
            $table->bigIncrements('bsn_id');
            $table->string('bsn_username');
            $table->string('bsn_email');
            $table->string('bsn_bussines_name');
            $table->string('bsn_owner_name');  
            $table->biginteger('bsn_no_handphone');
            $table->string('bsn_addres');
            $table->string('bsn_postal_code');

            $table->unsignedBigInteger('bsn_created_by')->unsigned()->nullable();
            $table->unsignedBigInteger('bsn_deleted_by')->unsigned()->nullable();
            $table->unsignedBigInteger('bsn_updated_by')->unsigned()->nullable();
      
            $table->softDeletes();
            $table->renameColumn('deleted_at', 'bsn_deleted_at');
            $table->string('bsn_sys_note')->nullable();


            $table->foreign('bsn_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('bsn_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('bsn_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bussines');
    }
};
