<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Message extends Model
{
    // Kolom yang boleh diisi lewat form.
    protected $fillable = ['content'];
}

