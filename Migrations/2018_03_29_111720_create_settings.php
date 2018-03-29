<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->text('value');
            $table->text('options');
            $table->integer('min_user_type');
            $table->timestamps();
        });

        DB::table("settings")->insert([
            "type" => "input",
            "value" => 1,
            "options" => "",
            "min_user_type" => 2,
            "created_at" => \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now()
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
