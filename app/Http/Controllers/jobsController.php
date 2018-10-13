<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatejobsRequest;
use App\Http\Requests\UpdatejobsRequest;
use App\Repositories\jobsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models as db;

class jobsController extends AppBaseController
{
    /** @var  jobsRepository */
    private $jobsRepository;

    public function __construct(jobsRepository $jobsRepo)
    {
        $this->jobsRepository = $jobsRepo;
    }

    /**
     * Display a listing of the jobs.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jobsRepository->pushCriteria(new RequestCriteria($request));
        $jobs = $this->jobsRepository->all();

        return view('jobs.index')
            ->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new jobs.
     *
     * @return Response
     */
    public function create()
    {
        $clients= db\clients::pluck('name','id');
        return view('jobs.create')->with('clients',$clients);
    }

    /**
     * Store a newly created jobs in storage.
     *
     * @param CreatejobsRequest $request
     *
     * @return Response
     */
    public function store(CreatejobsRequest $request)
    {
        $input = $request->all();
//dd( $input);
        $jobs = $this->jobsRepository->create($input);

        Flash::success('Jobs saved successfully.');

        return redirect(route('jobs.index'));
    }

    /**
     * Display the specified jobs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jobs = $this->jobsRepository->findWithoutFail($id);

        if (empty($jobs)) {
            Flash::error('Jobs not found');

            return redirect(route('jobs.index'));
        }

        return view('jobs.show')->with('jobs', $jobs);
    }

    /**
     * Show the form for editing the specified jobs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jobs = $this->jobsRepository->findWithoutFail($id);
        $clients= db\clients::pluck('name','id');

        if (empty($jobs)) {
            Flash::error('Jobs not found');

            return redirect(route('jobs.index'));
        }

        return view('jobs.edit')->with('jobs', $jobs)->with('clients', $clients);
    }

    /**
     * Update the specified jobs in storage.
     *
     * @param  int              $id
     * @param UpdatejobsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatejobsRequest $request)
    {
        $jobs = $this->jobsRepository->findWithoutFail($id);

        if (empty($jobs)) {
            Flash::error('Jobs not found');

            return redirect(route('jobs.index'));
        }

        $jobs = $this->jobsRepository->update($request->all(), $id);

        Flash::success('Jobs updated successfully.');

        return redirect(route('jobs.index'));
    }

    /**
     * Remove the specified jobs from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jobs = $this->jobsRepository->findWithoutFail($id);

        if (empty($jobs)) {
            Flash::error('Jobs not found');

            return redirect(route('jobs.index'));
        }

        $this->jobsRepository->delete($id);

        Flash::success('Jobs deleted successfully.');

        return redirect(route('jobs.index'));
    }
}
