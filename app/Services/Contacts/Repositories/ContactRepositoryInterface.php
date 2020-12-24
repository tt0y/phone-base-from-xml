<?php

namespace App\Services\Contacts\Repositories;

use App\Models\Contact;

interface ContactRepositoryInterface
{

    public function find(int $id);

    public function createFromArray(string $id, object $data): Contact;

    public function updateFromArray(Contact $city, object $data);

}
