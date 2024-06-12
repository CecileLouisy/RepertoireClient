<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create() {
        return view("create");
    }
    public function save(ContactRequest $request) {
        $contact = Contact::create($request->all());//::fn statique
        return redirect('/');
    }
    public function update($id) {
        return view("update")->with('contact',Contact::find($id));
    }
    public function saveUpdate(ContactRequest $request, $id) {
        $contact = Contact::find($id);

        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->entreprise = $request->entreprise;
        $contact->telephone = $request->telephone;     
        $contact->email = $request->email;     
        $contact->adresse = $request->adresse;     
        $contact->codePostal = $request->codePostal;     
        $contact->ville = $request->ville;     
                
        $contact->save();
        
        return redirect('/');
    }
    public function delete($id) {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/');
    }
    public function viewList() {
        $contacts = Contact::all();
        return view("index")->with('contacts',$contacts);
    }
}
