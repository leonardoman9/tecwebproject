<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;

class AnnFilter extends Filter
{
    /**
     * Filter the products by the given string.
     *
     * @param  string|null  $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function citta(string $value = null): Builder
    {
        return $this->builder->where('citta', '===', "{$value}");
    }

}