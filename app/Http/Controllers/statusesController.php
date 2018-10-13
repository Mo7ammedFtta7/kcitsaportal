<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatestatusesRequest;
use App\Http\Requests\UpdatestatusesRequest;
use App\Repositories\statusesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class statusesController extends AppBaseController
{
    /** @var  statusesRepository */
    private $statusesRepository;

    public function __construct(statusesRepository $statusesRepo)
    {
        $this->statusesRepository = $statusesRepo;
    }

    /**
     * Display a listing of the statuses.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->statusesRepository->pushCriteria(new RequestCriteria($request));
        $statuses = $this->statusesRepository->all();

        return view('statuses.index')
            ->with('statuses', $statuses);
    }

    /**
     * Show the form for creating a new statuses.
     *
     * @return Response
     */
    public function create()
    {
        return view('statuses.create');
    }

    /**
     * Store a newly created statuses in storage.
     *
     * @param CreatestatusesRequest $request
     *
     * @return Response
     */
    public function store(CreatestatusesRequest $request)
    {
        $input = $request->all();

        $statuses = $this->statusesRepository->create($input);

        Flash::success('Statuses saved successfully.');

        return redirect(route('statuses.index'));
    }

    /**
     * Display the specified statuses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $statuses = $this->statusesRepository->findWithoutFail($id);

        if (empty($statuses)) {
            Flash::error('Statuses not found');

            return redirect(route('statuses.index'));
        }

        return view('statuses.show')->with('statuses', $statuses);
    }

    /**
     * Show the form for editing the specified statuses.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $statuses = $this->statusesRepository->findWithoutFail($id);

        if (empty($statuses)) {
            Flash::error('Statuses not found');

            return redirect(route('statuses.index'));
        }

        return view('statuses.edit')->with('statuses', $statuses);
    }

    /**
     * Update the specified statuses in storage.
     *
     * @param  int              $id
     * @param UpdatestatusesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatestatusesRequest $request)
    {
        $statuses = $this->statusesRepository->findWithoutFail($id);

        if (empty($statuses)) {
            Flash::error('Statuses not found');

            return redirect(route('statuses.index'));
        }

        $statuses = $this->statusesRepository->update($request->all(), $id);

        Flash::success('Statuses updated successfully.');

        return redirect(route('statuses.index'));
    }

    /**
     * Remove the specified statuses from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $statuses = $this->statusesRepository->findWithoutFail($id);

        if (empty($statuses)) {
            Flash::error('Statuses not found');

            return redirect(route('statuses.index'));
        }

        $this->statusesRepository->delete($id);

        Flash::success('Statuses deleted successfully.');

        return redirect(route('statuses.index'));
    }
}
