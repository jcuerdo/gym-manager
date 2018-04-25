<?php

interface EmployeeRepository{
    public function loadEmployees();
    public function loadEmployee($dni);
    public function saveEmployee(Employee $employee);
    public function deleteEmployee($dni);
    public function editEmployee(Employee $employee);
}