<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{  
    public function render()  
    {  
        return view('footer');  // Perhatikan ini  
    }  
}
