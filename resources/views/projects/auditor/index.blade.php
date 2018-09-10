@extends('layouts.app')

@section('content')
<div>Аудитор</div>
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="panel panel-default">
                    <table class="table table-bordered table-hover wrap">
                        <thead>

                        <tr>
                            <th rowspan="2">#</th>
                            <th rowspan="2">DU ID</th>
                            <th rowspan="2">ПОДРЯДЧИК</th>
                            <th rowspan="2">DU Name (в ЗАКАЗЕ)</th>
                            <th rowspan="2">Адрес в ИД</th>
                            <th rowspan="2">Адрес прописанный в СЭЗ на Р1</th>
                            <th rowspan="2">City</th>
                            <th rowspan="2">Year</th>
                            <th rowspan="2">Приоритет</th>
                            <th rowspan="2">БС в эфире</th>
                            <th colspan="4">Заказ Р1</th>
                            <th colspan="2">ИД/ОТР получены</th>
                            <th colspan="2">Фотоотчёт получен</th>
                            <th>Договор аренды получен</th>
                            <th colspan="3">Данные СО</th>
                            <th colspan="4">ПСЭЗ готов</th>
                        </tr>

                        <tr>
                            <th>№</th>
                            <th>Дата начала</th>
                            <th>Дата окончания</th>
                            <th>Дата + комментарии</th>
                            <th>Дата</th>
                            <th>Дата + комментарии</th>
                            <th>Дата</th>
                            <th>Дата + комментарии</th>
                            <th>Комментарий</th>
                            <th>Дата запроса</th>
                            <th>Ответственность</th>
                            <th>Данные СО получены</th>
                            <th>Вопросы возникающие при разработке ПСЭЗ</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($projects as $project)
                            <tr data-id="{{$project->id}}">
                                <td data-name="contractor" class="edit"><div>{{$project->id}}</div><input value="{{$project->id}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column1}}</div><input value="{{$project->Column3}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column2}}</div><input value="{{$project->Column3}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column3}}</div><input value="{{$project->Column3}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column4}}</div><input value="{{$project->Column4}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column5}}</div><input value="{{$project->Column5}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column6}}</div><input value="{{$project->Column6}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column7}}</div><input value="{{$project->Column7}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column8}}</div><input value="{{$project->Column8}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column9}}</div><input value="{{$project->Column9}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column10}}</div><input value="{{$project->Column10}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column11}}</div><input value="{{$project->Column11}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column12}}</div><input value="{{$project->Column12}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column13}}</div><input value="{{$project->Column13}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column14}}</div><input value="{{$project->Column14}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column15}}</div><input value="{{$project->Column15}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column16}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column17}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column18}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column19}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column20}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column21}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column22}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column23}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column24}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->Column25}}</div><input value="{{$project->Column16}}"></td>



                            </tr>
                        @endforeach




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

