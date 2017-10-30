<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacebookOauthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facebook_oauths', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('email');
            $table->string('facebook_id');
            $table->string('refresh_token')->nullable();
            $table->jsonb('user_info')->nullable();
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
        Schema::dropIfExists('facebook_oauths');
    }
}
