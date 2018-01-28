<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class UpdateProductsAddLinkAndDescription extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('users', function($table) {
            $table->text('description');
            $table->string('url');
            $table->string('affiliateUrl');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('users', function($table) {
            $table->dropColumn('paid');
            $table->dropColumn('url');
            $table->dropColumn('affiliateUrl');
        });
	}
}
