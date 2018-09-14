@extends('layouts.app')

@section('content')


    <div class="row">

        <div class="col-md-12">
            <div class="container-fluid">
                <a href="{{ route('project.create') }}" class="btn btn-default pull-left">Новый проект</a>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="panel panel-default">
                    <table id="projects" class="wrap table table-bordered table-hover">
                        <thead>

                        <tr>
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
                            <th>Плановая дата</th>
                            <th>Фактическая дата</th>
                            <th>Дата + комментарии</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($projects as $project)
                            <tr id="{{$project->id}}">
                                <td data-name="du_id" class=" du_id">{{$project->du_id}}</td>
                                <td data-name="podriadchik" class=" podriadchik">{{$project->podriadchik}}</td>
                                <td data-name="du_name_v_zakaze" class=" du_name_v_zakaze">{{$project->du_name_v_zakaze}}</td>
                                <td data-name="adres_v_id" class=" adres_v_id">{{$project->adres_v_id}}</td>
                                <td data-name="adres_propisannyi_v_SEZ_na_R1" class=" adres_propisannyi_v_SEZ_na_R1">{{$project->adres_propisannyi_v_SEZ_na_R1}}</td>
                                <td data-name="city" class=" city">{{$project->city}}</td>
                                <td data-name="year" class=" year"><div>{{$project->year}}</div></td>
                                <td data-name="prioritet" class=" prioritet"><div>{{$project->prioritet}}</div></td>
                                <td data-name="bs_v_efire" class=" bs_v_efire"><div>{{$project->bs_v_efire}}</div></td>
                                <td data-name="zakaz_R1_num" class=" bs_v_efire"><div>{{$project->zakaz_R1_num}}</div></td>
                                <td data-name="zakaz_R1_data_nachala" class=" bs_v_efire"><div>{{$project->zakaz_R1_data_nachala}}</div></td>
                                <td data-name="zakaz_R1_data_okonchaniia_zakaza" class=""><div>{{$project->zakaz_R1_data_okonchaniia_zakaza}}</div></td>
                                <td data-name="zakaz_R1_data_kommentarii" class="">{{$project->zakaz_R1_data_kommentarii}}</td>
                                <td data-name="ID_OTR_polucheny_data" class="edit"><div>{{$project->ID_OTR_polucheny_data}}</div></td>
                                <td data-name="ID_OTR_polucheny_data_kommentarii" class="edit"><div>{{$project->ID_OTR_polucheny_data_kommentarii}}</div></td>
                                <td data-name="fotootchet_poluchen_data" class="edit"><div>{{$project->fotootchet_poluchen_data}}</div></td>
                                <td data-name="fotootchet_poluchen_data_kommentarii" class="edit"><div>{{$project->fotootchet_poluchen_data_kommentarii}}</div></td>
                                <td data-name="dogovor_arendy_poluchen_kommentarii" class="edit"><div>{{$project->dogovor_arendy_poluchen_kommentarii}}</div></td>
                                <td data-name="dannye_SO_data_zaprosa" class="edit"><div>{{$project->dannye_SO_data_zaprosa}}</div></td>
                                <td data-name="dannye_SO_otvetstvennost" class="edit"><div>{{$project->dannye_SO_otvetstvennost}}</div></td>
                                <td data-name="dannye_SO_polucheny" class="edit"><div>{{$project->dannye_SO_polucheny}}</div></td>
                                <td data-name="PSEZ_gotov_voprosy_voznikaiushchie_pri_razrabotke_PSEZ" class="edit"><div>{{$project->PSEZ_gotov_voprosy_voznikaiushchie_pri_razrabotke_PSEZ}}</div></td>
                                <td data-name="PSEZ_gotov_planovaia_data" class="edit"><div>{{$project->PSEZ_gotov_planovaia_data}}</div></td>
                                <td data-name="PSEZ_gotov_fakticheskaia_data" class="edit"><div>{{$project->PSEZ_gotov_fakticheskaia_data}}</div></td>
                                <td data-name="PSEZ_gotov_data_kommentarii" class="edit"><div>{{$project->PSEZ_gotov_data_kommentarii}}</div></td>
                            </tr>
                        @endforeach




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

