<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FonctionCreateRequest;
use App\Http\Requests\FonctionUpdateRequest;
use App\Repositories\FonctionRepository;


class FonctionController extends Controller
{
        protected $fonctionRepository;

    public function __construct(FonctionRepository $fonctionRepository)
    {
        $this->fonctionRepository = $fonctionRepository;
    } 



    public function index()
    {
        $fonctions = $this->fonctionRepository->getAll();
        return view('liste-fonctions', compact('fonctions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enregistrement-fonction');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FonctionCreateRequest $request)
    {
        
        $fonction = $this->fonctionRepository -> store($request->all());
        
        return redirect('fonction')->withOk("La fonction ". $fonction->nom. " a été créé.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fonction = $this->fonctionRepository->getById($id);

        return view('show-fonction', compact('fonction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fonction = $this ->fonctionRepository->getById($id);

        return view('update-fonction', compact('fonction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FonctionUpdateRequest $request, $id)
    {
        $this ->fonctionRepository -> update($id, $request->all());

        return redirect('fonction')->withOk("La fonction ". $request->input('nom'). " a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this ->fonctionRepository -> destroy($id);

        return redirect()->back();
    }
}
