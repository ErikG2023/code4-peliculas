<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\PeliculaModel;

class Pelicula extends BaseController{

    public function index()
    {

        $peliculaModel = new PeliculaModel();

        
        
        echo view('dashboard/pelicula/index',[
            'peliculas' => $peliculaModel->findAll()
        ]);
    }

    public function new()
    {
        echo view('dashboard/pelicula/new',[
            'pelicula' =>[
                'titulo'=> '',
                'descripcion' => ''
            ]
        ]);

            
    }

    public function show($id)
    {
        $peliculaModel = new PeliculaModel();

        echo view('dashboard/pelicula/show',[
            'pelicula' => $peliculaModel->find($id)
        ]);
            
    }

    public function create()
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' =>$this->request->getPost('descripcion')
        ]);

        return redirect()->to('/dashboard/pelicula');
    }

    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->find($id);

        echo view('dashboard/pelicula/edit',[
            'pelicula'=> $peliculaModel->find($id)
        ]);
    }
    public function update($id)
    {
        $peliculaModel = new PeliculaModel();

        $peliculaModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
            'discripcion' => $this->request->getPost('discripcion')

        ]);
        return redirect()->to('/dashboard/pelicula');
    }


    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);
        return redirect()->to('/dashboard/pelicula');
    }
}