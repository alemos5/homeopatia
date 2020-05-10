<?php

namespace App\Http\Controllers;

use App\Creditos;
use App\Http\Requests\CreateClientesCreditosRequest;
use App\Http\Requests\UpdateClientesCreditosRequest;
use App\Models\ClientesCreditos;
use App\Repositories\ClientesCreditosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ClientesCreditosController extends AppBaseController
{
    /** @var  ClientesCreditosRepository */
    private $clientesCreditosRepository;

    public function __construct(ClientesCreditosRepository $clientesCreditosRepo)
    {
        $this->clientesCreditosRepository = $clientesCreditosRepo;
    }

    /**
     * Display a listing of the ClientesCreditos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->clientesCreditosRepository->pushCriteria(new RequestCriteria($request));
        $clientesCreditos = $this->clientesCreditosRepository->all();

        return view('clientes_creditos.index')
            ->with('clientesCreditos', $clientesCreditos);
    }

    /**
     * Show the form for creating a new ClientesCreditos.
     *
     * @return Response
     */
    public function create()
    {
        return view('clientes_creditos.create');
    }

    /**
     * Store a newly created ClientesCreditos in storage.
     *
     * @param CreateClientesCreditosRequest $request
     *
     * @return Response
     */
    public function store(CreateClientesCreditosRequest $request)
    {
        $input = $request->all();

        $clientesCreditos = $this->clientesCreditosRepository->create($input);

        Flash::success('Clientes Creditos saved successfully.');

        return redirect(route('clientesCreditos.index'));
    }

    /**
     * Display the specified ClientesCreditos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clientesCreditos = $this->clientesCreditosRepository->findWithoutFail($id);

        if (empty($clientesCreditos)) {
            Flash::error('Clientes Creditos not found');

            return redirect(route('clientesCreditos.index'));
        }

        return view('clientes_creditos.show')->with('clientesCreditos', $clientesCreditos);
    }

    /**
     * Show the form for editing the specified ClientesCreditos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

//        $clientesCreditos = $this->clientesCreditosRepository->findWithoutFail($id);

        $clientesCreditos = Creditos::where('id', $id)->first();

        if (empty($clientesCreditos)) {
            Flash::error('Clientes Creditos not found');

            return redirect(route('clientesCreditos.index'));
        }

        return view('creditos.edit')->with('clientesCreditos', $clientesCreditos);
    }

    /**
     * Update the specified ClientesCreditos in storage.
     *
     * @param  int              $id
     * @param UpdateClientesCreditosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClientesCreditosRequest $request)
    {
//        $clientesCreditos = $this->clientesCreditosRepository->findWithoutFail($id);
        $clientesCreditos = Creditos::where('id', $id)->first();



        if (empty($clientesCreditos)) {
            Flash::error('Créditos not found');

            return redirect(route('creditos.index'));
        }

        $clientesCreditos->cantidad = $request->cantidad;
        $clientesCreditos->fecha = date("Y-m-d H:i:s", strtotime($request->fecha));
        $clientesCreditos->save();

        Flash::success('Crédito Actualizado.');

        return redirect(route('creditos.index'));
    }

    /**
     * Remove the specified ClientesCreditos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $clientesCreditos = $this->clientesCreditosRepository->findWithoutFail($id);

        if (empty($clientesCreditos)) {
            Flash::error('Clientes Creditos not found');

            return redirect(route('clientesCreditos.index'));
        }

        $this->clientesCreditosRepository->delete($id);

        Flash::success('Clientes Creditos deleted successfully.');

        return redirect(route('clientesCreditos.index'));
    }
}
