<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
//  OK Nom : chaine de caractères, obligatoire, 20 caractères maximum
//  OK Prénom : chaine de caractères, obligatoire, 20 caractères maximum
//  OK Entreprise : chaine de caractères, optionnelle, 30 caractères maximum
//  OK Téléphone : chaine de caractères, optionnelle, 10 chiffres
//  OK Email : chaine de caractères, optionnelle, doit avoir la forme d'une adresse email
//  OK Adresse : chaine de caractères, obligatoire, 100 caractères maximum
//  OK Code postal : chaine de caractères, obligatoire, 5 caractères
//  OK Ville : chaine de caractères, obligatoire, 50 caractères maximum
        return [
            "nom"=>"required|max:20",
            "prenom"=>"required|max:20",
            "entreprise"=>"max:30",
            "telephone"=>"nullable|digits:10",
            "email"=>"nullable|email:rfc,dns",
            "adresse"=>"required|max:100",
            "codePostal"=>"required|size:5",
            "ville"=>"required|max:50"
        ];
    }
    public function messages () {
        return [
            "nom.required"=>"Veuillez renseigner le nom.",
            "nom.max"=>"Le nom doit comporter 20 caractères au maximum.",
            "prenom.required"=>"Veuillez renseigner le prénom.",
            "prenom.max"=>"Le prénom doit comporter 20 caractères au maximum.",
            "entreprise.max"=>"Le nom de l'entreprise doit comporter 30 caractères au maximum.",
            "telephone.digits"=>"Le numéro de téléphone doit comporter 10 chiffres.",
            "email.email"=>"La forme de votre email est invalide.",
            "adresse.required"=>"Veuillez renseigner l'adresse.",
            "adresse.max"=>"L'adresse doit comporter 100 caractères au maximum.",
            "codePostal.required"=>"Veuillez renseigner votre code postal.",
            "codePostal.size"=>"Le code postal doit contenir 5 caractères.",
            "ville.required"=>"Veuillez renseigner la ville.",
            "ville.max"=>"La ville doit comporter au maximum 50 caractères."
        ];
    }
}
