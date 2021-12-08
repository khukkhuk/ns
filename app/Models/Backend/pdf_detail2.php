<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pdf_detail2 extends Model
{
    use HasFactory;

    protected $table = 'pdf_detail2';
    protected $primaryKey = 'id';
    protected $fillable = ['_id','f61','f62','f63','f64','f65','f66','f67','f68','f69','f70','f71','f72','f73','f74','f75','f76','f77','f78','f79','f80','f81','f82','f83','f84','f85','f86','f87','f88','f89','f90','f91','f92','f93','f94','f95','f96','f97','f98','f99','f100','f101','f102','f103','f104','f105','f106','f107','f108','f109','f110','f111','f112','f113','f114','f1111','f116','f117','f118','f119'];
    const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';
    public $timestamp = false;
}
