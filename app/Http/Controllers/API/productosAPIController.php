<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateproductosAPIRequest;
use App\Http\Requests\API\UpdateproductosAPIRequest;
use App\Models\productos;
use App\Repositories\productosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class productosController
 * @package App\Http\Controllers\API
 */

class productosAPIController extends AppBaseController
{
    /** @var  productosRepository */
    private $productosRepository;

    public function __construct(productosRepository $productosRepo)
    {
        $this->productosRepository = $productosRepo;
    }

    /**
     * Display a listing of the productos.
     * GET|HEAD /productos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->productosRepository->pushCriteria(new RequestCriteria($request));
        $this->productosRepository->pushCriteria(new LimitOffsetCriteria($request));
        $productos = $this->productosRepository->all();

        return $this->sendResponse($productos->toArray(), 'Productos retrieved successfully');
    }

    /**
     * Store a newly created productos in storage.
     * POST /productos
     *
     * @param CreateproductosAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateproductosAPIRequest $request)
    {
        $input = $request->all();

        $productos = $this->productosRepository->create($input);

        return $this->sendResponse($productos->toArray(), 'Productos saved successfully');
    }

    /**
     * Display the specified productos.
     * GET|HEAD /productos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var productos $productos */
        $productos = $this->productosRepository->findWithoutFail($id);

        if (empty($productos)) {
            return $this->sendError('Productos not found');
        }

        return $this->sendResponse($productos->toArray(), 'Productos retrieved successfully');
    }

    /**
     * Update the specified productos in storage.
     * PUT/PATCH /productos/{id}
     *
     * @param  int $id
     * @param UpdateproductosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductosAPIRequest $request)
    {
        $input = $request->all();

        /** @var productos $productos */
        $productos = $this->productosRepository->findWithoutFail($id);

        if (empty($productos)) {
            return $this->sendError('Productos not found');
        }

        $productos = $this->productosRepository->update($input, $id);

        return $this->sendResponse($productos->toArray(), 'productos updated successfully');
    }

    /**
     * Remove the specified productos from storage.
     * DELETE /productos/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var productos $productos */
        $productos = $this->productosRepository->findWithoutFail($id);

        if (empty($productos)) {
            return $this->sendError('Productos not found');
        }

        $productos->delete();

        return $this->sendResponse($id, 'Productos deleted successfully');
    }
}
