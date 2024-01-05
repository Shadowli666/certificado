<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class facultad extends Model
{
    use HasFactory;
    protected $table = 'facultad';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get all of the Certificado for the facultad
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Certificado(): HasMany
    {
        return $this->hasMany(Certificado::class, 'certificado_id', 'id');
    }
}
