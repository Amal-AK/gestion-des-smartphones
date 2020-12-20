<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_affect
 * @property int $id_act
 * @property int $id_smart
 * @property int $id_remis
 * @property int $id_etat
 * @property int $immo
 * @property string $date_attrib
 * @property string $commentaire
 * @property string $recupere_par
 * @property string $remis_par
 * @property Acteur $acteur
 * @property Smartphone $smartphone
 * @property Acteur $acteur
 * @property Etat $etat
 * @property Doc[] $docs
 * @property Endommage[] $endommages
 */
class affectation extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'affectation';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_affect';

    /**
     * @var array
     */
    protected $fillable = ['id_act', 'id_smart', 'id_remis', 'id_etat', 'immo', 'date_attrib', 'commentaire', 'recupere_par', 'remis_par'];
    public $timestamps = false;
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function acteur()
    {
        return $this->belongsTo('App\Acteur', 'id_act', 'ID_ACT');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function smartphone()
    {
        return $this->belongsTo('App\Smartphone', 'id_smart', 'id_smart');
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
    public function docs()
    {
        return $this->hasMany('App\Doc', 'id_affect', 'id_affect');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function endommages()
    {
        return $this->hasMany('App\Endommage', 'id_affect', 'id_affect');
    }
}
