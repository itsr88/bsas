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


    public function updateField(Request $request)
    {
        $id = $request->project_id;
        $field_name = $request->field_name;
        $value = $request->value;

        $project = Project::find($id);

        $project->update([
            $field_name => $value,
        ]);
    }
}
