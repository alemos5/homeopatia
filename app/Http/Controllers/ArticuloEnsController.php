<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticuloEnsRequest;
use App\Http\Requests\UpdateArticuloEnsRequest;
use App\Repositories\ArticuloEnsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArticuloEnsController extends AppBaseController
{
    /** @var  ArticuloEnsRepository */
    private $articuloEnsRepository;

    public function __construct(ArticuloEnsRepository $articuloEnsRepo)
    {
        $this->articuloEnsRepository = $articuloEnsRepo;
    }

    /**
     * Display a listing of the ArticuloEns.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->articuloEnsRepository->pushCriteria(new RequestCriteria($request));
        $articuloEns = $this->articuloEnsRepository->all();

        return view('articulo_ens.index')
            ->with('articuloEns', $articuloEns);
    }

    /**
     * Show the form for creating a new ArticuloEns.
     *
     * @return Response
     */
    public function create()
    {
        return view('articulo_ens.create');
    }

    /**
     * Store a newly created ArticuloEns in storage.
     *
     * @param CreateArticuloEnsRequest $request
     *
     * @return Response
     */
    public function store(CreateArticuloEnsRequest $request)
    {
        $input = $request->all();

        $articuloEns = $this->articuloEnsRepository->create($input);

        Flash::success('Articulo Ens saved successfully.');

        return redirect(route('articuloEns.index'));
    }

    /**
     * Display the specified ArticuloEns.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $articuloEns = $this->articuloEnsRepository->findWithoutFail($id);

        if (empty($articuloEns)) {
            Flash::error('Articulo Ens not found');

            return redirect(route('articuloEns.index'));
        }

        return view('articulo_ens.show')->with('articuloEns', $articuloEns);
    }

    /**
     * Show the form for editing the specified ArticuloEns.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $articuloEns = $this->articuloEnsRepository->findWithoutFail($id);

        if (empty($articuloEns)) {
            Flash::error('Articulo Ens not found');

            return redirect(route('articuloEns.index'));
        }

        return view('articulo_ens.edit')->with('articuloEns', $articuloEns);
    }

    /**
     * Update the specified ArticuloEns in storage.
     *
     * @param  int              $id
     * @param UpdateArticuloEnsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticuloEnsRequest $request)
    {
        $articuloEns = $this->articuloEnsRepository->findWithoutFail($id);

        if (empty($articuloEns)) {
            Flash::error('Articulo Ens not found');

            return redirect(route('articuloEns.index'));
        }

        $articuloEns = $this->articuloEnsRepository->update($request->all(), $id);

        Flash::success('Articulo Ens updated successfully.');

        return redirect(route('articuloEns.index'));
    }

    /**
     * Remove the specified ArticuloEns from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $articuloEns = $this->articuloEnsRepository->findWithoutFail($id);

        if (empty($articuloEns)) {
            Flash::error('Articulo Ens not found');

            return redirect(route('articuloEns.index'));
        }

        $this->articuloEnsRepository->delete($id);

        Flash::success('Articulo Ens deleted successfully.');

        return redirect(route('articuloEns.index'));
    }
}
