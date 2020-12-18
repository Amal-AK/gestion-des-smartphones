<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_etat
 * @property string $cod_etat
 * @property Affectation[] $affectations
 * @property Restitution[] $restitutions
 * @property Smartphone[] $smartphones
 */
class etat extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'etat';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_etat';

    /**
     * @var array
     */
    protected $fillable = ['cod_etat'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function affectations()
    {
        return $this->hasMany('App\Affectation', 'id_etat', 'id_etat');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restitutions()
    {
        return $this->hasMany('App\Restitution', 'id_etat', 'id_etat');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function smartphones()
    {
        return $this->hasMany('App\Smartphone', 'id_etat', 'id_etat');
    }
}
