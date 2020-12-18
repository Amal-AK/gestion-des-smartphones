<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_motif
 * @property string $cod_motif
 * @property Restitution[] $restitutions
 */
class motif_rest extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'motif_rest';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_motif';

    /**
     * @var array
     */
    protected $fillable = ['cod_motif'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restitutions()
    {
        return $this->hasMany('App\Restitution', 'id_motif', 'id_motif');
    }
}
