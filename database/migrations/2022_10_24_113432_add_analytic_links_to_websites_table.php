<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('websites', function (Blueprint $table) {
            $table->text('google_link_1')->nullable();
            $table->text('google_link_2')->nullable();
            $table->text('google_link_3')->nullable();
            $table->text('google_link_4')->nullable();
            $table->text('google_link_5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('websites', function (Blueprint $table) {
            $table->text('google_link_1');
            $table->text('google_link_2');
            $table->text('google_link_3');
            $table->text('google_link_4');
            $table->text('google_link_5');
        });
    }
};
