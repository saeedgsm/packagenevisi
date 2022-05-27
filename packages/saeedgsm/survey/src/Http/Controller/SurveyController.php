<?php

namespace Survey\Http\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Survey\Http\requests\SurveyRequest;
use Survey\Models\Audit;

class SurveyController extends Controller
{
    public function audit()
    {
        return ['hello','this is audit route'];
    }

    public function view()
    {
        return view('survey::survey-index');
    }

    public function add()
    {
        return view('survey::add-survey');
    }

    public function store(SurveyRequest $request)
    {
        $in = $request->all();
        Audit::query()->create($in);
        return redirect(route('survey'));
    }
}
