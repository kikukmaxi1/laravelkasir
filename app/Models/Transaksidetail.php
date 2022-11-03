<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;
class Transaksidetail extends Model
{
    use AutoNumberTrait;
    public function getAutoNumberOptions()
            {
                return [
                    'id_transaksidetail' => [
                        'format' => 'Trxd?', 
                        'length' => 3 
                    ]
                ];
            }

    use HasFactory;
    protected $table='tbl_transaksidetail';
    protected $guarded = []; 
}
