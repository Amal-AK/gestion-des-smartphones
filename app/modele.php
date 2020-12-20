<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_model
 * @property string $cod_model
 * @property Smartphone[] $smartphones
 */
class modele extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'modele';
    public $timestamps = false;
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_model';

    /**
     * @var array
     */
    protected $fillable = ['cod_model'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function smartphones()
    {
        return $this->hasMany('App\Smartphone', 'id_model', 'id_model');
    }
}
