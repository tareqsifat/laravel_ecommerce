<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table-> integer('user_id','10')->nullable();
            $table-> string('name','100')->nullable();
            $table-> string('address1','100')->nullable();
            $table-> string('address2','100')->nullable();
            $table-> string('country_id','10')->nullable();
            $table-> string('tin','100')->nullable();
            $table-> string('','')->nullable();
            $table-> string('trn','100')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
