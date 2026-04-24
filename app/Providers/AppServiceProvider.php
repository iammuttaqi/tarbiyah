<?php

namespace App\Providers;

use Filament\Forms\Components\RichEditor;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RichEditor::configureUsing(function (RichEditor $component): void {
            $component->toolbarButtons([
                ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                ['h2', 'h3'],
                ['alignStart', 'alignCenter', 'alignEnd'],
                // ['blockquote', 'codeBlock', 'bulletList', 'orderedList'],
                // ['table', 'attachFiles'],
                ['undo', 'redo'],
            ]);
        });
    }
}
