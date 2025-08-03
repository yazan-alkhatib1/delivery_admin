<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\LanguageVersionDetail;
use Carbon\Carbon;

class CreateLanguageVersionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_version_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('default_language_id')->nullable();
            $table->unsignedBigInteger('version_no')->nullable()->default('1');
            $table->timestamps();
        });

        $language_version = LanguageVersionDetail::create([
            'version_no' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_version_details');
    }
}
