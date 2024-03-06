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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->date('birthday');
            $table->string('gender');
            $table->string('ug_degree_name')->nullable();
            $table->string('ug_admission_session')->nullable();
            $table->string('ug_id_no')->nullable();
            $table->integer('ug_batch_no')->nullable();
            $table->string('ug_passing')->nullable();
            $table->integer('ug_session')->nullable();
            $table->decimal('ug_cgpa', 4, 2)->nullable();
            $table->string('g_degree_name')->nullable()->nullable();
            $table->string('g_admission_session')->nullable();
            $table->string('g_id_no')->nullable();
            $table->integer('g_batch_no')->nullable();
            $table->string('g_passing')->nullable();
            $table->integer('g_session')->nullable();
            $table->decimal('g_cgpa', 4, 2)->nullable();
            $table->string('address');
            $table->string('mobile');
            $table->string('email');
            $table->string('status');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
