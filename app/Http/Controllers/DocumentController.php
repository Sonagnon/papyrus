<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DocumentCreateRequest;
use App\Http\Requests\DocumentUpdateRequest;
use App\Repositories\DocumentRepository;

class DocumentController extends Controller
{
     protected $documentRepository;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(DocumentRepository $documentRepository)
    {
        $this->documentRepository = $documentRepository;
    } 



    public function index()
    {
        $documents = $this->documentRepository->getAll();
        return view('liste-courriers', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enregistrement-courrier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentCreateRequest $request)
    {
        
        $document = $this->documentRepository -> store($request->all());
        
        return redirect('document')->withOk("Un nouveau document a été créé.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = $this->documentRepository->getById($id);

        return view('show-courriers', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document = $this ->documentRepository->getById($id);

        return view('update-courriers', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentUpdateRequest $request, $id)
    {
        $this ->documentRepository -> update($id, $request->all());

        return redirect('document')->withOk("Le document ". $request->input('chemin'). " a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this ->documentRepository -> destroy($id);

        return redirect()->back();
    }
}
