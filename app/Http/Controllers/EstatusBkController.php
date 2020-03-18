<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstatusBkRequest;
use App\Http\Requests\UpdateEstatusBkRequest;
use App\Repositories\EstatusBkRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstatusBkController extends AppBaseController
{
    /** @var  EstatusBkRepository */
    private $estatusBkRepository;

    public function __construct(EstatusBkRepository $estatusBkRepo)
    {
        $this->estatusBkRepository = $estatusBkRepo;
    }

    /**
     * Display a listing of the EstatusBk.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estatusBkRepository->pushCriteria(new RequestCriteria($request));
        $estatusBks = $this->estatusBkRepository->all();

        return view('estatus_bks.index')
            ->with('estatusBks', $estatusBks);
    }

    /**
     * Show the form for creating a new EstatusBk.
     *
     * @return Response
     */
    public function create()
    {
        return view('estatus_bks.create');
    }

    /**
     * Store a newly created EstatusBk in storage.
     *
     * @param CreateEstatusBkRequest $request
     *
     * @return Response
     */
    public function store(CreateEstatusBkRequest $request)
    {
        $input = $request->all();

        $estatusBk = $this->estatusBkRepository->create($input);

        Flash::success('Estatus Bk saved successfully.');

        return redirect(route('estatusBks.index'));
    }

    /**
     * Display the specified EstatusBk.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estatusBk = $this->estatusBkRepository->findWithoutFail($id);

        if (empty($estatusBk)) {
            Flash::error('Estatus Bk not found');

            return redirect(route('estatusBks.index'));
        }

        return view('estatus_bks.show')->with('estatusBk', $estatusBk);
    }

    /**
     * Show the form for editing the specified EstatusBk.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estatusBk = $this->estatusBkRepository->findWithoutFail($id);

        if (empty($estatusBk)) {
            Flash::error('Estatus Bk not found');

            return redirect(route('estatusBks.index'));
        }

        return view('estatus_bks.edit')->with('estatusBk', $estatusBk);
    }

    /**
     * Update the specified EstatusBk in storage.
     *
     * @param  int              $id
     * @param UpdateEstatusBkRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstatusBkRequest $request)
    {
        $estatusBk = $this->estatusBkRepository->findWithoutFail($id);

        if (empty($estatusBk)) {
            Flash::error('Estatus Bk not found');

            return redirect(route('estatusBks.index'));
        }

        $estatusBk = $this->estatusBkRepository->update($request->all(), $id);

        Flash::success('Estatus Bk updated successfully.');

        return redirect(route('estatusBks.index'));
    }

    /**
     * Remove the specified EstatusBk from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estatusBk = $this->estatusBkRepository->findWithoutFail($id);

        if (empty($estatusBk)) {
            Flash::error('Estatus Bk not found');

            return redirect(route('estatusBks.index'));
        }

        $this->estatusBkRepository->delete($id);

        Flash::success('Estatus Bk deleted successfully.');

        return redirect(route('estatusBks.index'));
    }
}
