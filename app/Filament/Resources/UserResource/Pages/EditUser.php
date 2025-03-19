<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $user = $this->record;
        if (isset($data['roles'])) {
            $user->syncRoles($data['roles']); // Sync roles with Spatie
            unset($data['roles']); // Remove roles from direct database save
        }
        return $data;
    }
}
