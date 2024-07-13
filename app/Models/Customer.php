<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer';
    protected $primaryKey = 'customer_id';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */



    protected $fillable = ['customer_uniqueid',
    'customer_type',
    'customer_title',
    'customer_name',
    'customer_nik',
    'customer_address',
    'customer_nohp', 
    'customer_npwp',
    'customer_email',

    'customer_company',
    'customer_companyaddress',
    'customer_companyaddress2',
    'customer_companyemail',
    'customer_companytelp',
    'customer_companynib',
    'customer_companyhaki',
    'customer_companynpwp',
    'customer_countrycode',
    'customer_companylogo',
    'customer_companytax',

    'customer_sales',
    'customer_dateadded',
    'customer_password',
    'customer_status',
    'updated_at',
    'created_at', ];
}
