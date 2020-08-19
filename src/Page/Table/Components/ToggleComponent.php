<?php

namespace Fjord\Page\Table\Components;

class ToggleComponent extends ColumnComponent
{
    /**
     * Set route prefix.
     *
     * @param  string $routePrefix
     * @return $this
     */
    public function routePrefix($routePrefix)
    {
        return $this->prop('routePrefix', $routePrefix);
    }
}
