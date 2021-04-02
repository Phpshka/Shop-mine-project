<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $table='item_sizes';
    const s = 1;
    const xs = 2;
    const  xl = 3;
    const l = 4;
    const m = 5;
    protected $fillable = [
        'item_id',
        'size_id'
    ];

    public function getSizeIdAttribute($size){
        $name = '';
        switch ($size){
            case 1:
                $name = 's';
                break;
            case 2:
                $name = 'xs';
                break;
            case 3:
                $name = 'xl';
                break;
            case 4:
                $name = 'l';
                break;
            case 5:
                $name = 'm';
                break;

        }
        return $name;
    }
}
