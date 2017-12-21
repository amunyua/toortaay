<?php

namespace App\Http\Controllers;

use App\DataTables\ParentsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateParentsRequest;
use App\Http\Requests\UpdateParentsRequest;
use App\Repositories\ParentsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ParentsController extends AppBaseController
{
    /** @var  ParentsRepository */
    private $parentsRepository;

    public function __construct(ParentsRepository $parentsRepo)
    {
        $this->parentsRepository = $parentsRepo;
    }

    /**
     * Display a listing of the Parents.
     *
     * @param ParentsDataTable $parentsDataTable
     * @return Response
     */
    public function index(ParentsDataTable $parentsDataTable)
    {
        return $parentsDataTable->render('parents.index');
    }

    /**
     * Show the form for creating a new Parents.
     *
     * @return Response
     */
    public function create()
    {
        return view('parents.create');
    }

    /**
     * Store a newly created Parents in storage.
     *
     * @param CreateParentsRequest $request
     *
     * @return Response
     */
    public function store(CreateParentsRequest $request)
    {
        $input = $request->all();

        $parents = $this->parentsRepository->create($input);

        Flash::success('Parents saved successfully.');

        return redirect(route('parents.index'));
    }

    /**
     * Display the specified Parents.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $parents = $this->parentsRepository->findWithoutFail($id);

        if (empty($parents)) {
            Flash::error('Parents not found');

            return redirect(route('parents.index'));
        }

        return view('parents.show')->with('parents', $parents);
    }

    /**
     * Show the form for editing the specified Parents.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $parents = $this->parentsRepository->findWithoutFail($id);

        if (empty($parents)) {
            Flash::error('Parents not found');

            return redirect(route('parents.index'));
        }

        return view('parents.edit')->with('parents', $parents);
    }

    /**
     * Update the specified Parents in storage.
     *
     * @param  int              $id
     * @param UpdateParentsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateParentsRequest $request)
    {
        $parents = $this->parentsRepository->findWithoutFail($id);

        if (empty($parents)) {
            Flash::error('Parents not found');

            return redirect(route('parents.index'));
        }

        $parents = $this->parentsRepository->update($request->all(), $id);

        Flash::success('Parents updated successfully.');

        return redirect(route('parents.index'));
    }

    /**
     * Remove the specified Parents from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $parents = $this->parentsRepository->findWithoutFail($id);

        if (empty($parents)) {
            Flash::error('Parents not found');

            return redirect(route('parents.index'));
        }

        $this->parentsRepository->delete($id);

        Flash::success('Parents deleted successfully.');

        return redirect(route('parents.index'));
    }
}
