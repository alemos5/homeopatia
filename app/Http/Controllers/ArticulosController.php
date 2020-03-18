<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateArticulosRequest;
use App\Http\Requests\UpdateArticulosRequest;
use App\Repositories\ArticulosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ArticulosController extends AppBaseController
{
    /** @var  ArticulosRepository */
    private $articulosRepository;

    public function __construct(ArticulosRepository $articulosRepo)
    {
        $this->articulosRepository = $articulosRepo;
    }

    /**
     * Display a listing of the Articulos.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {


        $this->articulosRepository->pushCriteria(new RequestCriteria($request));
        $articulos = $this->articulosRepository->all();

        return view('articulos.index')
            ->with('articulos', $articulos);
    }

    /**
     * Show the form for creating a new Articulos.
     *
     * @return Response
     */
    public function create()
    {
        return view('articulos.create');
    }

    /**
     * Store a newly created Articulos in storage.
     *
     * @param CreateArticulosRequest $request
     *
     * @return Response
     */
    public function store(CreateArticulosRequest $request)
    {
        $input = $request->all();

        $articulos = $this->articulosRepository->create($input);

        Flash::success('Articulos saved successfully.');

        return redirect(route('articulos.index'));
    }

    /**
     * Display the specified Articulos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $articulos = $this->articulosRepository->findWithoutFail($id);

        if (empty($articulos)) {
            Flash::error('Articulos not found');

            return redirect(route('articulos.index'));
        }

        return view('articulos.show')->with('articulos', $articulos);
    }

    /**
     * Show the form for editing the specified Articulos.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $articulos = $this->articulosRepository->findWithoutFail($id);

        if (empty($articulos)) {
            Flash::error('Articulos not found');

            return redirect(route('articulos.index'));
        }

        return view('articulos.edit')->with('articulos', $articulos);
    }

    /**
     * Update the specified Articulos in storage.
     *
     * @param  int              $id
     * @param UpdateArticulosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateArticulosRequest $request)
    {
        $articulos = $this->articulosRepository->findWithoutFail($id);

        if (empty($articulos)) {
            Flash::error('Articulos not found');

            return redirect(route('articulos.index'));
        }

        $articulos = $this->articulosRepository->update($request->all(), $id);

        Flash::success('Articulos updated successfully.');

        return redirect(route('articulos.index'));
    }

    /**
     * Remove the specified Articulos from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $articulos = $this->articulosRepository->findWithoutFail($id);

        if (empty($articulos)) {
            Flash::error('Articulos not found');

            return redirect(route('articulos.index'));
        }

        $this->articulosRepository->delete($id);

        Flash::success('Articulos deleted successfully.');

        return redirect(route('articulos.index'));
    }
}
