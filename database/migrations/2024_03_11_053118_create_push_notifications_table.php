<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePushNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('push_notifications', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('message')->nullable();
            $table->boolean('for_client')->nullable()->default(0);
            $table->boolean('for_delivery_man')->nullable()->default(0);
            $table->boolean('for_all')->nullable()->default(0);
            $table->unsignedBigInteger('notification_count')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('push_notifications');
    }
}
