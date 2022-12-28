<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContributorTypeFieldToUploadFormCreator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('upload_form_creator', function (Blueprint $table) {
            $table->string('contributor_type')->nullable()->after('creator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('upload_form_creator', function (Blueprint $table) {
            $table->dropColumn('contributor_type');
        });
    }
}
