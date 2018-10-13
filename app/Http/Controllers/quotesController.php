<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatequotesRequest;
use App\Http\Requests\UpdatequotesRequest;
use App\Repositories\quotesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class quotesController extends AppBaseController
{
    /** @var  quotesRepository */
    private $quotesRepository;

    public function __construct(quotesRepository $quotesRepo)
    {
        $this->quotesRepository = $quotesRepo;
    }

    /**
     * Display a listing of the quotes.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->quotesRepository->pushCriteria(new RequestCriteria($request));
        $quotes = $this->quotesRepository->all();

        return view('quotes.index')
            ->with('quotes', $quotes);
    }

    /**
     * Show the form for creating a new quotes.
     *
     * @return Response
     */
    public function create()
    {
        return view('quotes.create');
    }

    /**
     * Store a newly created quotes in storage.
     *
     * @param CreatequotesRequest $request
     *
     * @return Response
     */
    public function store(CreatequotesRequest $request)
    {
        $input = $request->all();

        $quotes = $this->quotesRepository->create($input);

        Flash::success('Quotes saved successfully.');

        return redirect(route('quotes.index'));
    }

    /**
     * Display the specified quotes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $quotes = $this->quotesRepository->findWithoutFail($id);

        if (empty($quotes)) {
            Flash::error('Quotes not found');

            return redirect(route('quotes.index'));
        }

        return view('quotes.show')->with('quotes', $quotes);
    }

    /**
     * Show the form for editing the specified quotes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $quotes = $this->quotesRepository->findWithoutFail($id);

        if (empty($quotes)) {
            Flash::error('Quotes not found');

            return redirect(route('quotes.index'));
        }

        return view('quotes.edit')->with('quotes', $quotes);
    }

    /**
     * Update the specified quotes in storage.
     *
     * @param  int              $id
     * @param UpdatequotesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatequotesRequest $request)
    {
        $quotes = $this->quotesRepository->findWithoutFail($id);

        if (empty($quotes)) {
            Flash::error('Quotes not found');

            return redirect(route('quotes.index'));
        }

        $quotes = $this->quotesRepository->update($request->all(), $id);

        Flash::success('Quotes updated successfully.');

        return redirect(route('quotes.index'));
    }

    /**
     * Remove the specified quotes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $quotes = $this->quotesRepository->findWithoutFail($id);

        if (empty($quotes)) {
            Flash::error('Quotes not found');

            return redirect(route('quotes.index'));
        }

        $this->quotesRepository->delete($id);

        Flash::success('Quotes deleted successfully.');

        return redirect(route('quotes.index'));
    }
}
