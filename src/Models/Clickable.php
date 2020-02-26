<?php


namespace AnyImage\Clickable\Models;


trait Clickable {

    public function clicks() {
        return $this->morphMany( Click::class, 'clickable' );
    }

}
