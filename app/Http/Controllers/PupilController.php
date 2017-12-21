<?php

namespace App\Http\Controllers;

use App\DataTables\PupilDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePupilRequest;
use App\Http\Requests\UpdatePupilRequest;
use App\Models\Classes;
use App\Models\Parents;
use App\Repositories\PupilRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PupilController extends AppBaseController
{
    /** @var  PupilRepository */
    private $pupilRepository;

    public function __construct(PupilRepository $pupilRepo)
    {
        $this->pupilRepository = $pupilRepo;
    }

    /**
     * Display a listing of the Pupil.
     *
     * @param PupilDataTable $pupilDataTable
     * @return Response
     */
    public function index(PupilDataTable $pupilDataTable)
    {

        return $pupilDataTable->render('pupils.index',[
            'classes'=> Classes::all(),
            'parents'=> Parents::all()
        ]);
    }

    /**
     * Show the form for creating a new Pupil.
     *
     * @return Response
     */
    public function create()
    {
        return view('pupils.create');
    }

    /**
     * Store a newly created Pupil in storage.
     *
     * @param CreatePupilRequest $request
     *
     * @return Response
     */
    public function store(CreatePupilRequest $request)
    {
        $input = $request->all();

        $pupil = $this->pupilRepository->create($input);

        Flash::success('Pupil saved successfully.');

        return redirect(route('pupils.index'));
    }

    /**
     * Display the specified Pupil.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pupil = $this->pupilRepository->findWithoutFail($id);

        if (empty($pupil)) {
            Flash::error('Pupil not found');

            return redirect(route('pupils.index'));
        }

        return view('pupils.show')->with('pupil', $pupil);
    }

    /**
     * Show the form for editing the specified Pupil.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pupil = $this->pupilRepository->findWithoutFail($id);

        if (empty($pupil)) {
            Flash::error('Pupil not found');

            return redirect(route('pupils.index'));
        }

        return view('pupils.edit')->with('pupil', $pupil);
    }

    /**
     * Update the specified Pupil in storage.
     *
     * @param  int              $id
     * @param UpdatePupilRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePupilRequest $request)
    {
        $pupil = $this->pupilRepository->findWithoutFail($id);

        if (empty($pupil)) {
            Flash::error('Pupil not found');

            return redirect(route('pupils.index'));
        }

        $pupil = $this->pupilRepository->update($request->all(), $id);

        Flash::success('Pupil updated successfully.');

        return redirect(route('pupils.index'));
    }

    /**
     * Remove the specified Pupil from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pupil = $this->pupilRepository->findWithoutFail($id);

        if (empty($pupil)) {
            Flash::error('Pupil not found');

            return redirect(route('pupils.index'));
        }

        $this->pupilRepository->delete($id);

        Flash::success('Pupil deleted successfully.');

        return redirect(route('pupils.index'));
    }
}
