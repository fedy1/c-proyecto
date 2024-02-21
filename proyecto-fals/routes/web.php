<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\OcupationController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\Economic_activityController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Job_positionController;
use App\Http\Controllers\PostulateController;
use App\Http\Controllers\HabilityController;
use App\Http\Controllers\InstructorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

route::get('user/create', [UserController::class,'create'])->name('user.create');
route::post('user/store', [UserController::class,'store'])->name('user.store');
Route::get('user/index', [UserController::class, 'index'])->name('user.index');
Route::delete('user/{user}',[UserController::class, 'destroy'])->name('user.destroy');

route::get('role/create', [RoleController::class,'create'])->name('role.create');
route::post('role/store', [RoleController::class,'store'])->name('role.store');
Route::get('role/index', [RoleController::class, 'index'])->name('role.index');
Route::delete('role/{role}',[RoleController::class, 'destroy'])->name('role.destroy');

route::get('recruiter/create', [RecruiterController::class,'create'])->name('recruiter.create');
route::post('recruiter/store', [RecruiterController::class,'store'])->name('recruiter.store');
Route::get('recruiter/index', [RecruiterController::class, 'index'])->name('recruiter.index');

route::get('candidate/create', [CandidateController::class,'create'])->name('candidate.create');
route::post('candidate/store', [CandidateController::class,'store'])->name('candidate.store');
Route::get('candidate/index', [CandidateController::class, 'index'])->name('candidate.index');
Route::delete('candidate/{candidate}',[CandidateController::class, 'destroy'])->name('candidate.destroy');
Route::get('candidate/edit/{candidate}', [CandidateController::class, 'edit'])->name('candidate.edit');
Route::put('candidate/update/{candidate}', [CandidateController::class, 'update'])->name('candidate.update');

route::get('company/create', [CompanyController::class,'create'])->name('company.create');
route::post('company/store', [CompanyController::class,'store'])->name('company.store');
Route::get('company/index', [CompanyController::class, 'index'])->name('company.index');
Route::delete('company/{company}',[CompanyController::class, 'destroy'])->name('company.destroy');

route::get('economic_activity/create', [Economic_activityController::class,'create'])->name('economic_activity.create');
route::post('economic_activity/store', [Economic_activityController::class,'store'])->name('economic_activity.store');
Route::get('economic_activity/index', [Economic_activityController::class, 'index'])->name('economic_activity.index');
Route::delete('economic_activity/{economic_activity}',[Economic_activityController::class, 'destroy'])->name('economic_activity.destroy');

route::get('municipality/create', [MunicipalityController::class,'create'])->name('municipality.create');
route::post('municipality/store', [MunicipalityController::class,'store'])->name('municipality.store');
Route::get('municipality/index', [MunicipalityController::class, 'index'])->name('municipality.index');
Route::delete('municipality/{municipality}',[MunicipalityController::class, 'destroy'])->name('municipality.destroy');

Route::get('login', 'RoleController@showLoginForm')->name('login');
Route::post('login', 'RoleController@login');
Route::post('logout', 'RoleController@logout')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('welcome', function () {
        return view('welcome');
    })->name('welcome');
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');


route::get('ocupation/create', [OcupationController::class,'create'])->name('ocupation.create');
route::post('ocupation/store', [OcupationController::class,'store'])->name('ocupation.store');
Route::get('ocupation/index', [OcupationController::class, 'index'])->name('ocupation.index');
Route::delete('ocupation/{ocupation}',[OcupationController::class, 'destroy'])->name('ocupation.destroy');
Route::get('ocupation/edit/{ocupation}', [OcupationController::class, 'edit'])->name('ocupation.edit');
Route::put('ocupation/update/{ocupation}', [OcupationController::class, 'update'])->name('ocupation.update');

route::get('vacancy/create', [VacancyController::class,'create'])->name('vacancy.create');
route::post('vacancy/store', [VacancyController::class,'store'])->name('vacancy.store');
Route::get('vacancy/index', [VacancyController::class, 'index'])->name('vacancy.index');
Route::delete('vacancy/{vacancy}',[VacancyController::class, 'destroy'])->name('vacancy.destroy');
Route::get('vacancy/edit/{vacancy}', [VacancyController::class, 'edit'])->name('vacancy.edit');
Route::put('vacancy/update/{vacancy}', [VacancyController::class, 'update'])->name('vacancy.update');


route::get('salary/create', [SalaryController::class,'create'])->name('salary.create');
route::post('salary/store', [SalaryController::class,'store'])->name('salary.store');
Route::get('salary/index', [SalaryController::class, 'index'])->name('salary.index');
Route::delete('salary/{salary}',[SalaryController::class, 'destroy'])->name('salary.destroy');
Route::get('salary/edit/{salary}', [SalaryController::class, 'edit'])->name('salary.edit');
Route::put('salary/update/{salary}', [SalaryController::class, 'update'])->name('salary.update');

route::get('contract/create', [ContractController::class,'create'])->name('contract.create');
route::post('contract/store', [ContractController::class,'store'])->name('contract.store');
Route::get('contract/index', [ContractController::class, 'index'])->name('contract.index');
Route::delete('contract/{contract}',[ContractController::class, 'destroy'])->name('contract.destroy');
Route::get('contract/edit/{contract}', [ContractController::class, 'edit'])->name('contract.edit');
Route::put('contract/update/{contract}', [ContractController::class, 'update'])->name('contract.update');

route::get('task/create', [TaskController::class,'create'])->name('task.create');
route::post('task/store', [TaskController::class,'store'])->name('task.store');
Route::get('task/index', [TaskController::class, 'index'])->name('task.index');
Route::delete('task/{task}',[TaskController::class, 'destroy'])->name('task.destroy');
Route::get('task/edit/{task}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('task/update/{task}', [TaskController::class, 'update'])->name('task.update');

route::get('job_position/create', [Job_positionController::class,'create'])->name('job_position.create');
route::post('job_position/store', [Job_positionController::class,'store'])->name('job_position.store');
Route::get('job_position/index', [Job_positionController::class, 'index'])->name('job_position.index');
Route::delete('job_position/{job_position}',[Job_positionController::class, 'destroy'])->name('job_position.destroy');
Route::get('job_position/edit/{job_position}', [Job_positionController::class, 'edit'])->name('job_position.edit');
Route::put('job_position/update/{job_position}', [Job_positionController::class, 'update'])->name('job_position.update');

Route::post('/postulate/apply/{vacancy}', [PostulateController::class, 'apply'])->name('postulate.apply');
route::get('postulate/create', [PostulateController::class,'create'])->name('postulate.create');
route::post('postulate/store', [PostulateController::class,'store'])->name('postulate.store');
Route::get('postulate/index', [PostulateController::class, 'index'])->name('postulate.index');
Route::delete('postulate/{postulate}',[PostulateController::class, 'destroy'])->name('postulate.destroy');
Route::get('postulate/edit/{postulate}', [PostulateController::class, 'edit'])->name('postulate.edit');
Route::put('postulate/update/{postulate}', [PostulateController::class, 'update'])->name('postulate.update');

route::get('hability/create', [habilityController::class,'create'])->name('hability.create');
route::post('hability/store', [habilityController::class,'store'])->name('hability.store');
Route::get('hability/index', [habilityController::class, 'index'])->name('hability.index');
Route::delete('hability/{hability}',[habilityController::class, 'destroy'])->name('hability.destroy');
Route::get('hability/edit/{hability}', [habilityController::class, 'edit'])->name('hability.edit');
Route::put('hability/update/{hability}', [habilityController::class, 'update'])->name('hability.update');

route::get('instructor/create', [InstructorController::class,'create'])->name('instructor.create');
route::post('instructor/store', [InstructorController::class,'store'])->name('instructor.store');
Route::get('instructor/index', [InstructorController::class, 'index'])->name('instructor.index');
Route::delete('instructor/{instructor}',[InstructorController::class, 'destroy'])->name('instructor.destroy');
Route::get('instructor/edit/{instructor}', [InstructorController::class, 'edit'])->name('instructor.edit');
Route::put('instructor/update/{instructor}', [InstructorController::class, 'update'])->name('instructor.update');