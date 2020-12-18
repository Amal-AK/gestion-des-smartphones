<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_centre
 * @property string $cod_centre
 * @property Acteur[] $acteurs
 */
class centre extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'centre';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_centre';

    /**
     * @var array
     */
    protected $fillable = ['cod_centre'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function acteurs()
    {
        return $this->hasMany('App\Acteur', 'idcentre', 'id_centre');
    }
}
