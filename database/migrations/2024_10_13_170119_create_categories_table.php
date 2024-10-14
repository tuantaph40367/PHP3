<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // tạo trường id
            $table->string('name'); // tạo trường name
            $table->timestamps(); // tạo trường created_at và updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
