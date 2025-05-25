<?php
namespace App\Services;
use App\Repositories\DepartmentRepository;

class DepartmentService
{
    private DepartmentRepository $departmentRepository;
    public function __construct(DepartmentRepository $departmentRepository)
    {
        $this->departmentRepository = $departmentRepository;
    }

    public function get()
    {
        $departments = $this->departmentRepository->get();
        return $departments;
    }

    public function details(int $id)
    {
        return $this->departmentRepository->details($id);
    }

    public function store (array $data)
    {
        return $this->departmentRepository->store($data);
    }

    public function update(int $id, array $data)
    {
        return $this->departmentRepository->update($id,$data);
    }

    public function delete(int $id)
    {
        return $this->departmentRepository->delete($id);
    }

    public function getWithEmployees(int $id)
    {
        return $this->departmentRepository->getWithEmployees($id);
    }

    public function getEmployees(int $id)
    {
        return $this->departmentRepository->getEmployees($id);
    }
}