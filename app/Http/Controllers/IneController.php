<?php

namespace App\Http\Controllers;
use App\Models\Ines;

use Illuminate\Http\Request;

class IneController extends Controller
{
    public function showine()
    {
        try{

            $user = Ines::paginate(100);

            return response()->json([
                'success' => true,
                'data' => $user,
            ], 200);

        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Error al obtener los usuarios de ine',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function index(Request $request)
{
        // GET PARAMETERS
        $name = $request->query('NOMBRE'); // ?NOMBRE=ALEX
        $lname = $request->query('PATERNO'); // ?PATERNO=RAMOS
        $lmname = $request->query('MATERNO'); // ?MATERNO=LOPEZ
        $curp = $request->query('CURP'); // ?CURP=ASCB0002381QWRT0

        $query = Ines::query();

        try {
        if ($name) {
            $query->where('NOMBRE', 'like', "%$name%");
        }

        if($lname){
            $query->where('PATERNO', 'like', "%$lname%");
        }

        iF($lmname){
            $query->where('MATERNO', 'like', "%$lmname%");
        }

        if ($curp) {
            $query->where('CURP', $curp);
        }

        // RESULTS
        $users = $query->paginate(10);

        return $users;

        // return response()->json([
        //     'success' => true,
        //     'data' => $users,
        // ], 200);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => 'Error al obtener los usuarios',
        ], 500);
    }
}
}
