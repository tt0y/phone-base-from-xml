<?php
declare(strict_types=1);

namespace App\Services\Contacts;

use App\Models\Contact;
use App\Services\Contacts\Handlers\CreateContactHandler;
use App\Services\Contacts\Repositories\ContactRepositoryInterface;

/**
 * Class ContactService
 * @package App\Services\Contact
 */
class ContactService
{
    /**
     * @var ContactRepositoryInterface
     */
    private ContactRepositoryInterface $contactRepository;
    /**
     * @var CreateContactHandler
     */
    private CreateContactHandler $createContactHandler;

    /**
     * ContactService constructor.
     * @param CreateContactHandler $createContactHandler
     * @param ContactRepositoryInterface $contactRepository
     */
    public function __construct(
        CreateContactHandler $createContactHandler,
        ContactRepositoryInterface $contactRepository
    )
    {
        $this->createContactHandler = $createContactHandler;
        $this->contactRepository = $contactRepository;
    }

    /**
     * @param string $id
     * @param array $data
     * @return Contact
     */
    public function storeContact(string $id, object $data): Contact
    {
        return $this->createContactHandler->handle($id, $data);
    }

    /**
     * @param Contact $contact
     * @param array $data
     * @return Contact
     */
    public function updateContact(Contact $contact, object $data): Contact
    {
        return $this->contactRepository->updateFromArray($contact, $data);
    }
}
