<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCovidAPIRequest;
use App\Http\Requests\UpdateCovidAPIRequest;
use App\Repositories\CovidAPIRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CovidAPIController extends AppBaseController
{
    /** @var  CovidAPIRepository */
    private $covidAPIRepository;

    public function __construct(CovidAPIRepository $covidAPIRepo)
    {
        $this->covidAPIRepository = $covidAPIRepo;
    }

    /**
     * Display a listing of the CovidAPI.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $covidAPIs = $this->covidAPIRepository->all();

        return view('covid_a_p_is.index')
            ->with('covidAPIs', $covidAPIs);
    }

    /**
     * Show the form for creating a new CovidAPI.
     *
     * @return Response
     */
    public function create()
    {
        return view('covid_a_p_is.create');
    }

    /**
     * Store a newly created CovidAPI in storage.
     *
     * @param CreateCovidAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCovidAPIRequest $request)
    {
        $input = $request->all();

        $covidAPI = $this->covidAPIRepository->create($input);

        Flash::success('Covid A P I saved successfully.');

        return redirect(route('covidAPIs.index'));
    }

    /**
     * Display the specified CovidAPI.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $covidAPI = $this->covidAPIRepository->find($id);

        if (empty($covidAPI)) {
            Flash::error('Covid A P I not found');

            return redirect(route('covidAPIs.index'));
        }

        return view('covid_a_p_is.show')->with('covidAPI', $covidAPI);
    }

    /**
     * Show the form for editing the specified CovidAPI.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $covidAPI = $this->covidAPIRepository->find($id);

        if (empty($covidAPI)) {
            Flash::error('Covid A P I not found');

            return redirect(route('covidAPIs.index'));
        }

        return view('covid_a_p_is.edit')->with('covidAPI', $covidAPI);
    }

    /**
     * Update the specified CovidAPI in storage.
     *
     * @param int $id
     * @param UpdateCovidAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCovidAPIRequest $request)
    {
        $covidAPI = $this->covidAPIRepository->find($id);

        if (empty($covidAPI)) {
            Flash::error('Covid A P I not found');

            return redirect(route('covidAPIs.index'));
        }

        $covidAPI = $this->covidAPIRepository->update($request->all(), $id);

        Flash::success('Covid A P I updated successfully.');

        return redirect(route('covidAPIs.index'));
    }

    /**
     * Remove the specified CovidAPI from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $covidAPI = $this->covidAPIRepository->find($id);

        if (empty($covidAPI)) {
            Flash::error('Covid A P I not found');

            return redirect(route('covidAPIs.index'));
        }

        $this->covidAPIRepository->delete($id);

        Flash::success('Covid A P I deleted successfully.');

        return redirect(route('covidAPIs.index'));
    }
}
