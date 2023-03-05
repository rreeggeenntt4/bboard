<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bb extends Model
{
    /* Для автоматизированного тестирования */
    /* use HasFactory; */

    /* Массив с именами полей, доступных для массового присваивания,
    заносится в защищшенное свойство fillable */
    protected $fillable = ['title', 'content', 'price'];
}
