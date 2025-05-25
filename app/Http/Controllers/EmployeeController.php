<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EmployeeService;

class EmployeeController extends Controller
{
    private EmployeeService $employeeService;
    public function __construct (EmployeeService $employeeService){
        $this->employeeService = $employeeService;
    }

    public function get(){
        return $this->employeeService->get();
    }

    public function details($id)
    {
        return $this->employeeService->details($id);
    }

    public function store(Request $request){
        return $this->employeeService->store($request->all());
    }

    public function update(int $id, Request $request)
    {
        return $this->employeeService->update($id, $request->all());
    }

    public function delete(int $id)
    {
        return $this->employeeService->delete($id);
    }

    public function getWithDepartment()
    {
        return $this->employeeService->getWithDepartment();
    }
    public function getDepartment(int $id)
    {
        return $this->employeeService->getDepartment($id);
    }
}
