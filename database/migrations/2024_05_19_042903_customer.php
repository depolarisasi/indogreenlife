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
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('customer_id')->nullable();
            $table->string('customer_uniqueid')->unique()->nullable();
            $table->string('customer_type')->default('Perusahaan')->nullable();

            $table->string('customer_title')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_nik')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_nohp')->nullable();
            $table->string('customer_npwp')->nullable();
            $table->string('customer_email')->unique()->nullable();

            $table->string('customer_company')->nullable();
            $table->text('customer_companyaddress')->nullable();
            $table->text('customer_companyaddress2')->nullable();
            $table->string('customer_countrycode')->nullable();
            $table->string('customer_companytelp')->nullable();
            $table->string('customer_companynib')->nullable();
            $table->string('customer_companytax')->nullable();
            $table->string('customer_companyhaki')->nullable();
            $table->string('customer_companynpwp')->nullable();
            $table->string('customer_companyemail')->unique()->nullable();
            $table->string('customer_companylogo')->nullable();

            $table->integer('customer_sales');
            $table->datetime('customer_dateadded')->nullable();
            $table->string('customer_password');
            $table->string('customer_status')->default('Draft')->nullable();
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
        Schema::dropIfExists('customer');
    }
};
