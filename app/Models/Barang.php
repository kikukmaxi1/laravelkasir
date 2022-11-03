<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;


class Barang extends Model
{
    use AutoNumberTrait;
    public function getAutoNumberOptions()
            {
                return [
                    'id_barang' => [
                        'format' => 'Brg?', 
                        'length' => 3 
                    ]
                ];
            }

    use HasFactory;
    protected $table='tbl_barang';
    protected $guarded = [];  
}

