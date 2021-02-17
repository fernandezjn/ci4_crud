<?php

namespace App\Controllers;

use App\Models\Crud_Model;

class CRUD extends BaseController {

	public function index() {
		$CRUD_Model = new Crud_Model();
        $parser = \Config\Services::parser();
		$data = [
            'page_title' => 'Simple CRUD Project',
            'student_data'  => $CRUD_Model->findAll()
        ];
		
		echo $parser->setData($data)->render('templates/header');
        echo view('crud/index', $data);
        echo view('templates/footer', $data);
	}

	public function add() {
		$parser = \Config\Services::parser();
		$data ['page_title'] = 'Add New Student';
		
		echo $parser->setData($data)->render('templates/header');
        echo view('crud/add', $data);
        echo view('templates/footer', $data);
	}

	public function save() {
        $CRUD_Model =  new Crud_Model();
        $data = [
            'name' => $this->request->getVar('name'),
            'student_number'  => $this->request->getVar('student_number'),
            'course'  => $this->request->getVar('course'),
			'year_level'  => $this->request->getVar('year_level')
            
        ];
        $save = $CRUD_Model->insert($data);
		echo "<script>alert('Student data was added successfully!'); window.location.href = '/';</script>";
	}

	public function edit($id = null) {
		$parser = \Config\Services::parser();
		$CRUD_Model = new Crud_Model();
		$data = [
            'page_title' => 'Edit Student Data',
            'student_data'  => $CRUD_Model->where('id', $id)->first()
        ];
		
		echo $parser->setData($data)->render('templates/header');
        echo view('crud/edit', $data);
        echo view('templates/footer', $data);
	   
    }

    public function update($id = null) {  
		$CRUD_Model = new Crud_Model();
		$data = [
            'name' => $this->request->getVar('name'),
            'student_number'  => $this->request->getVar('student_number'),
            'course'  => $this->request->getVar('course'),
			'year_level'  => $this->request->getVar('year_level')
            
        ];
		 
		 $save = $CRUD_Model->update($id,$data);
		 echo "<script>alert('Student data updated successfully!'); window.location.href = '/';</script>";

    }

    public function delete($id = null) {
		$CRUD_Model = new Crud_Model();
		$data['student_data'] = $CRUD_Model->where('id', $id)->delete();
		return redirect()->to( base_url('/') );
	}

}

?>