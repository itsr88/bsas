@extends('layouts.app')

@section('content')
    <div>Проектировщик</div>

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
                                <td data-name="contractor" class="edit"><div>{{$project->du_id}}</div><input value="{{$project->du_id}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->podriadchik}}</div><input value="{{$project->podriadchik}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->du_name_v_zakaze}}</div><input value="{{$project->du_name_v_zakaze}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->adres_v_id}}</div><input value="{{$project->adres_v_id}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->adres_propisannyi_v_SEZ_na_R1}}</div><input value="{{$project->adres_propisannyi_v_SEZ_na_R1}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->city}}</div><input value="{{$project->city}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->year}}</div><input value="{{$project->year}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->prioritet}}</div><input value="{{$project->Column8}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->bs_v_efire}}</div><input value="{{$project->Column9}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->zakaz_R1_№}}</div><input value="{{$project->Column10}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->zakaz_R1_data_nachala}}</div><input value="{{$project->Column11}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->zakaz_R1_data_okonchaniia_zakaza}}</div><input value="{{$project->Column12}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->zakaz_R1_data_kommentarii}}</div><input value="{{$project->Column13}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->ID_OTR_polucheny_data}}</div><input value="{{$project->Column14}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->ID_OTR_polucheny_data_kommentarii}}</div><input value="{{$project->Column15}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->fotootchet_poluchen_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->fotootchet_poluchen_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->dogovor_arendy_poluchen_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->dannye_SO_data_zaprosa}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->dannye_SO_otvetstvennost}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->dannye_SO_polucheny}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->PSEZ_gotov_voprosy_voznikaiushchie_pri_razrabotke_PSEZ}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->PSEZ_gotov_planovaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->PSEZ_gotov_fakticheskaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->PSEZ_gotov_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->PSEZ_gotov_proektirovshchik}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->PSEZ_peredan_v_OI_planovaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->PSEZ_peredan_v_OI_fakticheskaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->PSEZ_peredan_v_OI_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->ekspertnoe_zacliuchenie_polucheno_planovaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->ekspertnoe_zacliuchenie_polucheno_fakticheskaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->ekspertnoe_zacliuchenie_polucheno_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->ekspertnoe_zacliuchenie_peredano_v_RPN_planovaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->ekspertnoe_zacliuchenie_peredano_v_RPN_fakticheskaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->ekspertnoe_zacliuchenie_peredano_v_RPN_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->R1_gotov_planovaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->R1_gotov_fakticheskaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->R1_gotov_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->akt_priemki_SP_E1_R1_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->akt_priemki_SP_E1_R1_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->oplata_SP_E1_R1_obshchaia_summa_zakaza_NDS}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->oplata_SP_E1_R1_avans}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->oplata_SP_E1_R1_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->oplata_SP_E1_R1_post_oplata}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->post_oplata_SP_E1_R1_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->zakaz_Р2_№}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->zakaz_R2_data_nachala}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->zakaz_R2_data_okonchaniia_zakaza}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->zakaz_R2_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->zamery_EMI_planovaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->zamery_EMI_fakticheskaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->zamery_EMI_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->oformlenie_protokola_planovaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->oformlenie_protokola_fakticheskaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->oformlenie_protokola_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->ekspertiza_otpravlena_v_RPN_planovaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->ekspertiza_otpravlena_v_RPN_fakticheskaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->ekspertiza_otpravlena_v_RPN__data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->R2_gotov_planovaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->R2_gotov_fakticheskaia_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->R2_gotov_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->akt_priemki_E2_R2_data}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->akt_priemki_E2_R2_дата_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->oplata_Е2_R2_obshchaia_summa_zakaza_NDS}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->oplata_Е2_R2_avans}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->oplata_Е2_R2_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->oplata_Е2_R2_post_oplata}}</div><input value="{{$project->Column16}}"></td>
                                <td data-name="contractor" class="edit"><div>{{$project->post_oplata_Е2_R2_data_kommentarii}}</div><input value="{{$project->Column16}}"></td>




                            </tr>
                        @endforeach




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

