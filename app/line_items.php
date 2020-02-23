<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class line_items extends Model
{

        //Table name
        protected $table='line_items';
        //Primary Key
        public $primaryKey='item_no';
        //Foreign Key
        public $foreignKey='invoice_no';       


    public function invoices(){
        return $this->belongsTo(invoices::class);
    }
}