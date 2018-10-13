<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateadminsAPIRequest;
use App\Http\Requests\API\UpdateadminsAPIRequest;
use App\Models\admins;
use App\Repositories\adminsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class adminsController
 * @package App\Http\Controllers\API
 */

class adminsAPIController extends AppBaseController
{
    /** @var  adminsRepository */
    private $adminsRepository;

    public function __construct(adminsRepository $adminsRepo)
    {
        $this->adminsRepository = $adminsRepo;
    }

    /**
     * Display a listing of the admins.
     * GET|HEAD /admins
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->adminsRepository->pushCriteria(new RequestCriteria($request));
        $this->adminsRepository->pushCriteria(new LimitOffsetCriteria($request));
        $admins = $this->adminsRepository->all();

        return $this->sendResponse($admins->toArray(), 'Admins retrieved successfully');
    }

    /**
     * Store a newly created admins in storage.
     * POST /admins
     *
     * @param CreateadminsAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateadminsAPIRequest $request)
    {
        $input = $request->all();

        $admins = $this->adminsRepository->create($input);

        return $this->sendResponse($admins->toArray(), 'Admins saved successfully');
    }

    /**
     * Display the specified admins.
     * GET|HEAD /admins/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var admins $admins */
        $admins = $this->adminsRepository->findWithoutFail($id);

        if (empty($admins)) {
            return $this->sendError('Admins not found');
        }

        return $this->sendResponse($admins->toArray(), 'Admins retrieved successfully');
    }

    /**
     * Update the specified admins in storage.
     * PUT/PATCH /admins/{id}
     *
     * @param  int $id
     * @param UpdateadminsAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateadminsAPIRequest $request)
    {
        $input = $request->all();

        /** @var admins $admins */
        $admins = $this->adminsRepository->findWithoutFail($id);

        if (empty($admins)) {
            return $this->sendError('Admins not found');
        }

        $admins = $this->adminsRepository->update($input, $id);

        return $this->sendResponse($admins->toArray(), 'admins updated successfully');
    }

    /**
     * Remove the specified admins from storage.
     * DELETE /admins/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var admins $admins */
        $admins = $this->adminsRepository->findWithoutFail($id);

        if (empty($admins)) {
            return $this->sendError('Admins not found');
        }

        $admins->delete();

        return $this->sendResponse($id, 'Admins deleted successfully');
    }
}
