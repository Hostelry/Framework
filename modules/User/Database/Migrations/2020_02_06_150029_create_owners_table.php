<?php

declare(strict_types=1);


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

final class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() : void
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('code');
            $table->string('username')->unique(); // as email;
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('activation_code', 32)->unique();
            $table->boolean('is_validated')->default(false);
            $table->timestamps();
            $table->unique(['first_name', 'middle_name', 'last_name'], 'owner_fullname');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() : void
    {
        Schema::dropIfExists('owners');
    }
}
