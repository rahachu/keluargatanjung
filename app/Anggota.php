<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = "anggota";
    public $timestamps = false;
    protected $primaryKey = 'panggilan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nama','panggilan','prodi','profpic'];
    /**
     * Get the comments for the blog post.
     */
    public function avatars()
    {
        return $this->hasMany('App\Avatar','panggilan');
    }
}
