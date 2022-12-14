<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_ins', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('user_id');
            $table->string('pass_id');
            $table->string('name');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('company_id');
            $table->string('department_id');
            $table->string('security_id')->nullable();
            $table->string('created_by')->nullable();
            $table->string('staff_id')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('gender');
            $table->string('address');
            $table->string('purpose');
            $table->string('identification')->nullable();
            $table->string('image')->nullable();
            $table->string('expected_date')->nullable();
            $table->string('expected_time')->nullable();
            $table->string('check_in')->nullable();
            $table->string('check_out')->nullable();
            $table->string('status');
            $table->integer('soft_delete')->default(0);
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
        Schema::dropIfExists('check_ins');
    }
}
