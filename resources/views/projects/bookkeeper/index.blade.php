@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="container-fluid">
            <div class="panel panel-default table-responsive">
                <table class="wrap table table-bordered table-hover">
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
                                <td data-name="du_id" class=" du_id">{{$project->du_id}}</td>
                                <td data-name="podriadchik" class=" podriadchik">{{$project->podriadchik}}</td>
                                <td data-name="du_name_v_zakaze" class="du_name_v_zakaze">{{$project->du_name_v_zakaze}}</td>
                                <td data-name="adres_v_id" class=" adres_v_id">{{$project->adres_v_id}}</td>
                                <td data-name="adres_propisannyi_v_SEZ_na_R1" class=" adres_propisannyi_v_SEZ_na_R1">{{$project->adres_propisannyi_v_SEZ_na_R1}}</td>
                                <td data-name="city" class="city">{{$project->city}}</td>
                                <td data-name="year" class=" year"><div>{{$project->year}}</div></td>
                                <td data-name="prioritet" class="prioritet"><div>{{$project->prioritet}}</div></td>
                                <td data-name="bs_v_efire" class=" bs_v_efire"><div>{{$project->bs_v_efire}}</div></td>
                                <td data-name="zakaz_R1_num" class=" bs_v_efire"><div>{{$project->zakaz_R1_num}}</div></td>
                                <td data-name="zakaz_R1_data_nachala" class="bs_v_efire"><div>{{$project->zakaz_R1_data_nachala}}</div></td>
                                <td data-name="zakaz_R1_data_okonchaniia_zakaza" class=""><div>{{$project->zakaz_R1_data_okonchaniia_zakaza}}</div></td>
                                <td data-name="zakaz_R1_data_kommentarii" class="">{{$project->zakaz_R1_data_kommentarii}}</td>
                                <td data-name="ID_OTR_polucheny_data" class=""><div>{{$project->ID_OTR_polucheny_data}}</div></td>
                                <td data-name="ID_OTR_polucheny_data_kommentarii" class=""><div>{{$project->ID_OTR_polucheny_data_kommentarii}}</div></td>
                                <td data-name="fotootchet_poluchen_data" class=""><div>{{$project->fotootchet_poluchen_data}}</div></td>
                                <td data-name="fotootchet_poluchen_data_kommentarii" class=""><div>{{$project->fotootchet_poluchen_data_kommentarii}}</div></td>
                                <td data-name="dogovor_arendy_poluchen_kommentarii" class=""><div>{{$project->dogovor_arendy_poluchen_kommentarii}}</div></td>
                                <td data-name="dannye_SO_data_zaprosa" class=""><div>{{$project->dannye_SO_data_zaprosa}}</div></td>
                                <td data-name="dannye_SO_otvetstvennost" class=""><div>{{$project->dannye_SO_otvetstvennost}}</div></td>
                                <td data-name="dannye_SO_polucheny" class=""><div>{{$project->dannye_SO_polucheny}}</div></td>
                                <td data-name="PSEZ_gotov_voprosy_voznikaiushchie_pri_razrabotke_PSEZ" class=""><div>{{$project->PSEZ_gotov_voprosy_voznikaiushchie_pri_razrabotke_PSEZ}}</div></td>
                                <td data-name="PSEZ_gotov_planovaia_data" class=""><div>{{$project->PSEZ_gotov_planovaia_data}}</div></td>
                                <td data-name="PSEZ_gotov_fakticheskaia_data" class=""><div>{{$project->PSEZ_gotov_fakticheskaia_data}}</div></td>
                                <td data-name="PSEZ_gotov_data_kommentarii" class=""><div>{{$project->PSEZ_gotov_data_kommentarii}}</div></td>
                                <td data-name="PSEZ_gotov_proektirovshchik" class=""><div>{{$project->PSEZ_gotov_proektirovshchik}}</div></td>
                                <td data-name="PSEZ_peredan_v_OI_planovaia_data" class=""><div>{{$project->PSEZ_peredan_v_OI_planovaia_data}}</div></td>
                                <td data-name="PSEZ_peredan_v_OI_fakticheskaia_data" class=""><div>{{$project->PSEZ_peredan_v_OI_fakticheskaia_data}}</div></td>
                                <td data-name="PSEZ_peredan_v_OI_data_kommentarii" class=""><div>{{$project->PSEZ_peredan_v_OI_data_kommentarii}}</div></td>
                                <td data-name="ekspertnoe_zacliuchenie_polucheno_planovaia_data" class=""><div>{{$project->ekspertnoe_zacliuchenie_polucheno_planovaia_data}}</div></td>
                                <td data-name="ekspertnoe_zacliuchenie_polucheno_fakticheskaia_data" class=""><div>{{$project->ekspertnoe_zacliuchenie_polucheno_fakticheskaia_data}}</div></td>
                                <td data-name="ekspertnoe_zacliuchenie_polucheno_data_kommentarii" class=""><div>{{$project->ekspertnoe_zacliuchenie_polucheno_data_kommentarii}}</div></td>
                                <td data-name="ekspertnoe_zacliuchenie_peredano_v_RPN_planovaia_data" class=""><div>{{$project->ekspertnoe_zacliuchenie_peredano_v_RPN_planovaia_data}}</div></td>
                                <td data-name="ekspertnoe_zacliuchenie_peredano_v_RPN_fakticheskaia_data" class=""><div>{{$project->ekspertnoe_zacliuchenie_peredano_v_RPN_fakticheskaia_data}}</div></td>
                                <td data-name="ekspertnoe_zacliuchenie_peredano_v_RPN_data_kommentarii" class=""><div>{{$project->ekspertnoe_zacliuchenie_peredano_v_RPN_data_kommentarii}}</div></td>
                                <td data-name="R1_gotov_planovaia_data" class=""><div>{{$project->R1_gotov_planovaia_data}}</div></td>
                                <td data-name="R1_gotov_fakticheskaia_data" class=""><div>{{$project->R1_gotov_fakticheskaia_data}}</div></td>
                                <td data-name="R1_gotov_data_kommentarii" class=""><div>{{$project->R1_gotov_data_kommentarii}}</div></td>
                                <td data-name="akt_priemki_SP_E1_R1_data" class="edit"><div>{{$project->akt_priemki_SP_E1_R1_data}}</div></td>
                                <td data-name="akt_priemki_SP_E1_R1_data_kommentarii" class="edit"><div>{{$project->akt_priemki_SP_E1_R1_data_kommentarii}}</div></td>
                                <td data-name="oplata_SP_E1_R1_obshchaia_summa_zakaza_NDS" class="edit"><div>{{$project->oplata_SP_E1_R1_obshchaia_summa_zakaza_NDS}}</div></td>
                                <td data-name="oplata_SP_E1_R1_avans" class="edit"><div>{{$project->oplata_SP_E1_R1_avans}}</div></td>
                                <td data-name="oplata_SP_E1_R1_data_kommentarii" class="edit"><div>{{$project->oplata_SP_E1_R1_data_kommentarii}}</div></td>
                                <td data-name="oplata_SP_E1_R1_post_oplata" class="edit"><div>{{$project->oplata_SP_E1_R1_post_oplata}}</div></td>
                                <td data-name="post_oplata_SP_E1_R1_data_kommentarii" class="edit"><div>{{$project->post_oplata_SP_E1_R1_data_kommentarii}}</div></td>
                                <td data-name="zakaz_Р2_num" class=""><div>{{$project->zakaz_Р2_num}}</div></td>
                                <td data-name="zakaz_R2_data_nachala" class=""><div>{{$project->zakaz_R2_data_nachala}}</div></td>
                                <td data-name="zakaz_R2_data_okonchaniia_zakaza" class=""><div>{{$project->zakaz_R2_data_okonchaniia_zakaza}}</div></td>
                                <td data-name="zakaz_R2_data_kommentarii" class=""><div>{{$project->zakaz_R2_data_kommentarii}}</div></td>
                                <td data-name="zamery_EMI_planovaia_data" class=""><div>{{$project->zamery_EMI_planovaia_data}}</div></td>
                                <td data-name="zamery_EMI_fakticheskaia_data" class=""><div>{{$project->zamery_EMI_fakticheskaia_data}}</div></td>
                                <td data-name="zamery_EMI_kommentarii" class=""><div>{{$project->zamery_EMI_kommentarii}}</div></td>
                                <td data-name="oformlenie_protokola_planovaia_data" class=""><div>{{$project->oformlenie_protokola_planovaia_data}}</div></td>
                                <td data-name="oformlenie_protokola_fakticheskaia_data" class=""><div>{{$project->oformlenie_protokola_fakticheskaia_data}}</div></td>
                                <td data-name="oformlenie_protokola_kommentarii" class=""><div>{{$project->oformlenie_protokola_kommentarii}}</div></td>
                                <td data-name="ekspertiza_otpravlena_v_RPN_planovaia_data" class=""><div>{{$project->ekspertiza_otpravlena_v_RPN_planovaia_data}}</div></td>
                                <td data-name="ekspertiza_otpravlena_v_RPN_fakticheskaia_data" class=""><div>{{$project->ekspertiza_otpravlena_v_RPN_fakticheskaia_data}}</div></td>
                                <td data-name="ekspertiza_otpravlena_v_RPN__data_kommentarii" class=""><div>{{$project->ekspertiza_otpravlena_v_RPN__data_kommentarii}}</div></td>
                                <td data-name="R2_gotov_planovaia_data" class=""><div>{{$project->R2_gotov_planovaia_data}}</div></td>
                                <td data-name="R2_gotov_fakticheskaia_data" class=""><div>{{$project->R2_gotov_fakticheskaia_data}}</div></td>
                                <td data-name="R2_gotov_data_kommentarii" class=""><div>{{$project->R2_gotov_data_kommentarii}}</div></td>
                                <td data-name="akt_priemki_E2_R2_data" class="edit"><div>{{$project->akt_priemki_E2_R2_data}}</div></td>
                                <td data-name="akt_priemki_E2_R2_data_kommentarii" class="edit"><div>{{$project->akt_priemki_E2_R2_data_kommentarii}}</div></td>
                                <td data-name="oplata_Е2_R2_obshchaia_summa_zakaza_NDS" class="edit"><div>{{$project->oplata_Е2_R2_obshchaia_summa_zakaza_NDS}}</div></td>
                                <td data-name="oplata_Е2_R2_avans" class="edit"><div>{{$project->oplata_Е2_R2_avans}}</div></td>
                                <td data-name="oplata_Е2_R2_data_kommentarii" class="edit"><div>{{$project->oplata_Е2_R2_data_kommentarii}}</div></td>
                                <td data-name="oplata_Е2_R2_post_oplata" class="edit"><div>{{$project->oplata_Е2_R2_post_oplata}}</div></td>
                                <td data-name="post_oplata_Е2_R2_data_kommentarii" class="edit"><div>{{$project->post_oplata_Е2_R2_data_kommentarii}}</div></td>
                            </tr>
                        @endforeach




                        </tbody>
                    </table>
                </div>
            </div>
        </div>


@endsection

