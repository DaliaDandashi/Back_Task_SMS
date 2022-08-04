<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use Exception;

class StudentController extends Controller
{

    public function createStudent(Request $request)
    {
        $data = new Student;
        try {
            $data->fill($request->all());
            $data->save();
            return [
                'success' => true,
                'data' => $data,
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'error' => $e,
            ];
        }
    }

    public function getStudents()
    {
        try {
            $data = Student::all();
            return [
                'success' => true,
                'data' => $data,
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'error' => $e,
            ];
        }
    }

    public function getStudent($id)
    {
        try {
            $data = Student::where('id', $id)->first();
            return [
                'success' => true,
                'data' => $data,
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'error' => $e,
            ];
        }
    }

    public function updateStudent($id, Request $request)
    {
        $data = Student::where('id', $id)->first();

        try {
            if($request->name)
            $data->update(['name' => $request->name]);
            if($request->gender)
            $data->update(['gender' => $request->gender]);
            if($request->phone)
            $data->update(['phone' => $request->phone]);
            return [
                'success' => true,
                'data' => $data,
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'error' => $e,
            ];
        }
    }

    public function deleteStudent($id)
    {
        try {
            $data = Student::where('id', $id)->delete();
            return [
                'success' => true,
                'data' => $data,
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'error' => $e,
            ];
        }
    }

}
