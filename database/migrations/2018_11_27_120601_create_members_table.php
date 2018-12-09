<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('member_id');
            $table->string('member_name',50);
            $table->string('member_email',150);
            $table->string('member_contact',50);
            $table->string('member_blood_group',50);
            $table->string('member_nid',50);
            $table->string('member_profession',50);
            $table->string('member_date_of_birth',191);
            $table->string('member_present_address',50);
            $table->string('member_permanent_address',50);
            $table->integer('member_status')->default(1);
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
        Schema::dropIfExists('members');
    }
}
