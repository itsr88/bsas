@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>Редактирование</h1>
            </div>
        </div>
        <hr>


        <div class="row">
            <form class="form-horizontal" method="POST" action="{{route('project.update', ['project' => $project->id])}}">
                {{ csrf_field() }}
                {!! method_field('patch') !!}

                <div class="col-md-4">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="du_id" class="col-md-4 control-label">DU ID</label>
                                <div class="col-md-8">
                                    <input id="du_id" type="text" class="form-control" name="du_id" value="{{$project->du_id}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="podriadchik" class="col-md-4 control-label">Подрядчик</label>
                                <div class="col-md-8">
                                    <input id="podriadchik" type="text" class="form-control" name="podriadchik" value="{{$project->podriadchik}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="du_name_v_zakaze" class="col-md-4 control-label">DU Name</label>
                                <div class="col-md-8">
                                    <input id="du_name_v_zakaze" type="text" class="form-control" name="du_name_v_zakaze" value="{{$project->du_name_v_zakaze}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city" class="col-md-4 control-label">City</label>
                                <div class="col-md-8">
                                    <input id="city" type="text" class="form-control" name="city" value="{{$project->city}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="year" class="col-md-4 control-label">Year</label>
                                <div class="col-md-8">
                                    <input id="year" type="text" class="form-control" name="year" value="{{$project->year}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="prioritet" class="col-md-4 control-label">Приоритет</label>
                                <div class="col-md-8">
                                    <input id="prioritet" type="text" class="form-control" name="prioritet" value="{{$project->prioritet}}">
                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Обновить</button>

                </div>

                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">ПСЭЗ готов</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="PSEZ_complite_planned date" class="col-md-4 control-label">Плановая дата</label>
                                <div class="col-md-8">
                                    <input id="PSEZ_complite_planned date" type="date" class="form-control" name="PSEZ_gotov_planovaia_data" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="PSEZ_complite_actual_date" class="col-md-4 control-label">Фактическая дата</label>
                                <div class="col-md-8">
                                    <input id="PSEZ_complite_actual_date" type="date" class="form-control" name="PSEZ_gotov_fakticheskaia_data" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="PSEZ_complite_comments" class="col-md-4 control-label">Комментарии</label>
                                <div class="col-md-8">
                                    <input id="PSEZ_complite_comments" type="text" class="form-control" name="PSEZ_gotov_data_kommentarii" value="">
                                </div>
                            </div>
                        </div>

                    </div>

                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">ПСЭЗ передан в ОИ</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="col-md-4 control-label">Плановая дата</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input id="name" type="date" class="form-control" name="name" value="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="col-md-4 control-label">Фактическая дата</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input id="name" type="date" class="form-control" name="name" value="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="col-md-4 control-label">Комментарии</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input id="name" type="text" class="form-control" name="name" value="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                </div>



                <div class="col-md-4">
                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">Экспертное заключение получено</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="col-md-4 control-label">Плановая дата</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input id="name" type="date" class="form-control" name="name" value="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="col-md-4 control-label">Фактическая дата</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input id="name" type="date" class="form-control" name="name" value="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="col-md-4 control-label">Комментарии</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input id="name" type="text" class="form-control" name="name" value="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<div class="panel panel-default">--}}
                        {{--<div class="panel-heading">Экспертное заключение передано в РПН</div>--}}
                        {{--<div class="panel-body">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="col-md-4 control-label">Плановая дата</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input id="name" type="date" class="form-control" name="name" value="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="col-md-4 control-label">Фактическая дата</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input id="name" type="date" class="form-control" name="name" value="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="col-md-4 control-label">Комментарии</label>--}}
                                {{--<div class="col-md-8">--}}
                                    {{--<input id="name" type="text" class="form-control" name="name" value="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                </div>
            </form>

        </div>
    </div>

@endsection