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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('branchID');
            $table->longtext('image')->default('default.png');
            $table->string('title');
            $table->longText('description');
            $table->bigInteger('cost');
            $table->string('author');
            $table->timestamps();
            $table->integer('status')->default(1);
            $table->integer('archive')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
