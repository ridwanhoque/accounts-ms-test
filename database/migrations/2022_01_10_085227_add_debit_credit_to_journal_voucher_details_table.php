<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDebitCreditToJournalVoucherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('journal_voucher_details', function (Blueprint $table) {
            $table->decimal('debit_amount', 20, 2)->default('0')->after('amount');
            $table->decimal('credit_amount', 20, 2)->default('0')->after('debit_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('journal_voucher_details', function (Blueprint $table) {
            $table->dropColumn('debit_amount');
            $table->dropColumn('credit_amount');
        });
    }
}
