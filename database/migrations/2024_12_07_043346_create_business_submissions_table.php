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
        Schema::create('business_submissions', function (Blueprint $table) {
            $table->bigIncrements('sbn_id');
            $table->string('sbn_bussines_name');
            $table->unsignedBigInteger('sbn_owner_id');
            $table->string('sbn_no_handphone');
            $table->string('sbn_address');
            $table->string('sbn_pictures_bussines');
            $table->string('sbn_status')->default(0);
            $table->timestamps(); // Laravel otomatis membuat kolom `created_at` dan `updated_at`
            $table->softDeletes(); // Laravel otomatis membuat kolom `deleted_at`

            // Kolom tambahan
            $table->unsignedBigInteger('sbn_created_by')->nullable();
            $table->unsignedBigInteger('sbn_deleted_by')->nullable();
            $table->unsignedBigInteger('sbn_updated_by')->nullable();
            $table->string('sbn_sys_note')->nullable();

            // Foreign keys
            $table->foreign('sbn_created_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('sbn_updated_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('sbn_deleted_by')->references('usr_id')->on('users')->onDelete('cascade');
            $table->foreign('sbn_owner_id')->references('usr_id')->on('users')->onDelete('cascade');
        });

        // Rename default timestamps and soft deletes
        Schema::table('business_submissions', function (Blueprint $table) {
            $table->renameColumn('created_at', 'sbn_created_at');
            $table->renameColumn('updated_at', 'sbn_updated_at');
            $table->renameColumn('deleted_at', 'sbn_deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_submissions');
    }
};
