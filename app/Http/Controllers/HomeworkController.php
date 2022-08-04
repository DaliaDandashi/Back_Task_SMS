<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;
use Exception;

class HomeworkController extends Controller
{
    public function createHomework(Request $request)
    {
        $data = new Homework();
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

    public function getHomeworks()
    {
        try {
            $data = Homework::all();
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

    public function getHomework($id)
    {
        try {
            $data = Homework::where('id', $id)->first();
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

    public function getHomeworkTeacher($id)
    {
        try {
            $data = Homework::where('teacher_id', $id)
                ->orderBy('name')
                ->get();
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

    public function updateHomework($id, Request $request)
    {
        try {
            $data = Homework::where('id', $id)->first();
            $data->update($request->all());
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

    public function deleteHomework($id)
    {
        try {
            $data = Homework::where('id', $id)->delete();
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
