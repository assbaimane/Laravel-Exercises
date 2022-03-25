<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

// class TitreController extends Controller
// {
//     public function show()
//     {
//         return view('welcome',[
//             'titres' => Titre::all()
//         ]);
//     }
// }