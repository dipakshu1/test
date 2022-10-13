<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table='menus';
    protected $fillable =['parent_id','name','route','seq','sidebar_seq','icon','icon_class','is_sidebar'];


    public function parent()
    {
        return $this->belongsTo(Menu::class,'parent_id');
    }
    public function child()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

}
