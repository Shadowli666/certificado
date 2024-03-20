<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Certificado extends Model
{
    use HasFactory;
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
    protected $fillable = ['faculty_id', 'title', 'hours'];
    /**
    * Indicates if the model should be timestamped.
    *
    * @var bool
    */
    public $timestamps = true;
    /**
    * Get the person that owns the Certificado
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    
    /**
    * Get the faculty that owns the Certificado
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Facultad::class, 'faculty_id', 'id');
    }
    
    public function test($person_id)
    {
        return $this->leftJoin('persona_certificados AS pc', function($join) {
            $join->on('c.id', '=', 'pc.certificado_id')
            ->where('pc.person_id', '=', $person_id);
        })
        ->whereNull('pc.certificado_id')
        ->select('c.*')
        ->get();
    }
}

// select c.* from certificados c 
// where c.id 
// not in 
// (select pc.certificado_id from persona_certificados pc where pc.person_id = 1) 

// SELECT c.*
// FROM certificados c
// LEFT JOIN persona_certificados pc ON c.id = pc.certificado_id AND pc.person_id = 1
// WHERE pc.certificado_id IS NULL;
