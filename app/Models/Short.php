<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Short extends Model
{
    use HasFactory;

    protected $fillable = [
        'short_code', 'url','id','number_of_visitors'
    ];

    public static function randomShortCode($length = 6)
    {
        $shortCode = Str::random($length);

        if(self::where('short_code', $shortCode)->exists())
            return self::randomShortCode($length);

        return $shortCode;
    }

    public static function getByShortCode($short_code)
    {
      return  self::where('short_code', $short_code)->get();
    }

}
