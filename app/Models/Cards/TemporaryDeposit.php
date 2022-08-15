<?php

namespace App\Models\Cards;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemporaryDeposit extends Model
{
    use HasFactory;

    protected $table = "tbl_temp_deposits";

    protected $fillable  = ['ref_no','card_id','visitor_id','member_id','added_by','trans_id','credit','debit','status'];
}
