<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'image'];

    public static function getAll()
    {
        $result = [];

        $data = [
            ['id' => '1', 'title' => 'Banner 1', 'image' => 'https://wallpaperaccess.com/full/21593.jpg'],
            ['id' => '2', 'title' => 'Banner 2', 'image' => 'https://wallpapercave.com/wp/wp11063423.jpg'],
            ['id' => '3', 'title' => 'Banner 3', 'image' => 'https://i.pinimg.com/originals/48/c7/5d/48c75d7bd09ffc80fa6bbb6f68428682.jpg'],
            ['id' => '4', 'title' => 'Banner 4', 'image' => 'https://coolhdwall.com/storage/2201/beach-waves-sunrise-anime-4k-wallpaper-3840x2160-6.jpg']
        ];
        foreach ($data as $item) {
            $result[] = (new static)->fill($item);
        }

        return collect($result);
    }
}