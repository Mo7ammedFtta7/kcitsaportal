<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreaterequestsRequest;
use App\Http\Requests\UpdaterequestsRequest;
use App\Repositories\requestsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class requestsController extends AppBaseController
{
    /** @var  requestsRepository */
    private $requestsRepository;

    public function __construct(requestsRepository $requestsRepo)
    {
        $this->requestsRepository = $requestsRepo;
    }

    /**
     * Display a listing of the requests.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->requestsRepository->pushCriteria(new RequestCriteria($request));
        $requests = $this->requestsRepository->all();

        return view('requests.index')
            ->with('requests', $requests);
    }

    /**
     * Show the form for creating a new requests.
     *
     * @return Response
     */
    public function create()
    {
        return view('requests.create');
    }

    /**
     * Store a newly created requests in storage.
     *
     * @param CreaterequestsRequest $request
     *
     * @return Response
     */
    public function store(CreaterequestsRequest $request)
    {
        $input = $request->all();

        $requests = $this->requestsRepository->create($input);

        Flash::success('Requests saved successfully.');

        return redirect(route('requests.index'));
    }

    /**
     * Display the specified requests.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $requests = $this->requestsRepository->findWithoutFail($id);

        if (empty($requests)) {
            Flash::error('Requests not found');

            return redirect(route('requests.index'));
        }

        return view('requests.show')->with('requests', $requests);
    }

    /**
     * Show the form for editing the specified requests.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $requests = $this->requestsRepository->findWithoutFail($id);

        if (empty($requests)) {
            Flash::error('Requests not found');

            return redirect(route('requests.index'));
        }

        return view('requests.edit')->with('requests', $requests);
    }

    /**
     * Update the specified requests in storage.
     *
     * @param  int              $id
     * @param UpdaterequestsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdaterequestsRequest $request)
    {
        $requests = $this->requestsRepository->findWithoutFail($id);

        if (empty($requests)) {
            Flash::error('Requests not found');

            return redirect(route('requests.index'));
        }

        $requests = $this->requestsRepository->update($request->all(), $id);

        Flash::success('Requests updated successfully.');

        return redirect(route('requests.index'));
    }

    /**
     * Remove the specified requests from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $requests = $this->requestsRepository->findWithoutFail($id);

        if (empty($requests)) {
            Flash::error('Requests not found');

            return redirect(route('requests.index'));
        }

        $this->requestsRepository->delete($id);

        Flash::success('Requests deleted successfully.');

        return redirect(route('requests.index'));
    }
}
