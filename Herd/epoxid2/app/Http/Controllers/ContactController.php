<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
        ]);

        return redirect()->back()->with('success', 'Zpráva byla odeslána!');
    }

    public function index()
    {
        $contacts = Contact::latest()->get(); // Seřazení od nejnovějších
        return view('admin.contacts', compact('contacts'));
    }

    //  OPRAVENÁ metoda destroy (musí být součástí třídy)
    public function destroy($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json(['message' => 'Kontakt nenalezen'], 404);
        }

        $contact->delete();

        return response()->json(['message' => 'Kontakt smazán úspěšně']);
    }
}



