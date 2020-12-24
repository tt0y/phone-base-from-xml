<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Services\Contacts\ContactService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use SimpleXMLElement;

class ContactsController extends Controller
{
    /**
     * @var ContactService
     */
    protected ContactService $contactService;

    /**
     * @var string
     */
    protected $xmlUrl = 'xml/clients.xml';

    /**
     * ContactController constructor.
     * @param ContactService $contactService
     */
    public function __construct(
        ContactService $contactService
    )
    {
        $this->contactService = $contactService;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $contact = new Contact();

        $contacts = $contact->paginate(10);

        return view('contacts', ['contacts' => $contacts]);
    }

    /**
     * @return array
     */
    public function loadDataFromXml(Contact $contact)
    {
        $contacts = array();

        $xmlString = file_get_contents($this->xmlUrl);

        $xmlObject = simplexml_load_string($xmlString);

        foreach ($xmlObject as $xmlNode) {

            foreach ($xmlNode->attributes() as $key => $value) {

                if ($key == 'id') {
                    $findedContact = Contact::find($value);

                    if ($findedContact) {
                        $contacts[] = $this->contactService->updateContact($findedContact, $xmlNode);

                    }else {
                        $contacts[] = $this->contactService->storeContact($value, $xmlNode);
                    }
                }
            }
        }
        return $contacts;
    }
}
