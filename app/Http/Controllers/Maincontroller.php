<?php

namespace App\Http\Controllers;

use App\Models\Actu;
use App\Models\Categorie;
use App\Models\Plat;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    private $heures = [
        // crénaux du midi
        '12:45:00'=>'12:45',
        '13:00:00'=>'13:00',
        '13:15:00'=>'13:15',
        '13:30:00'=>'13:30',
        '13:45:00'=>'13:45',
        '14:00:00'=>'14:00',


        // crénaux du soir
        '18:00:00'=>'18:00',
        '18:15:00'=>'18:15',
        '18:30:00'=>'18:30',
        '18:45:00'=>'18:45',
        '19:00:00'=>'19:00',
        '19:15:00'=>'19:15',
        '19:30:00'=>'19:30',
        '19:45:00'=>'19:45',
        '20:00:00'=>'20:00',
        '20:15:00'=>'20:15',
        '20:30:00'=>'20:30',
];
    public function home()
    {
        $actus = Actu::all();
        return view('home', [
            'actus' => $actus,
        ]);
    }
    public function menu()
    {
        $categories =  Categorie::all();
        return view('menu', [
            'categories' => $categories,
        ]);
    }
    public function plat(int $id)
    {
        $plat =  Plat::find($id);   //genere une requete sql qui permet de recuperer un plat par son id
        return view('plat', [
            'plat' => $plat,
        ]);
    }
    public function reservation()
    {
    return view ('reservation' ,[
        'heures' => $this->heures,
    ]);
    }

    public function reservationStore(Request $request)
    {
        $heures = implode(',', $this->heures);
        $validated = $request->validate([
            'nom' => 'required|min:3|max:50',
            'couverts' => 'required|numeric|gte:1|lte:16',
            'heure' => "required|in:{$heures}",
            'jour' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            'telephone' => 'required',
            'commentaires' => '',
        ]);
        dd($validated);
    }
    public function cours()
        {
            return view ('cours');
        }
}