<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $nb_mails = Contact::count();
        $nb_trashed_mails = Contact::onlyTrashed()->count();
        return view('admin.contacts.index', compact('nb_mails', 'nb_trashed_mails'));
    }

    public function trash()
    {
        $nb_mails = Contact::count();
        $nb_trashed_mails = Contact::onlyTrashed()->count();
        return view('admin.contacts.trash', compact('nb_mails', 'nb_trashed_mails'));
    }

    public function forceDelete(Request $request)
    {
        $ids = explode(',', $request->input('ids'));
        Contact::whereIn('id', $ids)->forceDelete();
        return back();
    }
}
