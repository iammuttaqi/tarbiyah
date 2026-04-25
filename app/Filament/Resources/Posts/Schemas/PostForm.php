<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (?string $state, Set $set, string $operation) => $operation === 'create' ? $set('slug', Str::slug($state ?? '')) : null),
                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Select::make('user_id')
                    ->label('Author')
                    ->relationship('author', 'name')
                    ->default(fn () => auth()->id())
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('categories')
                    ->multiple()
                    ->relationship('categories', 'name')
                    ->preload()
                    ->searchable(),
                Textarea::make('excerpt')
                    ->maxLength(500)
                    ->rows(3)
                    ->columnSpanFull(),
                FileUpload::make('featured_image')
                    ->disk('public')
                    ->directory('posts')
                    ->image()
                    ->imageEditor()
                    ->imageAspectRatio('16:9')
                    ->automaticallyOpenImageEditorForAspectRatio()
                    ->automaticallyCropImagesToAspectRatio('16:9')
                    ->automaticallyResizeImagesMode('cover')
                    ->automaticallyResizeImagesToWidth('1280')
                    ->automaticallyResizeImagesToHeight('720')
                    ->columnSpanFull(),
                RichEditor::make('body')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_published')
                    ->live()
                    ->afterStateUpdated(fn (bool $state, Get $get, Set $set) => $state && ! $get('published_at') ? $set('published_at', now()) : null),
                DateTimePicker::make('published_at'),
            ]);
    }
}
