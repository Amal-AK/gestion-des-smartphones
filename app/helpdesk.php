<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_rep
 * @property string $nom
 * @property string $prenom
 * @property Diagnostic[] $diagnostics
 */
class helpdesk extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'helpdesk';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_rep';

    /**
     * @var array
     */
    protected $fillable = ['nom', 'prenom'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function diagnostics()
    {
        return $this->hasMany('App\Diagnostic', 'id_rep', 'id_rep');
    }
}
