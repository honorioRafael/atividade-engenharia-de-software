<?php
namespace App\Repositories;
use App\Models\Department;

class DepartmentRepository
{
    public function get(){
        return Department::all();
    }

    public function details(int $id)
    {
        return Department::findOrFail($id);
    }

    public function store(array $data)
    {
        return Department::create($data);
    }

    public function update(int $id, array $data)
    {
        $department = $this->details($id);
        $department->update($data);
        return $department;
    }

    public function delete(int $id)
    {
        $department = $this->details($id);
        $department->delete();
        return $department;
    }

    public function getWithEmployees(int $id)
    {
        return Department::with('employees')->get()->find($id);
    }

    public function getEmployees(int $id)
    {
        return Department::with('employees')->get()->find($id)["employees"];
    }
}