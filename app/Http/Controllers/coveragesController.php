<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecoveragesRequest;
use App\Http\Requests\UpdatecoveragesRequest;
use App\Repositories\coveragesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class coveragesController extends AppBaseController
{
    /** @var  coveragesRepository */
    private $coveragesRepository;

    public function __construct(coveragesRepository $coveragesRepo)
    {
        $this->coveragesRepository = $coveragesRepo;
    }

    /**
     * Display a listing of the coverages.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->coveragesRepository->pushCriteria(new RequestCriteria($request));
        $coverages = $this->coveragesRepository->all();

        return view('coverages.index')
            ->with('coverages', $coverages);
    }

    /**
     * Show the form for creating a new coverages.
     *
     * @return Response
     */
    public function create()
    {
        return view('coverages.create');
    }

    /**
     * Store a newly created coverages in storage.
     *
     * @param CreatecoveragesRequest $request
     *
     * @return Response
     */
    public function store(CreatecoveragesRequest $request)
    {
        $input = $request->all();

        $coverages = $this->coveragesRepository->create($input);

        Flash::success('Coverages saved successfully.');

        return redirect(route('coverages.index'));
    }

    /**
     * Display the specified coverages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $coverages = $this->coveragesRepository->findWithoutFail($id);

        if (empty($coverages)) {
            Flash::error('Coverages not found');

            return redirect(route('coverages.index'));
        }

        return view('coverages.show')->with('coverages', $coverages);
    }

    /**
     * Show the form for editing the specified coverages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $coverages = $this->coveragesRepository->findWithoutFail($id);

        if (empty($coverages)) {
            Flash::error('Coverages not found');

            return redirect(route('coverages.index'));
        }

        return view('coverages.edit')->with('coverages', $coverages);
    }

    /**
     * Update the specified coverages in storage.
     *
     * @param  int              $id
     * @param UpdatecoveragesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatecoveragesRequest $request)
    {
        $coverages = $this->coveragesRepository->findWithoutFail($id);

        if (empty($coverages)) {
            Flash::error('Coverages not found');

            return redirect(route('coverages.index'));
        }

        $coverages = $this->coveragesRepository->update($request->all(), $id);

        Flash::success('Coverages updated successfully.');

        return redirect(route('coverages.index'));
    }

    /**
     * Remove the specified coverages from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $coverages = $this->coveragesRepository->findWithoutFail($id);

        if (empty($coverages)) {
            Flash::error('Coverages not found');

            return redirect(route('coverages.index'));
        }

        $this->coveragesRepository->delete($id);

        Flash::success('Coverages deleted successfully.');

        return redirect(route('coverages.index'));
    }
}
