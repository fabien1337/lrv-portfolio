<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ContactResource;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function all()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        return response()->json(ContactResource::collection($contacts));
    }

    public function trash()
    {
        $contacts = Contact::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
        return response()->json(ContactResource::collection($contacts));
    }

    public function find(int $id)
    {
        $this->seen($id);
        $contact = new ContactResource(Contact::find($id));
        return response()->json($contact);
    }

    public function delete(Request $request)
    {
        Contact::whereIn('id', $request->input('ids'))->delete();
        $contacts = ContactResource::collection(Contact::orderBy('created_at', 'desc')->paginate(10));
        $nb_mails = Contact::count();
        $nb_trashed_mails = Contact::onlyTrashed()->count();
        return response()->json(compact('contacts', 'nb_mails', 'nb_trashed_mails'));
    }

    public function restore(Request $request)
    {
        Contact::whereIn('id', $request->input('ids'))->restore();
        $contacts = ContactResource::collection(Contact::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10));
        $nb_mails = Contact::count();
        $nb_trashed_mails = Contact::onlyTrashed()->count();
        return response()->json(compact('contacts', 'nb_mails', 'nb_trashed_mails'));
    }

    private function seen(int $id)
    {
        $contact = Contact::find($id);
        if ($contact !== null) {
            $contact->is_seen = true;
            $contact->save();
        }
    }
}
