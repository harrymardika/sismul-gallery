<?php

namespace App\Controllers;

use App\Models\GalleryModel;

class Gallery extends BaseController
{
    protected $galleryModel;

    public function __construct()
    {
        $this->galleryModel = new GalleryModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard | Gallery Portfolio',
            'galleries' => $this->galleryModel->findAll()
        ];
        return view('gallery/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Gallery'
        ];
        return view('gallery/create', $data);
    }

    public function store()
    {
        $file = $this->request->getFile('image');
        $namaFile = $file->getRandomName();
        $file->move(FCPATH . 'uploads', $namaFile);

        $this->galleryModel->save([
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image'       => $namaFile
        ]);

        return redirect()->to('/gallery');
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Gallery',
            'gallery' => $this->galleryModel->find($id)
        ];
        return view('gallery/detail', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Gallery',
            'gallery' => $this->galleryModel->find($id)
        ];
        return view('gallery/edit', $data);
    }

    public function update($id)
    {
        $file = $this->request->getFile('image');
        $oldImage = $this->request->getPost('oldImage');

        if ($file->getError() == 4) {
            $namaFile = $oldImage;
        } else {
            $namaFile = $file->getRandomName();
            $file->move(FCPATH . 'uploads', $namaFile);
            if (file_exists(FCPATH . 'uploads/' . $oldImage) && $oldImage != '') {
                unlink(FCPATH . 'uploads/' . $oldImage);
            }
        }

        $this->galleryModel->update($id, [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image'       => $namaFile
        ]);

        return redirect()->to('/gallery');
    }

    public function delete($id)
    {
        $gallery = $this->galleryModel->find($id);
        if (file_exists(FCPATH . 'uploads/' . $gallery['image']) && $gallery['image'] != '') {
            unlink(FCPATH . 'uploads/' . $gallery['image']);
        }
        $this->galleryModel->delete($id);
        return redirect()->to('/gallery');
    }
}
