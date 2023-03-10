<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
    
     */
    public $name = '';
    public function __construct($name)
    {
        $this->name = $name;
    }

     public function render()
    {
        
        return view('components.navbar');
    }
    
}
