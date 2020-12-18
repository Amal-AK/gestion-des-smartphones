<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_file
 * @property int $id_rest
 * @property int $id_affect
 * @property string $nom
 * @property int $type
 * @property Restitution $restitution
 * @property Affectation $affectation
 */
class docs extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_file';

    /**
     * @var array
     */
    protected $fillable = ['id_rest', 'id_affect', 'nom', 'type'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function restitution()
    {
        return $this->belongsTo('App\Restitution', 'id_rest', 'id_rest');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function affectation()
    {
        return $this->belongsTo('App\Affectation', 'id_affect', 'id_affect');
    }
}
