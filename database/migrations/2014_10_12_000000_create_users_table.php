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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phonenumber')->nullable();
            $table->string('type')->nullable();
            $table->string('is_active')->nullable()->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('two_factor_code')->nullable();
            $table->string('two_factor_code_mail')->nullable();
            $table->dateTime('two_factor_expires_at')->nullable();
            $table->string('avatar')->nullable();
            $table->string('aadhar')->nullable();
            $table->string('pan_card')->nullable();
            $table->string('category')->nullable();
            $table->string('exam_ebility')->nullable();
            $table->text('adhar_file')->nullable();
            $table->text('pan_card_file')->nullable();
            $table->text('rank_file')->nullable();
            $table->text('college_name_file')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
