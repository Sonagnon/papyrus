<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AnnotationCreateRequest;
use App\Http\Requests\AnnotationUpdateRequest;
use App\Repositories\AnnotationRepository;
use App\Document;
use App\User;


class AnnotationController extends Controller
{
    protected $annotationRepository;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(AnnotationRepository $annotationRepository)
    {
        $this->annotationRepository = $annotationRepository;
    } 



    public function index()
    {
        $annotations = $this->annotationRepository->getAll();
        return view('index_annotation', compact('annotations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_annotation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnotationCreateRequest $request)
    {
        
        $annotation = $this->annotationRepository -> store($request->all());
        
        return redirect('annotation')->withOk("Votre annotation a été ajouté.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $annotation = $this->annotationRepository->getById($id);

        return view('show_annotation', compact('annotation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annotation = $this ->annotationRepository->getById($id);

        return view('edit_annotation', compact('annotation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnnotationUpdateRequest $request, $id)
    {
        $this ->annotationRepository -> update($id, $request->all());

        return redirect('annotation')->withOk("Votre annotation a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this ->annotationRepository -> destroy($id);

        return redirect()->back();
    }
}
