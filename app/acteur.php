<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idcentre
 * @property int $id_supp
 * @property int $ID_ACT
 * @property int $MATRICULE
 * @property string $NOM
 * @property string $PRENOM
 * @property string $N_TEL
 * @property string $fonction
 * @property Centre $centre
 * @property Acteur $acteur
 * @property Affectation[] $affectations
 * @property Affectation[] $affectations
 * @property Restitution[] $restitutions
 */
class acteur extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'acteur';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID_ACT';

    /**
     * @var array
     */
    protected $fillable = ['idcentre', 'id_supp', 'MATRICULE', 'NOM', 'PRENOM', 'N_TEL', 'fonction'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function centre()
    {
        return $this->belongsTo('App\Centre', 'idcentre', 'id_centre');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function acteur()
    {
        return $this->belongsTo('App\Acteur', 'id_supp', 'ID_ACT');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function affectations()
    {
        return $this->hasMany('App\Affectation', 'id_act', 'ID_ACT');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restitutions()
    {
        return $this->hasMany('App\Restitution', 'id_act', 'ID_ACT');
    }
}
