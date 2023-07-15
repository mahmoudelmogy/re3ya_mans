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
        Schema::create('page_home_items', function (Blueprint $table) {
            $table->id();
            $table->text('heading');
            $table->text('photo');
            $table->text('background');

            $table->text('achevement_heading');
            $table->text('achevement_subheading')->nullable();
            $table->text('achevement_status');

            $table->text('teams_heading');
            $table->text('teams_subheading')->nullable();
            $table->text('teams_status');

            $table->text('ethad_status');

            $table->text('social_search_heading');
            $table->text('social_search_subheading');
            $table->text('social_search_status');

            $table->text('activites_heading');
            $table->text('activites_subheading')->nullable();
            $table->text('activites_status');
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
        Schema::dropIfExists('page_home_items');
    }
};
