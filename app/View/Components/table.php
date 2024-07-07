<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class table extends Component
{
    /**
     * Create a new component instance.
     */
    public $route;
    public $columns;
    public function __construct($route=null,$columns)
    {
        $this->columns = $columns;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
