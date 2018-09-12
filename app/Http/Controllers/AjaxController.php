<?php

namespace App\Http\Controllers;


use App\Project;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    public function updateProjectValue(Request $request)
    {
        $data = $request->all();
        var_dump($data);
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());

        return redirect('project');
    }
}
