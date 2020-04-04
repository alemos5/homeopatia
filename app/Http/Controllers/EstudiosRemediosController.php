<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEstudiosRemediosRequest;
use App\Http\Requests\UpdateEstudiosRemediosRequest;
use App\Repositories\EstudiosRemediosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class EstudiosRemediosController extends AppBaseController
{
    /** @var  EstudiosRemediosRepository */
    private $estudiosRemediosRepository;

    public function __construct(EstudiosRemediosRepository $estudiosRemediosRepo)
    {
        $this->estudiosRemediosRepository = $estudiosRemediosRepo;
    }

    /**
     * Display a listing of the EstudiosRemedios.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->estudiosRemediosRepository->pushCriteria(new RequestCriteria($request));
        $estudiosRemedios = $this->estudiosRemediosRepository->all();

        return view('estudios_remedios.index')
            ->with('estudiosRemedios', $estudiosRemedios);
    }

    /**
     * Show the form for creating a new EstudiosRemedios.
     *
     * @return Response
     */
    public function create()
    {
        return view('estudios_remedios.create');
    }

    /**
     * Store a newly created EstudiosRemedios in storage.
     *
     * @param CreateEstudiosRemediosRequest $request
     *
     * @return Response
     */
    public function store(CreateEstudiosRemediosRequest $request)
    {
        $input = $request->all();

        $estudiosRemedios = $this->estudiosRemediosRepository->create($input);

        Flash::success('Estudios Remedios saved successfully.');

        return redirect(route('estudiosRemedios.index'));
    }

    /**
     * Display the specified EstudiosRemedios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estudiosRemedios = $this->estudiosRemediosRepository->findWithoutFail($id);

        if (empty($estudiosRemedios)) {
            Flash::error('Estudios Remedios not found');

            return redirect(route('estudiosRemedios.index'));
        }

        return view('estudios_remedios.show')->with('estudiosRemedios', $estudiosRemedios);
    }

    /**
     * Show the form for editing the specified EstudiosRemedios.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estudiosRemedios = $this->estudiosRemediosRepository->findWithoutFail($id);

        if (empty($estudiosRemedios)) {
            Flash::error('Estudios Remedios not found');

            return redirect(route('estudiosRemedios.index'));
        }

        return view('estudios_remedios.edit')->with('estudiosRemedios', $estudiosRemedios);
    }

    /**
     * Update the specified EstudiosRemedios in storage.
     *
     * @param  int              $id
     * @param UpdateEstudiosRemediosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEstudiosRemediosRequest $request)
    {
        $estudiosRemedios = $this->estudiosRemediosRepository->findWithoutFail($id);

        if (empty($estudiosRemedios)) {
            Flash::error('Estudios Remedios not found');

            return redirect(route('estudiosRemedios.index'));
        }

        $estudiosRemedios = $this->estudiosRemediosRepository->update($request->all(), $id);

        Flash::success('Estudios Remedios updated successfully.');

        return redirect(route('estudiosRemedios.index'));
    }

    /**
     * Remove the specified EstudiosRemedios from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estudiosRemedios = $this->estudiosRemediosRepository->findWithoutFail($id);

        if (empty($estudiosRemedios)) {
            Flash::error('Estudios Remedios not found');

            return redirect(route('estudiosRemedios.index'));
        }

        $this->estudiosRemediosRepository->delete($id);

        Flash::success('Estudios Remedios deleted successfully.');

        return redirect(route('estudiosRemedios.index'));
    }
}
