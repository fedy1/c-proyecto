<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class VacancyController extends Controller
{
    public function index(Request $request)
    {
        $query = Vacancy::query();

        if ($request->has('company')) {
            $query->where('company', 'like', '%' . $request->input('company') . '%');
        }

        $vacancies = $query->get();

        return view('vacancy.index', ['vacancies' => $vacancies]);
    }
    public function create(){
        return view("vacancy.create");
    }

    public function store(Request $request){
        $request->validate(['company_id' => 'required',
            'description' => 'required|min:10',
            'salary_id' => 'required',
            'contract_id' => 'required',
            'task_id' => 'required',
            'job_position_id' => 'required',
            'ocupation_id' => 'required',
            'end_date' => 'required',
            'avaliable_jobs' => 'required']);

        Vacancy::create(['company_id'=>$request->company_id,
        'description'=>$request->description,
        'salary_id'=>$request->salary_id,
        'contract_id'=>$request->contract_id,
        'task_id'=>$request->task_id,
        'job_position_id'=>$request->job_position_id,
        'ocupation_id'=>$request->ocupation_id,
        'end_date'=>$request->end_date,
        'avaliable_jobs'=>$request->avaliable_jobs]);
        
        return redirect()->route('login');
}
public function destroy (Vacancy $vacancy){
    $vacancy->delete();
    return redirect()->route('vacancy.index');
}

public function edit($id) {
    $vacancy = Vacancy::find($id);
	return view('vacancy.edit', ['vacancy'=>$vacancy]);

}

public function update(Request $request, Vacancy $vacancy) {

    $request->validate(['company_id' => 'required',
    'description' => 'required|min:10',
    'salary_id' => 'required',
    'contract_id' => 'required',
    'task_id' => 'required',
    'job_position_id' => 'required',
    'ocupation_id' => 'required',
    'end_date' => 'required',
    'avaliable_jobs' => 'required']);

    $vacancy->update(['company_id'=>$request->company_id,
        'description'=>$request->description,
        'salary_id'=>$request->salary_id,
        'contract_id'=>$request->contract_id,
        'task_id'=>$request->task_id,
        'job_position_id'=>$request->job_position_id,
        'ocupation_id'=>$request->ocupation_id,
        'end_date'=>$request->end_date,
        'avaliable_jobs'=>$request->avaliable_jobs
    ]);

    $vacancy->company_id = $request->company_id;
    $vacancy->description = $request->descrption;
    $vacancy->salary_id = $request->salary_id;
    $vacancy->contract_id = $request->contract_id;
    $vacancy->task_id = $request->task_id;
    $vacancy->job_position_id = $request->job_position_id;
    $vacancy->ocupation_id = $request->ocupation_id;
    $vacancy->end_date = $request->end_date;
    $vacancy->avaliable_jobs = $request->avaliable_jobs;
    $vacancy->save();
    return redirect()->route('vacancy.index', $vacancy);
}
}