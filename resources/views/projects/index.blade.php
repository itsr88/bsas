@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container-fluid">
            <a href="{{ route('project.create') }}" class="btn btn-default pull-left">Новый проект</a>
        </div>
    </div>
    <div class="col-md-12">

        <div class="container-fluid">
            <div class="panel panel-default table-responsive">
                <table class="wrap table table-bordered table-hover">
                    <thead>
                    <tr style="text-align: center;">
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
                        <th rowspan="2">Проектировщик</th>
                        <th colspan="3">ПСЭЗ передан в ОИ</th>
                        <th colspan="3">Экспертное Заключение получено</th>
                        <th colspan="3">Экспертное Заключение передано в РПН</th>
                        <th colspan="3">Р1 Готов</th>
                        <th colspan="2">Акт приемки SP,E1,R1</th>
                        <th colspan="5">Оплата SP,E1,R1</th>
                        <th colspan="4">Заказ Р2</th>
                        <th colspan="3">Замеры ЭМИ</th>
                        <th colspan="3">Оформление протокола</th>
                        <th colspan="3">Экспертиза отправлена в РПН</th>
                        <th colspan="3">Р2 готов</th>
                        <th colspan="2">Акт приемки E2,R2</th>
                        <th colspan="5">Оплата Е2,R2</th>
                    </tr>
                    <tr style="text-align: center;">
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
                        <th>Плановая дата</th>
                        <th>Фактическая дата</th>
                        <th>Дата + комментарии</th>
                        <th>Плановая дата</th>
                        <th>Фактическая дата</th>
                        <th>Дата + комментарии</th>
                        <th>Плановая дата</th>
                        <th>Фактическая дата</th>
                        <th>Дата + комментарии</th>
                        <th>Плановая дата</th>
                        <th>Фактическая дата</th>
                        <th>Дата + комментарии</th>
                        <th>Дата</th>
                        <th>Дата + комментарии</th>
                        <th>Общая сумма заказа НДС</th>
                        <th>Аванс</th>
                        <th>Дата + комментарии</th>
                        <th>Пост оплата</th>
                        <th>Дата + комментарии</th>
                        <th>№</th>
                        <th>Дата начала</th>
                        <th>Дата окончания Заказа</th>
                        <th>Дата + Комментарии</th>
                        <th>Плановая дата</th>
                        <th>Фактическая дата</th>
                        <th>Комментарии</th>
                        <th>Плановая дата</th>
                        <th>Фактическая дата</th>
                        <th>Комментарии</th>
                        <th>Плановая дата</th>
                        <th>Фактическая дата</th>
                        <th>Дата + комментарии</th>
                        <th>Плановая дата</th>
                        <th>Фактическая дата</th>
                        <th>Дата + комментарии</th>
                        <th>Дата</th>
                        <th>Дата + комментарии</th>
                        <th>Общая сумма заказа НДС</th>
                        <th>Аванс</th>
                        <th>Дата + комментарии</th>
                        <th>Пост оплата</th>
                        <th>Дата + комментарии</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($projects as $project)
                        <tr id="{{$project->id}}">
                            <td data-name="id" class="id">{{$project->id}}</td>
                            <td data-name="du_id" class="edit du_id">{{$project->du_id}}</td>
                            <td data-name="podriadchik" class="edit podriadchik">{{$project->podriadchik}}</td>
                            <td data-name="du_name_v_zakaze" class="edit du_name_v_zakaze">{{$project->du_name_v_zakaze}}</td>
                            <td data-name="adres_v_id" class="edit adres_v_id">{{$project->adres_v_id}}</td>
                            <td data-name="adres_propisannyi_v_SEZ_na_R1" class="edit adres_propisannyi_v_SEZ_na_R1">{{$project->adres_propisannyi_v_SEZ_na_R1}}</td>
                            <td data-name="city" class="edit city">{{$project->city}}</td>
                            <td data-name="year" class="edit year">{{$project->year}}</td>
                            <td data-name="prioritet" class="edit prioritet">{{$project->prioritet}}</td>
                            <td data-name="bs_v_efire" class="edit bs_v_efire">{{$project->bs_v_efire}}</td>
                            <td data-name="zakaz_R1_num" class="edit bs_v_efire">{{$project->zakaz_R1_num}}</td>
                            <td data-name="zakaz_R1_data_nachala" class="edit bs_v_efire">{{$project->zakaz_R1_data_nachala}}</td>
                            <td data-name="zakaz_R1_data_okonchaniia_zakaza" class="edit">{{$project->zakaz_R1_data_okonchaniia_zakaza}}</td>
                            <td data-name="zakaz_R1_data_kommentarii" class="edit">{{$project->zakaz_R1_data_kommentarii}}</td>
                            <td data-name="ID_OTR_polucheny_data" class="edit">{{$project->ID_OTR_polucheny_data}}</td>
                            <td data-name="ID_OTR_polucheny_data_kommentarii" class="edit">{{$project->ID_OTR_polucheny_data_kommentarii}}</td>
                            <td data-name="fotootchet_poluchen_data" class="edit">{{$project->fotootchet_poluchen_data}}</td>
                            <td data-name="fotootchet_poluchen_data_kommentarii" class="edit">{{$project->fotootchet_poluchen_data_kommentarii}}</td>
                            <td data-name="dogovor_arendy_poluchen_kommentarii" class="edit">{{$project->dogovor_arendy_poluchen_kommentarii}}</td>
                            <td data-name="dannye_SO_data_zaprosa" class="edit">{{$project->dannye_SO_data_zaprosa}}</td><td data-name="dannye_SO_otvetstvennost" class="edit">{{$project->dannye_SO_otvetstvennost}}</td>
                            <td data-name="dannye_SO_polucheny" class="edit">{{$project->dannye_SO_polucheny}}</td>
                            <td data-name="PSEZ_gotov_voprosy_voznikaiushchie_pri_razrabotke_PSEZ" class="edit">{{$project->PSEZ_gotov_voprosy_voznikaiushchie_pri_razrabotke_PSEZ}}</td>
                            <td data-name="PSEZ_gotov_planovaia_data" class="edit">{{$project->PSEZ_gotov_planovaia_data}}</td>
                            <td data-name="PSEZ_gotov_fakticheskaia_data" class="edit">{{$project->PSEZ_gotov_fakticheskaia_data}}</td>
                            <td data-name="PSEZ_gotov_data_kommentarii" class="edit">{{$project->PSEZ_gotov_data_kommentarii}}</td>
                            <td data-name="PSEZ_gotov_proektirovshchik" class="edit">{{$project->PSEZ_gotov_proektirovshchik}}</td>
                            <td data-name="PSEZ_peredan_v_OI_planovaia_data" class="edit">{{$project->PSEZ_peredan_v_OI_planovaia_data}}</td>
                            <td data-name="PSEZ_peredan_v_OI_fakticheskaia_data" class="edit">{{$project->PSEZ_peredan_v_OI_fakticheskaia_data}}</td>
                            <td data-name="PSEZ_peredan_v_OI_data_kommentarii" class="edit">{{$project->PSEZ_peredan_v_OI_data_kommentarii}}</td>
                            <td data-name="ekspertnoe_zacliuchenie_polucheno_planovaia_data" class="edit">{{$project->ekspertnoe_zacliuchenie_polucheno_planovaia_data}}</td>
                            <td data-name="ekspertnoe_zacliuchenie_polucheno_fakticheskaia_data" class="edit">{{$project->ekspertnoe_zacliuchenie_polucheno_fakticheskaia_data}}</td>
                            <td data-name="ekspertnoe_zacliuchenie_polucheno_data_kommentarii" class="edit">{{$project->ekspertnoe_zacliuchenie_polucheno_data_kommentarii}}</td>
                            <td data-name="ekspertnoe_zacliuchenie_peredano_v_RPN_planovaia_data" class="edit">{{$project->ekspertnoe_zacliuchenie_peredano_v_RPN_planovaia_data}}</td>
                            <td data-name="ekspertnoe_zacliuchenie_peredano_v_RPN_fakticheskaia_data" class="edit">{{$project->ekspertnoe_zacliuchenie_peredano_v_RPN_fakticheskaia_data}}</td>
                            <td data-name="ekspertnoe_zacliuchenie_peredano_v_RPN_data_kommentarii" class="edit">{{$project->ekspertnoe_zacliuchenie_peredano_v_RPN_data_kommentarii}}</td>
                            <td data-name="R1_gotov_planovaia_data" class="edit">{{$project->R1_gotov_planovaia_data}}</td>
                            <td data-name="R1_gotov_fakticheskaia_data" class="edit">{{$project->R1_gotov_fakticheskaia_data}}</td>
                            <td data-name="R1_gotov_data_kommentarii" class="edit">{{$project->R1_gotov_data_kommentarii}}</td>
                            <td data-name="akt_priemki_SP_E1_R1_data" class="edit">{{$project->akt_priemki_SP_E1_R1_data}}</td>
                            <td data-name="akt_priemki_SP_E1_R1_data_kommentarii" class="edit">{{$project->akt_priemki_SP_E1_R1_data_kommentarii}}</td>
                            <td data-name="oplata_SP_E1_R1_obshchaia_summa_zakaza_NDS" class="edit">{{$project->oplata_SP_E1_R1_obshchaia_summa_zakaza_NDS}}</td>
                            <td data-name="oplata_SP_E1_R1_avans" class="edit">{{$project->oplata_SP_E1_R1_avans}}</td>
                            <td data-name="oplata_SP_E1_R1_data_kommentarii" class="edit">{{$project->oplata_SP_E1_R1_data_kommentarii}}</td>
                            <td data-name="oplata_SP_E1_R1_post_oplata" class="edit">{{$project->oplata_SP_E1_R1_post_oplata}}</td>
                            <td data-name="post_oplata_SP_E1_R1_data_kommentarii" class="edit">{{$project->post_oplata_SP_E1_R1_data_kommentarii}}</td>
                            <td data-name="zakaz_Р2_num" class="edit">{{$project->zakaz_Р2_num}}</td>
                            <td data-name="zakaz_R2_data_nachala" class="edit">{{$project->zakaz_R2_data_nachala}}</td>
                            <td data-name="zakaz_R2_data_okonchaniia_zakaza" class="edit">{{$project->zakaz_R2_data_okonchaniia_zakaza}}</td>
                            <td data-name="zakaz_R2_data_kommentarii" class="edit">{{$project->zakaz_R2_data_kommentarii}}</td>
                            <td data-name="zamery_EMI_planovaia_data" class="edit">{{$project->zamery_EMI_planovaia_data}}</td>
                            <td data-name="zamery_EMI_fakticheskaia_data" class="edit">{{$project->zamery_EMI_fakticheskaia_data}}</td>
                            <td data-name="zamery_EMI_kommentarii" class="edit">{{$project->zamery_EMI_kommentarii}}</td>
                            <td data-name="oformlenie_protokola_planovaia_data" class="edit">{{$project->oformlenie_protokola_planovaia_data}}</td>
                            <td data-name="oformlenie_protokola_fakticheskaia_data" class="edit">{{$project->oformlenie_protokola_fakticheskaia_data}}</td>
                            <td data-name="oformlenie_protokola_kommentarii" class="edit">{{$project->oformlenie_protokola_kommentarii}}</td>
                            <td data-name="ekspertiza_otpravlena_v_RPN_planovaia_data" class="edit">{{$project->ekspertiza_otpravlena_v_RPN_planovaia_data}}</td>
                            <td data-name="ekspertiza_otpravlena_v_RPN_fakticheskaia_data" class="edit">{{$project->ekspertiza_otpravlena_v_RPN_fakticheskaia_data}}</td>
                            <td data-name="ekspertiza_otpravlena_v_RPN__data_kommentarii" class="edit">{{$project->ekspertiza_otpravlena_v_RPN__data_kommentarii}}</td>
                            <td data-name="R2_gotov_planovaia_data" class="edit">{{$project->R2_gotov_planovaia_data}}</td>
                            <td data-name="R2_gotov_fakticheskaia_data" class="edit">{{$project->R2_gotov_fakticheskaia_data}}</td>
                            <td data-name="R2_gotov_data_kommentarii" class="edit">{{$project->R2_gotov_data_kommentarii}}</td>
                            <td data-name="akt_priemki_E2_R2_data" class="edit">{{$project->akt_priemki_E2_R2_data}}</td>
                            <td data-name="akt_priemki_E2_R2_data_kommentarii" class="edit">{{$project->akt_priemki_E2_R2_data_kommentarii}}</td>
                            <td data-name="oplata_Е2_R2_obshchaia_summa_zakaza_NDS" class="edit">{{$project->oplata_Е2_R2_obshchaia_summa_zakaza_NDS}}</td>
                            <td data-name="oplata_Е2_R2_avans" class="edit">{{$project->oplata_Е2_R2_avans}}</td>
                            <td data-name="oplata_Е2_R2_data_kommentarii" class="edit">{{$project->oplata_Е2_R2_data_kommentarii}}</td>
                            <td data-name="oplata_Е2_R2_post_oplata" class="edit">{{$project->oplata_Е2_R2_post_oplata}}</td>
                            <td data-name="post_oplata_Е2_R2_data_kommentarii" class="edit">{{$project->post_oplata_Е2_R2_data_kommentarii}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

