<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_rest
 * @property int $id_motif
 * @property int $id_etat
 * @property int $id_act
 * @property int $id_smart
 * @property string $date_rest
 * @property int $immo
 * @property Etat $etat
 * @property Acteur $acteur
 * @property Smartphone $smartphone
 * @property MotifRest $motifRest
 * @property Diagnostic[] $diagnostics
 * @property Doc[] $docs
 * @property Endommage[] $endommages
 */
class restitution extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'restitution';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_rest';

    /**
     * @var array
     */
    protected $fillable = ['id_motif', 'id_etat', 'id_act', 'id_smart', 'date_rest', 'immo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etat()
    {
        return $this->belongsTo('App\Etat', 'id_etat', 'id_etat');
    }

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
    public function motifRest()
    {
        return $this->belongsTo('App\MotifRest', 'id_motif', 'id_motif');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function diagnostics()
    {
        return $this->hasMany('App\Diagnostic', 'id_rest', 'id_rest');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function docs()
    {
        return $this->hasMany('App\Doc', 'id_rest', 'id_rest');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function endommages()
    {
        return $this->hasMany('App\Endommage', 'id_rest', 'id_rest');
    }
}
