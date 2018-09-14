<?php

namespace App\Http\Controllers;

use App\Project;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->roles->first()->id;

        if ( $user == '1')
            return view('projects.index', [
               'projects' => Project::all()
            ]);
        elseif ($user == '2')
            return view('projects.planner.index', [
                'projects' => Project::all()->where('user_id', Auth::user()->id)
            ]);
        elseif ($user == '3')
            return view('projects.bookkeeper.index', [
                'projects' => Project::all()
            ]);
        else
            return view('projects.auditor.index', [
                'projects' => Project::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Project::create([
            'user_id' => Auth::user()->id,
            'du_id' => $request->du_id,
            'podriadchik' => $request->podriadchik,
            'du_name_v_zakaze' => $request->du_name_v_zakaze,
            'city' => $request->city,
            'year' => $request->year,
            'prioritet' => $request->prioritet,
            'adres_v_id' => $request->adres_v_id,
            'adres_propisannyi_v_SEZ_na_R1' => $request->adres_propisannyi_v_SEZ_na_R1,
            'PSEZ_gotov_planovaia_data' => $request->PSEZ_gotov_planovaia_data,
            'PSEZ_gotov_fakticheskaia_data' => $request->PSEZ_gotov_fakticheskaia_data,
            'PSEZ_gotov_data_kommentarii' => $request->PSEZ_gotov_data_kommentarii,
            'PSEZ_peredan_v_OI_planovaia_data' => $request->PSEZ_peredan_v_OI_planovaia_data,
            'PSEZ_peredan_v_OI_fakticheskaia_data' => $request->PSEZ_peredan_v_OI_fakticheskaia_data,
            'PSEZ_peredan_v_OI_data_kommentarii' => $request->PSEZ_peredan_v_OI_data_kommentarii,
            'ekspertnoe_zacliuchenie_polucheno_planovaia_data' => $request->ekspertnoe_zacliuchenie_polucheno_planovaia_data,
            'ekspertnoe_zacliuchenie_polucheno_fakticheskaia_data' => $request->ekspertnoe_zacliuchenie_polucheno_fakticheskaia_data,
            'ekspertnoe_zacliuchenie_polucheno_data_kommentarii' => $request->ekspertnoe_zacliuchenie_polucheno_data_kommentarii,
            'ekspertnoe_zacliuchenie_peredano_v_RPN_planovaia_data' => $request->ekspertnoe_zacliuchenie_peredano_v_RPN_planovaia_data,
            'ekspertnoe_zacliuchenie_peredano_v_RPN_fakticheskaia_data' => $request->ekspertnoe_zacliuchenie_peredano_v_RPN_fakticheskaia_data,
            'ekspertnoe_zacliuchenie_peredano_v_RPN_data_kommentarii' => $request->ekspertnoe_zacliuchenie_peredano_v_RPN_data_kommentarii,
            'PSEZ_gotov_proektirovshchik' => Auth::user()->name,
        ]);
        return redirect('project');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {


        $project->update($request->all());

        return redirect('project');
    }



    public function ajaxupdate(Request $request)
    {
        $id = $request->project_id;
        $field_name = $request->field_name;
        $value = $request->value;

        $project = Project::find($id);

        $project->update([
            $field_name => $value,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
