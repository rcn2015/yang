<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPiceToOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order', function (Blueprint $table) {
            //
            $table->string('pay_code',255);
            $table->string('pay_type',11);
            //$table->string('distribution',11);
            $table->string('status',1);
            $table->string('pay_status',1);
            $table->string('distribution',1);
            $table->string('postcode',6);
            $table->string('telphone',20);
            $table->string('country',11);
            $table->string('province',11);
            $table->string('city',11);
            $table->string('area',11);
            $table->string('address',250);
            $table->string('mobile',20);
            $table->string('payable_amount',20);
            $table->string('real_amount',20);
            $table->string('payable_freight',20);
            $table->string('send_time');
            $table->string('create_time');
            $table->string('completion_time');
            $table->string('invoice',1);
            $table->string('postscript',255);
            $table->text('note');
            $table->string('if_del',1);
            $table->string('insured',10);
            $table->string('if_insured',1);
            $table->string('pay_fee',10);
            $table->string('invoice_title',100);
            $table->string('taxes',10);
            $table->string('promotions',10);
            $table->string('discount',10);
            $table->string('order_amount',10);
            $table->string('if_print',255);
            $table->string('prop',255);
            $table->string('accept_time',80);
            $table->string('exp',5);
            $table->string('point',5);
            $table->string('type',1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order', function (Blueprint $table) {
            //
        });
    }
}
