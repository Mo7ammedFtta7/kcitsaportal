<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevehicleCoverageRequest;
use App\Http\Requests\UpdatevehicleCoverageRequest;
use App\Repositories\vehicleCoverageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models as db;

class vehicleCoverageController extends AppBaseController
{
    /** @var  vehicleCoverageRepository */
    private $vehicleCoverageRepository;

    public function __construct(vehicleCoverageRepository $vehicleCoverageRepo)
    {
        $this->vehicleCoverageRepository = $vehicleCoverageRepo;
    }

    /**
     * Display a listing of the vehicleCoverage.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vehicleCoverageRepository->pushCriteria(new RequestCriteria($request));
        $vehicleCoverages = $this->vehicleCoverageRepository->all();

        return view('vehicle_coverages.index')
            ->with('vehicleCoverages', $vehicleCoverages);
    }

    /**
     * Show the form for creating a new vehicleCoverage.
     *
     * @return Response
     */
    public function create()
    {   $coverages =db\coverages::pluck('name','id');
        $type= db\vehicleType::pluck('name','id');
        return view('vehicle_coverages.create')->with('type',$type)->with('coverages',$coverages);
    }

    /**
     * Store a newly created vehicleCoverage in storage.
     *
     * @param CreatevehicleCoverageRequest $request
     *
     * @return Response
     */
    public function store(CreatevehicleCoverageRequest $request)
    {
        $input = $request->all();

        $vehicleCoverage = $this->vehicleCoverageRepository->create($input);

        Flash::success('Vehicle Coverage saved successfully.');

        return redirect(route('vehicleCoverages.index'));
    }

    /**
     * Display the specified vehicleCoverage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehicleCoverage = $this->vehicleCoverageRepository->findWithoutFail($id);

        if (empty($vehicleCoverage)) {
            Flash::error('Vehicle Coverage not found');

            return redirect(route('vehicleCoverages.index'));
        }

        return view('vehicle_coverages.show')->with('vehicleCoverage', $vehicleCoverage);
    }

    /**
     * Show the form for editing the specified vehicleCoverage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehicleCoverage = $this->vehicleCoverageRepository->findWithoutFail($id);

        if (empty($vehicleCoverage)) {
            Flash::error('Vehicle Coverage not found');

            return redirect(route('vehicleCoverages.index'));
        }

        return view('vehicle_coverages.edit')->with('vehicleCoverage', $vehicleCoverage);
    }

    /**
     * Update the specified vehicleCoverage in storage.
     *
     * @param  int              $id
     * @param UpdatevehicleCoverageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevehicleCoverageRequest $request)
    {
        $vehicleCoverage = $this->vehicleCoverageRepository->findWithoutFail($id);

        if (empty($vehicleCoverage)) {
            Flash::error('Vehicle Coverage not found');

            return redirect(route('vehicleCoverages.index'));
        }

        $vehicleCoverage = $this->vehicleCoverageRepository->update($request->all(), $id);

        Flash::success('Vehicle Coverage updated successfully.');

        return redirect(route('vehicleCoverages.index'));
    }

    /**
     * Remove the specified vehicleCoverage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vehicleCoverage = $this->vehicleCoverageRepository->findWithoutFail($id);

        if (empty($vehicleCoverage)) {
            Flash::error('Vehicle Coverage not found');

            return redirect(route('vehicleCoverages.index'));
        }

        $this->vehicleCoverageRepository->delete($id);

        Flash::success('Vehicle Coverage deleted successfully.');

        return redirect(route('vehicleCoverages.index'));
    }
}
