<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $name;
    protected $phone_primary;
    protected $phone_secondary;
    protected $contact_person_primary;
    protected $contact_person_secondary;
    protected $address_line_1;
    protected $address_line_2;
    protected $state;
    protected $city;
    protected $pincode;
}
