<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table = "tblorder";
    public function hasOrderDetail()
    {
        return $this->hasMany(OrderDetailModel::class,'oid','odid');
    }
    public function belongsToCustomer()
    {
        return $this->belongsTo(CustomerModel::class,'id','cid');
    }
}
