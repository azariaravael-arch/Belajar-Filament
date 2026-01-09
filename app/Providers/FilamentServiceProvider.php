
<?php
use Filament\Facades\Filament;

public function boot(): void
{
    Filament::serving(function () {
        Filament::registerTheme([
            'primary' => '#1E40AF', // ubah warna primary
            'secondary' => '#F59E0B', // warna secondary
            'danger' => '#EF4444', // warna merah
            'success' => '#10B981', // warna hijau
        ]);
    });
}
