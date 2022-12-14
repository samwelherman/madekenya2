<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryList extends Model
{
    use HasFactory;

    protected $table = "inventory_list";

    protected $fillable = [
    'serial_no',
    'brand_id',
    'purchase_id',
    'purchase_date',
    'location',
    'truck_id',
    'status',  
    'added_by'];
    
    public function brand(){

        return $this->belongsTo('App\Models\Inventory\Inventory','brand_id');
      }
    
      public function  tyre_location(){
    
        return $this->belongsTo('App\Models\Inventory\Location','location');
      }
    
      public function  truck(){
          return $this->belongsTo('App\Models\Inventory\Truck','truck_id');
      }
    public function user()
    {
        return $this->belongsTo('App\Models\user');
    }
}
