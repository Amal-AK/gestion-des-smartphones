<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_marque
 * @property string $cod_marque
 * @property Smartphone[] $smartphones
 */
class marque extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'marque';
    public $timestamps = false;
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_marque';

    /**
     * @var array
     */
    protected $fillable = ['cod_marque'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function smartphones()
    {
        return $this->hasMany('App\Smartphone', 'id_marque', 'id_marque');
    }
}
