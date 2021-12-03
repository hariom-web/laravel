<?php
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
  
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('image');
            $table->string('email');
            $table->bigInteger('phonenumber');
            $table->text('address');
            $table->Integer('housenumber');
            $table->Integer('postalcode');
            $table->string('city');
            $table->timestamps('dateofbirth');
            $table->string('gender',10);
            $table->string('maritalstatus',10);
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
        Schema::dropIfExists('products');
    }
}