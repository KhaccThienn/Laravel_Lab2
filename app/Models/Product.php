<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'image', 'price'];
    public static function getAll()
    {
        $result = [];
        $data = [
            ['id' => 1, 'name' => 'Product 1', 'image' => 'https://cdn.elly.vn/uploads/2021/03/31225533/tong-quan-thuong-hieu-tui-xach-gucci.7.jpg', 'price' => 10],
            ['id' => 2, 'name' => 'Product 2', 'image' => 'https://cdn.elly.vn/uploads/2021/03/31225533/tong-quan-thuong-hieu-tui-xach-gucci.7.jpg', 'price' => 10],
            ['id' => 3, 'name' => 'Product 3', 'image' => 'https://cdn.elly.vn/uploads/2021/03/31225533/tong-quan-thuong-hieu-tui-xach-gucci.7.jpg', 'price' => 10],
            ['id' => 4, 'name' => 'Product 4', 'image' => 'https://cdn.elly.vn/uploads/2021/03/31225533/tong-quan-thuong-hieu-tui-xach-gucci.7.jpg', 'price' => 10],
            ['id' => 5, 'name' => 'Product 5', 'image' => 'https://cdn.elly.vn/uploads/2021/03/31225533/tong-quan-thuong-hieu-tui-xach-gucci.7.jpg', 'price' => 10],
            ['id' => 6, 'name' => 'Product 6', 'image' => 'https://cdn.elly.vn/uploads/2021/03/31225533/tong-quan-thuong-hieu-tui-xach-gucci.7.jpg', 'price' => 10],
            ['id' => 7, 'name' => 'Product 7', 'image' => 'https://cdn.elly.vn/uploads/2021/03/31225533/tong-quan-thuong-hieu-tui-xach-gucci.7.jpg', 'price' => 10],
            ['id' => 8, 'name' => 'Product 8', 'image' => 'https://cdn.elly.vn/uploads/2021/03/31225533/tong-quan-thuong-hieu-tui-xach-gucci.7.jpg', 'price' => 10]
        ];
        foreach ($data as $item) {
            $result[] = (new static)->fill($item);
        }

        return collect($result);
    }
}