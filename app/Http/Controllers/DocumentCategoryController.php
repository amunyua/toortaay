<?php

namespace App\Http\Controllers;

use App\Committee;
use App\DocumentCategory;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DocumentCategoryController extends Controller
{
    public function index() {
        $document_cats = DocumentCategory::all();
        return view('configurations.document-categories')->with('document_cats', $document_cats);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|unique:document_categories',
            'code' => 'required|unique:document_categories'
        ]);

        DocumentCategory::create(['name' => $request->name, 'code' => $request->code]);

        $request->session()->flash('success', 'Document Category has been created.');
        return redirect('config/document-categories');
    }

    public function edit(DocumentCategory $cat) {
        return Response::json(['id' => $cat->id, 'name' => $cat->name, 'code' => $cat->code]);
    }

    public function update(Request $request) {
        $this->validate($request, [
            'name' => 'required|unique:document_categories,name,'.$request->id,
            'code' => 'required|unique:document_categories,name,'.$request->id
        ]);

        DocumentCategory::where('id', $request->id)->update(['name' => $request->name, 'code' => $request->code]);

        $request->session()->flash('success', 'Document Category has been updated.');
        return redirect('config/document-categories');
    }

    public function destroy() {
        try {
            DocumentCategory::destroy(request('del_id'));
            request()->session()->flash('success', 'Document Category has been removed.');
            return redirect('config/document-categories');
        } catch(QueryException $qe) {
            request()->session()->flash('error', $qe->getMessage());
        }
    }
}
