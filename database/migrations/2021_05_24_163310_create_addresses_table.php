<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id','10')->nullable();
            $table->integer('country_id','10')->nullable();
            $table->string('name','100')->nullable();
            $table->string('address1','100')->nullable();
            $table->string('address2','100')->nullable();
            $table->string('country_name','100')->nullable();
            $table->string('city_name','100')->nullable();
            $table->string('zip_code','100')->nullable();
            $table->string('Phone','100')->nullable();
            $table->string('mobile','100')->nullable();
            $table->string('comment','50')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
