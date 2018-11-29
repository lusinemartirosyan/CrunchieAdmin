<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Campaign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Campaign', function (Blueprint $table) {
            $table->increments('CampaignID');
            $table->string('CampaignHash');
            $table->integer('AdvertiserID');
            $table->string('CampaignName', 200);
            $table->text('URL');
            $table->text('ExampleURL');
            $table->string('RedirectType', 100);
            $table->dateTime('InsertDate');
            $table->tinyInteger('IsActive');
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
        //
    }
}
