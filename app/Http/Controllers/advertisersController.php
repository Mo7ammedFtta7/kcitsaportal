<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateadvertisersRequest;
use App\Http\Requests\UpdateadvertisersRequest;
use App\Repositories\advertisersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class advertisersController extends AppBaseController
{
    /** @var  advertisersRepository */
    private $advertisersRepository;

    public function __construct(advertisersRepository $advertisersRepo)
    {
        $this->advertisersRepository = $advertisersRepo;
    }

    /**
     * Display a listing of the advertisers.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->advertisersRepository->pushCriteria(new RequestCriteria($request));
        $advertisers = $this->advertisersRepository->all();

        return view('advertisers.index')
            ->with('advertisers', $advertisers);
    }

    /**
     * Show the form for creating a new advertisers.
     *
     * @return Response
     */
    public function create()
    {
        return view('advertisers.create');
    }

    /**
     * Store a newly created advertisers in storage.
     *
     * @param CreateadvertisersRequest $request
     *
     * @return Response
     */
    public function store(CreateadvertisersRequest $request)
    {
        $input = $request->all();

        $advertisers = $this->advertisersRepository->create($input);

        Flash::success('Advertisers saved successfully.');

        return redirect(route('advertisers.index'));
    }

    /**
     * Display the specified advertisers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $advertisers = $this->advertisersRepository->findWithoutFail($id);

        if (empty($advertisers)) {
            Flash::error('Advertisers not found');

            return redirect(route('advertisers.index'));
        }

        return view('advertisers.show')->with('advertisers', $advertisers);
    }

    /**
     * Show the form for editing the specified advertisers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $advertisers = $this->advertisersRepository->findWithoutFail($id);

        if (empty($advertisers)) {
            Flash::error('Advertisers not found');

            return redirect(route('advertisers.index'));
        }

        return view('advertisers.edit')->with('advertisers', $advertisers);
    }

    /**
     * Update the specified advertisers in storage.
     *
     * @param  int              $id
     * @param UpdateadvertisersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateadvertisersRequest $request)
    {
        $advertisers = $this->advertisersRepository->findWithoutFail($id);

        if (empty($advertisers)) {
            Flash::error('Advertisers not found');

            return redirect(route('advertisers.index'));
        }

        $advertisers = $this->advertisersRepository->update($request->all(), $id);

        Flash::success('Advertisers updated successfully.');

        return redirect(route('advertisers.index'));
    }

    /**
     * Remove the specified advertisers from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $advertisers = $this->advertisersRepository->findWithoutFail($id);

        if (empty($advertisers)) {
            Flash::error('Advertisers not found');

            return redirect(route('advertisers.index'));
        }

        $this->advertisersRepository->delete($id);

        Flash::success('Advertisers deleted successfully.');

        return redirect(route('advertisers.index'));
    }
}
