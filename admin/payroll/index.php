<?php

$moduleName = 'metadata';
define('MODULE_PATH',dirname(__FILE__));
include APP_BASE_PATH.'header.php';
include APP_BASE_PATH.'modulejslibs.inc.php';

$moduleBuilder = new ModuleBuilder();

/*$moduleBuilder->addModuleOrGroup(new ModuleTab('SalaryComponentType','SalaryComponentType','Salary Component Types','SalaryComponentTypeAdapter','','',true));
$moduleBuilder->addModuleOrGroup(new ModuleTab('SalaryComponent','SalaryComponent','Salary Components','SalaryComponentAdapter','',''));
$moduleBuilder->addModuleOrGroup(new ModuleTab('EmployeeSalary','EmployeeSalary','Employee Salary','EmployeeSalaryAdapter','','',false,array("setRemoteTable"=>"true")));*/
$moduleBuilder->addModuleOrGroup(new ModuleTab('EmployeeSalaryPayslip','EmployeeSalary','Employee Salary Payslip','EmployeePayslipAdapter','','',true,array("setRemoteTable"=>"true")));
echo UIManager::getInstance()->renderModule($moduleBuilder);
include APP_BASE_PATH.'footer.php';
?>
