<?php

namespace App\Controllers;

use App\Core\Controller;

class Pelanggan extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Customer();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('pelanggan/index', $data);
     }

     public function input()
     {
          // Membuat option golongan
          $data['optgol'] = $this->model->optGol();

          //Membuat option user
          $data['optuse'] = $this->model->optUse();

          $this->dashboard('pelanggan/input', $data);
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/pelanggan');
     }

     public function edit($id)
     {
          // Menampilkan data edit
          $data['row'] = $this->model->edit($id);

          // Membuat option Golongan
          $data['optgol'] = $this->model->optGol();

          //Membuat option user
          $data['optuse'] = $this->model->optUse();

          $this->dashboard('pelanggan/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/pelanggan');
     }

     public function delete($id)
     {
          $this->model->delete($id);
          header('location:' . URL . '/pelanggan');
     }
}
