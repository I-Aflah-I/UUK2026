<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GetPeminjaman extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('total peminjaman', Peminjaman::select()->count())
        ];
    }
}
