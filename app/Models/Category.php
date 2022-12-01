<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'status'];
    public static function getAll()
    {
        $result = [];
        $data = [
            ['id' =>  1, 'name' => 'Áo nam', 'status' => 1],
            ['id' =>  2, 'name' => 'Áo nữ', 'status' => 0],
            ['id' =>  3, 'name' => 'Quần bò', 'status' => 0],
            ['id' =>  4, 'name' => 'Túi xách', 'status' => 1],
            ['id' =>  5, 'name' => 'Ví da', 'status' => 1],
            ['id' =>  6, 'name' => 'Giày dép', 'status' => 1],
            ['id' =>  7, 'name' => 'Dây lưng', 'status' => 1],
            ['id' =>  8, 'name' => 'Đồng hồ', 'status' => 1]
        ];

        foreach ($data as $item) {
            $result[] = (new static)->fill($item);
        }

        return collect($result);
    }

}