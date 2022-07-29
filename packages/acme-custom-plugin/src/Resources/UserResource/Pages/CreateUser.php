<?php

namespace Acme\CustomPlugin\Resources\UserResource\Pages;

use Acme\CustomPlugin\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
