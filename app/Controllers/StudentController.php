<?php

namespace App\Controllers;

use App\Models\studentModel;

use CodeIgniter\Controller;

class StudentController extends Controller
{
    public function __construct()
    {
        $db = db_connect();
        $this->model = new studentModel($db);
    }

    public function index()
    {
        $studentModel = new studentModel();
        $data['students_detail'] = $studentModel->orderBy('nrp','DESC')->findall();
        $data['title'] = 'Student Info';
        return view('/pages/list',$data);
    }

    public function create(){
        return view('/pages/add');
    }

    public function store()
    {
        helper(['form','url']);
        
        $data = [
            'nrp' => $this->request->getVar('nrp'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'jurusan' => $this->request->getVar('jurusan')
        ];

        $sql = "INSERT INTO student VALUES ('". $data['nrp'] . "','" . $data['nama'] . "','" . $data['alamat'] . "','" . $data['no_hp'] . "','" . $data['jurusan'] . "')";
        $this->model->  query($sql);
        return redirect()->to(base_url('/students'));
    }

    public function edit($nrp = null)
    {
        $model = new studentModel();
        $data['student'] = $model->find($nrp);
        return view('pages/edit',$data);
    }

    public function update()
    {
        helper(['form','url']);

        $data = [
            'nrp' => $this->request->getVar('nrp'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'no_hp' => $this->request->getVar('no_hp'),
            'jurusan' => $this->request->getVar('jurusan')
        ];

        $this->model->update($data['nrp'],$data);

        return redirect()->to((base_url('/students')));

    }

    public function delete($nrp = null)
    {
        $result = $this->model->delete($nrp);
        if($result)
        {
            echo "delete complete";
        }
        else
        {
            echo "delete failed";
        }
        return redirect()->to(base_url('/students'));
    }
    
}

?>