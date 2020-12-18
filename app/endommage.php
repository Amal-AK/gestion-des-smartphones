<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_end
 * @property int $id_affect
 * @property int $id_rest
 * @property string $remarque
 * @property int $immo
 * @property Affectation $affectation
 * @property Restitution $restitution
 */
class endommage extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'endommage';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_end';

    /**
     * @var array
     */
    protected $fillable = ['id_affect', 'id_rest', 'remarque', 'immo'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function affectation()
    {
        return $this->belongsTo('App\Affectation', 'id_affect', 'id_affect');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function restitution()
    {
        return $this->belongsTo('App\Restitution', 'id_rest', 'id_rest');
    }
}
