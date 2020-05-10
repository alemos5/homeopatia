<?php

namespace App\Http\Controllers;

use App\Creditos;
use App\Pricing;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreditosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$creditos = Creditos::where('id', 1)->get();
//        $creditos = Creditos::whereNotNull('cliente_id')->get();
        $creditos = Creditos::all();
        return view('creditos.index', compact(['creditos']));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consolidado()
    {
        $creditos = DB::select(
            "SELECT cliente_id, SUM(cantidad) as cantidad FROM clientes_creditos GROUP BY cliente_id; "
        );
        return view('creditos.index_consolidado', compact(['creditos']));
    }

    public function store(Request $request)
    {

        $cantidad = $request->input('cantidad');
        $id_cliente = $request->input('cliente_id');

        Creditos::create([
            'cliente_id' => $id_cliente,
            'cantidad' => intval($cantidad),
            'tipo' => 'Credito',
            'fecha' => date("Y-m-d")
        ]);

        return redirect()->route('users.index')
            ->with('info','Abono de '.$cantidad.' Créditos realizado satisfactoriamente.');
    }

    public function pricing()
    {
        $promocion = Pricing::where('promocion','=','1')->first();
        $princings = Pricing::where('promocion','!=','1')->get();
        $sincard = 1;

        return view('creditos.promociones', compact('promocion', 'princings', 'sincard'));
    }

    public function promociones()
    {
        $promocion = Pricing::where('promocion','=','1')->first();
        $princings = Pricing::where('promocion','!=','1')->get();
        $sincard = 1;

        return view('creditos.promociones', compact('promocion', 'princings', 'sincard'));
    }

    public function abonar($cliente_id)
    {
        return view('creditos.create', compact('cliente_id'));
    }

    public function show($id)
    {
        $clientesCreditos = Creditos::where('id', $id)->firts();

        if (empty($clientesCreditos)) {
            Flash::error('Clientes Creditos not found');

            return redirect(route('clientesCreditos.index'));
        }

        return view('clientes_creditos.show')->with('clientesCreditos', $clientesCreditos);
    }

}
