<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('display_name')->nullable();
    $table->string('phone_number')->nullable();
    $table->timestamp('phone_verified_at')->nullable();
    $table->string('photo')->nullable();
    $table->string('invoice_address')->nullable();
    $table->string('invoice_postcode')->nullable();
    $table->string('invoice_city')->nullable();
    $table->foreignId('invoice_country_id')->nullable()
        ->constrained('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
