<?php

namespace App\Controllers;

use App\Models\gModel;
use App\Models\pModel;

class Gallery extends BaseController
{
    protected $gModel;
    protected $pModel;

    public function __construct()
    {
        $this->gModel = new gModel();
        $this->pModel = new pModel();
    }
    
    public function index()
    {
        $data = [
            'title' => 'Gallery',
            'gal' => $this->gModel->getGal()
        ];
        return view('Gallery/index', $data);
    }
    
    public function profile()
    {
        $data = [
            'title' => 'Gallery | Profile',
            'prof' => $this->pModel->getProfile()
        ];
        return view('Gallery/profile', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Gallery | Detail',
            'gal' => $gal = $this->gModel->getGal($slug)
        ];

        if (empty($data['gal'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException(
                $slug . ' Not Found'
            );
        }
        
        return view('gallery/detail', $data);
  
    }

    public function add()
    {
        // $data = [
        //     'validation' => \Config\Services::validation()
        // ];
        return view('gallery/add');
    }
    public function save()
    {
        $fileGal = $this->request->getFile('image');
        $galName = $fileGal->getRandomName();
        $fileGal->move('img', $galName);

        $slug = url_title($this->request->getVar('title'),'-',true);
        $this->gModel->save([
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'type' => $this->request->getVar('type'),
            'category' => $this->request->getVar('category'),
            'description' => $this->request->getVar('description'),
            'creator' => $this->request->getVar('creator'),
            'image' => $galName
        ]);

        // session()->setFlashdata('pesan', 'Data sukses ditambahkan.');
        
        return redirect()->to(base_url('/gallery'));
    }
    public function delete($id)
    {
        $gal = $this->gModel->find($id);
        unlink('img/' . $gal['image']);
        $this->gModel->delete($id);
        return redirect()->to(base_url('gallery'));
    }
    public function edit($title)
    {
        $data = [
            'gal' => $gal = $this->gModel->getGal($title)
        ];
        return view('gallery/edit', $data);
    }
    public function update($id)
    {
        $fileGal = $this->request->getFile('image');
        $galName = $fileGal->getRandomName();
        $fileGal->move('img', $galName);
        
        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->gModel->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'slug' => $slug,
            'type' => $this->request->getVar('type'),
            'category' => $this->request->getVar('category'),
            'description' => $this->request->getVar('description'),
            'creator' => $this->request->getVar('creator'),
            'image' => $galName
        ]);

        return redirect()->to(base_url('gallery/'));
    }

}
