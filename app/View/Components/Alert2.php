<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/** cualquier propiedad que hagamos en la clase va poder ser accedido desde la vista */

class Alert2 extends Component
{
    public $class;
    public function __construct($type = 'info')
    {
        switch ($type) {
            case 'info':
                $class = 'bg-blue-100 border-t border-b border-blue-500 text-blue-700';
                break;

            case 'titled':
                $class = 'bg-red-100 border border-red-400 text-red-700';
                break;

            case 'success':
                $class = 'bg-green-100 border-l-4 border-green-500 text-green-700';
                break;

            case 'warning':
                $class = 'bg-orange-100 border-l-4 border-orange-500 text-orange-700';
                break;

            case 'dark':
                $class = 'bg-indigo-900 text-indigo-100 border border-indigo-700';
                break;

            default:
                $class = 'bg-gray-100 border border-gray-400 text-gray-700';
                break;
        }
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
