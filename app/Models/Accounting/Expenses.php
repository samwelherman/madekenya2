<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    protected $table = "tbl_expenses";

    public $timestamps = false;

    protected $fillable = [
        'bank_id',
        'trans_id',
        'amount',
        'date',
        'type',
        'status',
        'exchange_rate',
        'exchange_code',
        'payment_method',
        'notes',   
       'name',
        'reference',
        'account_id', 
      'refill_id', 
        'added_by'];
    
      public function classAccount()
    {
        return $this->hasOne(ClassAccount::class, 'class_name', 'class');
    }
    
     public function journalEntry()
    {
        return $this->hasMany(JournalEntry::class, 'account_id', 'account_id');
    }

    public function account()
    {
        return $this->hasOne(ChartOfAccount::class, 'id', 'account_id');
    }
    public function bank()
    {
        return $this->hasOne(ChartOfAccount::class, 'id', 'bank_id');
    }
}
