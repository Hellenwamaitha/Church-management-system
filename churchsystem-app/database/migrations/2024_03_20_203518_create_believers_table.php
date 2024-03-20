<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBelieversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('believers');

        Schema::create('believers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->notNull();
            $table->string('deparment')->notNull();
            $table->string('phone')->notNull();
            $table->string('residence')->notNull();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('believers');
    }
}
