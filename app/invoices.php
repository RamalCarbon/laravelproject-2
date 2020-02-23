<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoices extends Model
{
        //Table name
        protected $table='invoices';
        //Primary Key
        public $primaryKey='invoice_no';
        //Timestamps
        public $timestamps=true;

    public function line_items(){
        return $this->hasMany(line_items::class);
    }
}