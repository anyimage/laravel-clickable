<?php

namespace AnyImage\Clickable\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Click extends Model {
    use SoftDeletes;

    public $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    /**
     * @var array
     */
    protected $guarded = [];
    protected $appends = [ 'created_at_utc' ];

    public function clickable() {
        return $this->morphTo(  );
    }

    public function getCreatedAtUtcAttribute() {
        return $this->created_at->tz( 'UTC' )->toDateTimeString();
    }
}
