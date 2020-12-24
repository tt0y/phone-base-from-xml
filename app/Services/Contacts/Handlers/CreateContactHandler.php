<?php
declare(strict_types=1);

namespace App\Services\Contacts\Handlers;

use App\Models\Contact;
use App\Services\Contacts\Repositories\ContactRepositoryInterface;
use Carbon\Carbon;

/**
 * Class CreateContactHandler
 * @package App\Services\Contact\Handlers
 */
class CreateContactHandler
{
    /**
     * @var ContactRepositoryInterface
     */
    private ContactRepositoryInterface $contactRepository;

    /**
     * CreateContactHandler constructor.
     * @param ContactRepositoryInterface $contactRepository
     */
    public function __construct(
        ContactRepositoryInterface $contactRepository
    )
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @param string $id
     * @param object $data
     * @return Contact
     */
    public function handle(string $id, object $data): Contact
    {
        return $this->contactRepository->createFromArray($id, $data);
    }
}
