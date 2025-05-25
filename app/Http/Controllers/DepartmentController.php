<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DepartmentService;

class DepartmentController extends Controller
{
    private DepartmentService $departmentService;
    public function __construct (DepartmentService $departmentService){
        $this->departmentService = $departmentService;
    }

    public function get(){
        return $this->departmentService->get();
    }

    public function details($id)
    {
        return $this->departmentService->details($id);
    }

    public function store(Request $request){
        return $this->departmentService->store($request->all());
    }

    public function update(int $id, Request $request)
    {
        return $this->departmentService->update($id, $request->all());
    }

    public function delete(int $id)
    {
        return $this->departmentService->delete($id);
    }

    public function getWithEmployees(int $id)
    {
        return $this->departmentService->getWithEmployees($id);
    }

    public function getEmployees(int $id)
    {
        return $this->departmentService->getEmployees($id);
    }
}
