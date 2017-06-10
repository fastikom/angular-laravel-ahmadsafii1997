<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Employees extends Controller
{
    // fungsi untuk mengurutkan data dari id terkecil
    public function index($id = null) {
        if ($id == null) {
            return Employee::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    // fungsi untuk pengisian form tambah pegawai
    public function store(Request $request) {
        $employee = new Employee;

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->contact_number = $request->input('contact_number');
        $employee->position = $request->input('position');
        $employee->save();

        return 'Data pegawai dengan id ' . $employee->id . ' berhasil disimpan';
    }

    // fungsi untuk menampilkan data
    public function show($id) {
        return Employee::find($id);
    }

    // fungsi untuk melakukan proses edit / update data
    public function update(Request $request, $id) {
        $employee = Employee::find($id);

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->contact_number = $request->input('contact_number');
        $employee->position = $request->input('position');
        $employee->save();

        return "Update data sukses id #" . $employee->id;
    }

/*
    public function destroy(Request $request) {
        $employee = Employee::find($request->input('id'));

        $employee->delete();

        return "Employee record successfully deleted #" . $request->input('id');
    }*/

    // fungsi untuk menghapus data
    public function destroy($id)
    {
      $employee = Employee::find($id)->delete();
      return 'Data pegawai berhasil dihapus';
    }
}
