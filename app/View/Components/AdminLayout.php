<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    public $title;
    public function __construct($title)
    {
        $this->title = $title ?? 'Cash Control';
    }

    public function render(): View|Closure|string
    {
        return view('admin.layouts.app');
    }
}
