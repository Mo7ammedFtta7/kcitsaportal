<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevehicleTypeRequest;
use App\Http\Requests\UpdatevehicleTypeRequest;
use App\Repositories\vehicleTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class vehicleTypeController extends AppBaseController
{
    /** @var  vehicleTypeRepository */
    private $vehicleTypeRepository;

    public function __construct(vehicleTypeRepository $vehicleTypeRepo)
    {
        $this->vehicleTypeRepository = $vehicleTypeRepo;
    }

    /**
     * Display a listing of the vehicleType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vehicleTypeRepository->pushCriteria(new RequestCriteria($request));
        $vehicleTypes = $this->vehicleTypeRepository->all();

        return view('vehicle_types.index')
            ->with('vehicleTypes', $vehicleTypes);
    }

    /**
     * Show the form for creating a new vehicleType.
     *
     * @return Response
     */
    public function create()
    {
        return view('vehicle_types.create');
    }

    /**
     * Store a newly created vehicleType in storage.
     *
     * @param CreatevehicleTypeRequest $request
     *
     * @return Response
     */
    public function store(CreatevehicleTypeRequest $request)
    {
        $input = $request->all();

        $vehicleType = $this->vehicleTypeRepository->create($input);

        Flash::success('Vehicle Type saved successfully.');

        return redirect(route('vehicleTypes.index'));
    }

    /**
     * Display the specified vehicleType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehicleType = $this->vehicleTypeRepository->findWithoutFail($id);

        if (empty($vehicleType)) {
            Flash::error('Vehicle Type not found');

            return redirect(route('vehicleTypes.index'));
        }

        return view('vehicle_types.show')->with('vehicleType', $vehicleType);
    }

    /**
     * Show the form for editing the specified vehicleType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehicleType = $this->vehicleTypeRepository->findWithoutFail($id);

        if (empty($vehicleType)) {
            Flash::error('Vehicle Type not found');

            return redirect(route('vehicleTypes.index'));
        }

        return view('vehicle_types.edit')->with('vehicleType', $vehicleType);
    }

    /**
     * Update the specified vehicleType in storage.
     *
     * @param  int              $id
     * @param UpdatevehicleTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevehicleTypeRequest $request)
    {
        $vehicleType = $this->vehicleTypeRepository->findWithoutFail($id);

        if (empty($vehicleType)) {
            Flash::error('Vehicle Type not found');

            return redirect(route('vehicleTypes.index'));
        }

        $vehicleType = $this->vehicleTypeRepository->update($request->all(), $id);

        Flash::success('Vehicle Type updated successfully.');

        return redirect(route('vehicleTypes.index'));
    }

    /**
     * Remove the specified vehicleType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vehicleType = $this->vehicleTypeRepository->findWithoutFail($id);

        if (empty($vehicleType)) {
            Flash::error('Vehicle Type not found');

            return redirect(route('vehicleTypes.index'));
        }

        $this->vehicleTypeRepository->delete($id);

        Flash::success('Vehicle Type deleted successfully.');

        return redirect(route('vehicleTypes.index'));
    }
}
