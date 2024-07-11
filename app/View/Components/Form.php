<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public $route;
    public $title;
    public $fields;
    public $buttonSubmit;
    public $mode;

    public function __construct($route, $title, $fields, $buttonSubmit, $mode)
    {
        $this->route = $route;
        $this->title = $title;
        $this->fields = $fields;
        $this->buttonSubmit = $buttonSubmit;
        $this->$mode=$mode;
    }
    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form');
    }
}
