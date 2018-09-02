@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h1>Новый проект</h1>
            </div>
        </div>
        <hr>


        <div class="row">
            <form class="form-horizontal" method="POST" action="{{ route('project.store') }}">
                {{ csrf_field() }}

                <div class="col-md-4">

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="du_id" class="col-md-4 control-label">DU ID</label>
                                <div class="col-md-8">
                                    <input id="du_id" type="text" class="form-control" name="du_id" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contractor" class="col-md-4 control-label">Подрядчик</label>
                                <div class="col-md-8">
                                    <input id="contractor" type="text" class="form-control" name="contractor" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="du_name" class="col-md-4 control-label">DU Name</label>
                                <div class="col-md-8">
                                    <input id="du_name" type="text" class="form-control" name="du_name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city" class="col-md-4 control-label">City</label>
                                <div class="col-md-8">
                                    <input id="city" type="text" class="form-control" name="city" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="year" class="col-md-4 control-label">Year</label>
                                <div class="col-md-8">
                                    <input id="year" type="text" class="form-control" name="year" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="priority" class="col-md-4 control-label">Приоритет</label>
                                <div class="col-md-8">
                                    <input id="priority" type="text" class="form-control" name="priority" value="">
                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary">Сохранить</button>

                </div>

                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">ПСЭЗ готов</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="PSEZ_complite_planned date" class="col-md-4 control-label">Плановая дата</label>
                                <div class="col-md-8">
                                    <input id="PSEZ_complite_planned date" type="date" class="form-control" name="PSEZ_complite_planned date" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="PSEZ_complite_actual_date" class="col-md-4 control-label">Фактическая дата</label>
                                <div class="col-md-8">
                                    <input id="PSEZ_complite_actual_date" type="date" class="form-control" name="PSEZ_complite_actual_date" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="PSEZ_complite_comments" class="col-md-4 control-label">Комментарии</label>
                                <div class="col-md-8">
                                    <input id="PSEZ_complite_comments" type="text" class="form-control" name="PSEZ_complite_comments" value="">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">ПСЭЗ передан в ОИ</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Плановая дата</label>
                                <div class="col-md-8">
                                    <input id="name" type="date" class="form-control" name="name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Фактическая дата</label>
                                <div class="col-md-8">
                                    <input id="name" type="date" class="form-control" name="name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Комментарии</label>
                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" name="name" value="">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>



                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">Экспертное заключение получено</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Плановая дата</label>
                                <div class="col-md-8">
                                    <input id="name" type="date" class="form-control" name="name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Фактическая дата</label>
                                <div class="col-md-8">
                                    <input id="name" type="date" class="form-control" name="name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Комментарии</label>
                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" name="name" value="">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">Экспертное заключение передано в РПН</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Плановая дата</label>
                                <div class="col-md-8">
                                    <input id="name" type="date" class="form-control" name="name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Фактическая дата</label>
                                <div class="col-md-8">
                                    <input id="name" type="date" class="form-control" name="name" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Комментарии</label>
                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" name="name" value="">
                                </div>
                            </div>
                        </div>

                    </div>





                </div>
            </form>

        </div>
    </div>

@endsection