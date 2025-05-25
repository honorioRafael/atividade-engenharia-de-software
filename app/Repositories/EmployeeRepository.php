<?php
namespace App\Repositories;
use App\Models\Employee;

class EmployeeRepository
{
    public function get(){
        return Employee::all();
    }

    public function details(int $id)
    {
        return Employee::findOrFail($id);
    }

    public function store(array $data)
    {
        return Employee::create($data);
    }

    public function update(int $id, array $data)
    {
        $employee = $this->details($id);
        $employee->update($data);
        return $employee;
    }

    public function delete(int $id)
    {
        $employee = $this->details($id);
        $employee->delete();
        return $employee;
    }

    public function getWithDepartment(){
        return Employee::with('department')->get();
    }

    public function getDepartment(int $id){
        return Employee::with('department')->get()->find($id)["department"];
    }
}