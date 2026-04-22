<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class HelloUser extends Widget
{
    protected static string $view = 'filament.widgets.hello-user';

    public function getColumnSpan(): int|string|array
    {
        return 'full';
    }
}
