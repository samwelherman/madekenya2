<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipPayment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function member(){
        return $this->belongsTo('App\Models\Member\Member','member_id');
    }

    public function company(){
        return $this->belongsTo('App\Models\Company','company_id');
    }
}
