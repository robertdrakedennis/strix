<?php

namespace Strix\View\Components;

use Illuminate\View\Component;

class Link extends Component
{
    public bool $external;

    public string $url;

    public string $size;

    public string $variant;

    public string $active;

    /**
     * Create a new component instance.
     *
     * @param bool $external
     * @param string $url
     * @param string $size
     * @param string $variant
     * @param string $active
     */
    public function __construct(
        bool $external = false,
        string $url = '/',
        string $size = 'md',
        string $variant = 'primary',
        string $active = 'link--not-active'
    )
    {
        $this->external = $external;
        $this->url = $url;
        $this->size = $size;
        $this->variant = $variant;
        $this->active = $active;

        $this->determineActiveClass();
    }

    /**
     * Check if the url is the exact same as the request path.
     * If so, bind active accordingly
     *
     * @return void
     */
    protected function determineActiveClass(): void
    {
        if ($this->url === '/'  . request()->path()) {
            $this->active = 'link--active';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.link');
    }
}
