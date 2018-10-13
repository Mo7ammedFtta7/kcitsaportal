<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecjobsRequest;
use App\Http\Requests\UpdatecjobsRequest;
use App\Repositories\cjobsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class cjobsController extends AppBaseController
{
    /** @var  cjobsRepository */
    private $cjobsRepository;

    public function __construct(cjobsRepository $cjobsRepo)
    {
        $this->cjobsRepository = $cjobsRepo;
    }

    /**
     * Display a listing of the cjobs.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->cjobsRepository->pushCriteria(new RequestCriteria($request));
        $cjobs = $this->cjobsRepository->all();

        return view('cjobs.index')
            ->with('cjobs', $cjobs);
    }

    /**
     * Show the form for creating a new cjobs.
     *
     * @return Response
     */
    public function create()
    {
        return view('cjobs.create');
    }

    /**
     * Store a newly created cjobs in storage.
     *
     * @param CreatecjobsRequest $request
     *
     * @return Response
     */
    public function store(CreatecjobsRequest $request)
    {
        $input = $request->all();

        $cjobs = $this->cjobsRepository->create($input);

        Flash::success('Cjobs saved successfully.');

        return redirect(route('cjobs.index'));
    }

    /**
     * Display the specified cjobs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $cjobs = $this->cjobsRepository->findWithoutFail($id);

        if (empty($cjobs)) {
            Flash::error('Cjobs not found');

            return redirect(route('cjobs.index'));
        }

        return view('cjobs.show')->with('cjobs', $cjobs);
    }

    /**
     * Show the form for editing the specified cjobs.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $cjobs = $this->cjobsRepository->findWithoutFail($id);

        if (empty($cjobs)) {
            Flash::error('Cjobs not found');

            return redirect(route('cjobs.index'));
        }

        return view('cjobs.edit')->with('cjobs', $cjobs);
    }

    /**
     * Update the specified cjobs in storage.
     *
     * @param  int              $id
     * @param UpdatecjobsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecjobsRequest $request)
    {
        $cjobs = $this->cjobsRepository->findWithoutFail($id);

        if (empty($cjobs)) {
            Flash::error('Cjobs not found');

            return redirect(route('cjobs.index'));
        }

        $cjobs = $this->cjobsRepository->update($request->all(), $id);

        Flash::success('Cjobs updated successfully.');

        return redirect(route('cjobs.index'));
    }

    /**
     * Remove the specified cjobs from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $cjobs = $this->cjobsRepository->findWithoutFail($id);

        if (empty($cjobs)) {
            Flash::error('Cjobs not found');

            return redirect(route('cjobs.index'));
        }

        $this->cjobsRepository->delete($id);

        Flash::success('Cjobs deleted successfully.');

        return redirect(route('cjobs.index'));
    }
}
