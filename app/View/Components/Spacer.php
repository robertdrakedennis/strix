<?php

namespace Strix\View\Components;

use Illuminate\View\Component;

class Spacer extends Component
{
    public string $x;

    /**
     * Create a new component instance.
     *
     * @param string $x
     */
    public function __construct(
        string $x
    )
    {
        $this->x = $x;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.spacer');
    }
}
