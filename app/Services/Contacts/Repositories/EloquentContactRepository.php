<?php
declare(strict_types=1);

namespace App\Services\Contacts\Repositories;

use App\Models\Contact;

class EloquentContactRepository implements ContactRepositoryInterface
{

    public function find(int $id)
    {
        return Contact::find($id);
    }

    public function createFromArray(string $id, object $data): Contact
    {
        $contact = new Contact();

        $contact->create([
            'id' => $id,
            'membership_date'   => $data->membership_date,
            'name'              => $data->name,
            'age'               => $data->age,
            'city'              => $data->city,
            'numbers'           => json_encode($data->numbers),
        ]);

        return $contact;
    }

    public function updateFromArray(Contact $contact, object $data)
    {
        $contact->membership_date   = $data->membership_date;
        $contact->name              = $data->name;
        $contact->age               = $data->age;
        $contact->city              = $data->city;
        $contact->numbers           = json_encode($data->numbers);

        $contact->save();

        return $contact;
    }
}
