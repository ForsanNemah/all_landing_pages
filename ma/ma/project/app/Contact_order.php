<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact_order extends Model
{
    
    protected $table = 'contact_orders';
    protected $guarded = [];  
    use HasFactory;
}
