<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkLinkCategoryPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_link_category', function (Blueprint $table) {
            $table->unsignedBigInteger('link_id');
            $table->foreign('link_id', 'link_id_fk_5985550')->references('id')->on('links')->onDelete('cascade');
            $table->unsignedBigInteger('link_category_id');
            $table->foreign('link_category_id', 'link_category_id_fk_5985550')->references('id')->on('link_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_link_category');
    }
}
