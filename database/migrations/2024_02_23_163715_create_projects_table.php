<?php

use App\Core\Classes\Utils;
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
        Schema::create('projects', function (Blueprint $table) {
            $table->string('id')->unique()->primary();
            $table->string('name');
            $table->text('details');
            $table->integer('user_id');
            $table->string('theme_name');
            $table->integer('status')->default(Utils::READY);
            $table->string('image_url');
            $table->type('image_url');
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
        Schema::dropIfExists('projects');
    }
};
