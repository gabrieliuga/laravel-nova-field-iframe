<?php

namespace Giuga\LaravelNovaFieldIframe;

use Laravel\Nova\Fields\Field;

class Iframe extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'iframe';

    /**
     * Indicates if the element should be shown on the index view.
     *
     * @var bool
     */
    public $showOnIndex = false;
    /**
     * Indicates if the element should be shown on the creation view.
     *
     * @var bool
     */
    public $showOnCreation = false;
    /**
     * Indicates if the element should be shown on the update view.
     *
     * @var bool
     */
    public $showOnUpdate = false;

    /**
     * Set the size of the iframe.
     *
     * @param string $width
     * @param string $height
     *
     * @return $this
     */
    public function size(string $width = '100%', string $height = '600px'): self
    {
        return $this->withMeta(['width' => $width, 'height' => $height]);
    }
}
