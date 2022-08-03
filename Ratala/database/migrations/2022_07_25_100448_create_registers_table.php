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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string("First_Name");
            $table->string("Last_Name");
            $table->Integer("Birthday_day");
            $table->string("Birthday_Month");
            $table->Integer("Birthday_Year");
            $table->string("Email_Id");
            $table->Integer("Mobile_Number");
            $table->char("Gender");
            $table->string("Address");
            $table->string("City");
            $table->Integer("Pin_Code");
            $table->string("State");
            $table->string("Country");
            $table->string("Hobby_Drawing");
            $table->string("Hobby_Singing");
            $table->string("Hobby_Dancing");
            $table->string("Hobby_Cooking");
            $table->string("Hobby_Other");
            $table->string("Other_Hobby");
            $table->string("ClassX_Board");
            $table->Integer("ClassX_Percentage");
            $table->Integer("ClassX_YrOfPassing");
            $table->string("ClassXII_Board");
            $table->Integer("ClassXII_Percentage");
            $table->Integer("ClassXII_YrOfPassing");
            $table->string("Graduation_Board");
            $table->Integer("Graduation_Percentage");
            $table->Integer("Graduation_YrOfPassing");
            $table->string("Masters_Board");
            $table->Integer("Masters_Percentage");
            $table->Integer("Masters_YrOfPassing");
            $table->string("Course_BCA");
            $table->string("Course_BCom");
            $table->string("Course_BSc");
            $table->string("Course_BA");


            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
};
