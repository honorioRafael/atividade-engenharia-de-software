<?php
namespace App\Services;
use App\Repositories\EmployeeRepository;

class EmployeeService
{
    private EmployeeRepository $employeeRepository;
    public function __construct(EmployeeRepository $employeeRepository)
    {
        $this->employeeRepository = $employeeRepository;
    }

    public function get()
    {
        $employees = $this->employeeRepository->get();
        return $employees;
    }

    public function details(int $id)
    {
        return $this->employeeRepository->details($id);
    }

    public function store (array $data)
    {
        return $this->employeeRepository->store($data);
    }

    public function update(int $id, array $data)
    {
        return $this->employeeRepository->update($id,$data);
    }

    public function delete(int $id)
    {
        return $this->employeeRepository->delete($id);
    }

    public function getWithDepartment()
    {
        return $this->employeeRepository->getWithDepartment();
    }

    public function getDepartment(int $id)
    {
        return $this->employeeRepository->getDepartment($id);
    }
}