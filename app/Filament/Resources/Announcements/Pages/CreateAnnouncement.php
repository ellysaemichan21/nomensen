<?php

namespace App\Filament\Resources\Announcements\Pages;

use App\Filament\Resources\Announcements\AnnouncementResource;
use Filament\Resources\Pages\CreateRecord;

use Illuminate\Support\Str;

class CreateAnnouncement extends CreateRecord
{
    protected static string $resource = AnnouncementResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['users_id'] = auth()->id();
        $data['slug'] = Str::slug($data['title'] ?? '') . '-' . time();
        
        return $data;
    }
}
