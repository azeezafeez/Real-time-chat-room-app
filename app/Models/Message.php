<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Group;
class Message extends Model
{
    use HasFactory;



    public function user(){
        return $this->belongsTo(User::class);

    }


    public function group(){
        return $this->belongsTo(Group::class);
    }



    public function getCreatedAtAttribute($value){
     	return Carbon::parse($value)->format('H:i');
           
     }


    protected $fillable = [
        'content',
        'group_id',
        'user_id',
        'image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];


}
