<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListUser extends Model
{
    protected $fillable = [
        'descripcion',
        'user_id'
    ];
    protected $table = "list-users";
    public function user(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
