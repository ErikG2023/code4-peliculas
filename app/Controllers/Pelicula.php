<?php

namespace App\Controllers;

use App\Models\PeliculaModel;
use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Pelicula extends BaseController{

    public function index()
    {

        $peliculaModel = new PeliculaModel();

        
        
        Return view('pelicula/index',[
            'peliculas' => $peliculaModel->findAll()
        ]);
    }

    public function new()
    {
        echo view('pelicula/new',[
            'pelicula' =>[
                'titulo'=> '',
                'descripcion' => ''
            ]
        ]);

            
    }

    public function show($id)
    {
        $peliculaModel = new PeliculaModel();

        
        
        // Return view('index',[
        //     'peliculas' => $peliculaModel->find($id)
        // ]);

        // var_dump($peliculaModel->find($id));
        echo view('pelicula/show',[
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

            echo 'Creado';
    }

    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->find($id);

        echo view('pelicula/edit',[
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
        echo 'update';
    }


    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);
        echo 'delete';
    }
}