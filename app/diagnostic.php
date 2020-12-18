<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_diagno
 * @property int $id_rest
 * @property int $id_rep
 * @property string $date
 * @property string $remarque
 * @property Restitution $restitution
 * @property Helpdesk $helpdesk
 */
class diagnostic extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'diagnostic';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_diagno';

    /**
     * @var array
     */
    protected $fillable = ['id_rest', 'id_rep', 'date', 'remarque'];

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
    public function helpdesk()
    {
        return $this->belongsTo('App\Helpdesk', 'id_rep', 'id_rep');
    }
}
