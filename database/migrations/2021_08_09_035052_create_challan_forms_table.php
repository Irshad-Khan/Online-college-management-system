<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChallanFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challan_forms', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->float('fee');
            $table->float('processing_fee');
            $table->float('bus_rent');
            $table->float('library_fee');
            $table->float('security_fee');
            $table->float('one_time_scholarship')->nullable();
            $table->unsignedBigInteger('student_id');
            $table->string('challan_number');
            $table->tinyInteger('is_challan_paid')->default(0);
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
        Schema::dropIfExists('challan_forms');
    }
}
