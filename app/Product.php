<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class Product extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'image', 'email', 'phonenumber', 'address', 'housenumber', 'postalcode', 'city', 'dateofbirth', 'gender', 'maritalstatus'
    ];
}
