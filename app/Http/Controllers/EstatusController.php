<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstatusRequest;
use App\Http\Requests\UpdateEstatusRequest;
use App\Repositories\EstatusRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstatusController extends AppBaseController
{
    /** @var  EstatusRepository */
    private $estatusRepository;

    public function __construct(EstatusRepository $estatusRepo)
    {
        $this->estatusRepository = $estatusRepo;
    }

    /**
     * Display a listing of the Estatus.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estatusRepository->pushCriteria(new RequestCriteria($request));
        $estatuses = $this->estatusRepository->all();

        return view('estatuses.index')
            ->with('estatuses', $estatuses);
    }

    /**
     * Show the form for creating a new Estatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('estatuses.create');
    }

    /**
     * Store a newly created Estatus in storage.
     *
     * @param CreateEstatusRequest $request
     *
     * @return Response
     */
    public function store(CreateEstatusRequest $request)
    {
        $input = $request->all();

        $estatus = $this->estatusRepository->create($input);

        Flash::success('Estatus saved successfully.');

        return redirect(route('estatuses.index'));
    }

    /**
     * Display the specified Estatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estatus = $this->estatusRepository->findWithoutFail($id);

        if (empty($estatus)) {
            Flash::error('Estatus not found');

            return redirect(route('estatuses.index'));
        }

        return view('estatuses.show')->with('estatus', $estatus);
    }

    /**
     * Show the form for editing the specified Estatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estatus = $this->estatusRepository->findWithoutFail($id);

        if (empty($estatus)) {
            Flash::error('Estatus not found');

            return redirect(route('estatuses.index'));
        }

        return view('estatuses.edit')->with('estatus', $estatus);
    }

    /**
     * Update the specified Estatus in storage.
     *
     * @param  int              $id
     * @param UpdateEstatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstatusRequest $request)
    {
        $estatus = $this->estatusRepository->findWithoutFail($id);

        if (empty($estatus)) {
            Flash::error('Estatus not found');

            return redirect(route('estatuses.index'));
        }

        $estatus = $this->estatusRepository->update($request->all(), $id);

        Flash::success('Estatus updated successfully.');

        return redirect(route('estatuses.index'));
    }

    /**
     * Remove the specified Estatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estatus = $this->estatusRepository->findWithoutFail($id);

        if (empty($estatus)) {
            Flash::error('Estatus not found');

            return redirect(route('estatuses.index'));
        }

        $this->estatusRepository->delete($id);

        Flash::success('Estatus deleted successfully.');

        return redirect(route('estatuses.index'));
    }
}
