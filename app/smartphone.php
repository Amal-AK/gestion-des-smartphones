<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_smart
 * @property int $id_marque
 * @property int $id_model
 * @property int $id_etat
 * @property string $n_serie1
 * @property string $n_serie2
 * @property int $immo
 * @property string $affecte
 * @property Marque $marque
 * @property Modele $modele
 * @property Etat $etat
 * @property Affectation[] $affectations
 * @property Restitution[] $restitutions
 */
class smartphone extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'smartphone';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_smart';

    /**
     * @var array
     */
    protected $fillable = ['id_marque', 'id_model', 'id_etat', 'n_serie1', 'n_serie2', 'immo', 'affecte'];
    public $timestamps = false;
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function marque()
    {
        return $this->belongsTo('App\Marque', 'id_marque', 'id_marque');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function modele()
    {
        return $this->belongsTo('App\Modele', 'id_model', 'id_model');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etat()
    {
        return $this->belongsTo('App\Etat', 'id_etat', 'id_etat');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function affectations()
    {
        return $this->hasMany('App\Affectation', 'id_smart', 'id_smart');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restitutions()
    {
        return $this->hasMany('App\Restitution', 'id_smart', 'id_smart');
    }
}
