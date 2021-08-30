<?php

namespace MoonDev\Maecenats\Widget;

use XF\Widget\AbstractWidget;

class Maecenats extends AbstractWidget
{
    public function render()
    {
        return $this->renderer('moon_maecenats_widget');
    }
}