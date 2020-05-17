<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('owner_name')->nullable();
			   $table->string('owner_phone')->nullable();
            $table->string('pet_name')->nullable();
            $table->string('color_breed')->nullable();
            $table->string('weight')->nullable();
			   $table->string('return_to')->nullable();
			   $table->string('shipping_address')->nullable();
			   $table->string('cremation_type')->nullable();
			   $table->string('paw_print')->nullable();
			   $table->string('urn_type')->nullable();
			   $table->string('nameplate_type')->nullable();
			   $table->string('service_options')->nullable();
            $table->string('extra_notes')->nullable();
            $table->integer('status_id')->unsigned()->default(1);
            $table->foreign('status_id')->references('id')->on('statuses');
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
        Schema::dropIfExists('orders');
    }
}
