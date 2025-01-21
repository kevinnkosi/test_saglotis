<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Hamcrest\Type\IsNumeric;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index()
    {
        $listComande = Commande::all();
        return view('welcome', compact('listComande'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomClient' => 'required',
            'adresseClient' => 'required',
            'nomProduit' => 'required',
            'qteProduit' => 'required',
        ]);

        $commande = Commande::create([
            'nomClient' => $request->nomClient,
            'adresseClient' => $request->adresseClient,
            'nomProduit' => $request->nomProduit,
            'qteProduit' => $request->qteProduit,
        ])->id;

        if (is_numeric($commande) && $commande >  0) {
            return response()->json([
                'message' => 'Commande créée avec succès',
                'idProduit' => $commande,
            ], 201);
        } else {
            return response()->json([
                'message' => 'Erreur lors de la création de la commande'
            ], 500);
        }
    }

    public function edit(string $id)
    {
        $commandeEdit = Commande::find($id);
        return response()->json([
            'commande' => $commandeEdit,
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nomClient' => 'required',
            'adresseClient' => 'required',
            'nomProduit' => 'required',
            'qteProduit' => 'required',
        ]);

        $commande = Commande::find($id);
        $resEdit = $commande->update([
            'nomClient' => $request->nomClient,
            'adresseClient' => $request->adresseClient,
            'nomProduit' => $request->nomProduit,
            'qteProduit' => $request->qteProduit,
        ]) ? true : false;

        if (!$resEdit) {
            return response()->json([
                'message' => 'Erreur lors de la modification de la commande'
            ], 500);
        }

        return response()->json([
            'message' => 'Commande modifiée avec succès',
        ], 200);
    }

    public function delete(string $id)
    {
        $commande = Commande::find($id)->delete() ? true : false;
        return response()->json([
            'message' => 'Commande effacée avec succès',
        ]);
    }
}
