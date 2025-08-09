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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('review_user_id')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->double('rating')->default('0');
            $table->text('comment')->nullable();
            $table->string('rating_by')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('review_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->timestamps();
        });

        if (!Schema::hasTable('orders')) {
            Schema::create('orders',function(Blueprint $table){
                $table->id();
                $table->unsignedBigInteger('is_reschedule')->nullable();
                $table->foreign('is_reschedule')->references('id')->on('reschedules')->onDelete('cascade');
            });
        } else if (!Schema::hasColumn('orders', 'is_reschedule')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->unsignedBigInteger('is_reschedule')->nullable();
                $table->foreign('is_reschedule')->references('id')->on('reschedules')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
        // We don't drop orders table here as it might have been pre-existing
    }
};
