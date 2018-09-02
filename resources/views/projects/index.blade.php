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
        <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>DU ID</th>
            <th>ПОДРЯДЧИК</th>
            <th>DU Name (в ЗАКАЗЕ)</th>
            <th>Адрес в ИД</th>
            <th>Адрес прописанный в СЭЗ на Р1</th>
            <th>City</th>
            <th>Year</th>
            <th>Приоритет</th>
            <th>БС в эфире</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>

        </tr>
        </thead>
        <tbody>

        @forelse ($projects as $project)
            <tr>
                <td>{{$project->contractor}}</td>
                <td>{{$project->du_id}}</td>
                <td>{{$project->du_name}}</td>
                <td>{{$project->order_R1_date_of_the_beginning}}</td>
            </tr>

            @empty

        @endforelse


        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@TwBootstrap</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@TwBootstrap</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@TwBootstrap</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@TwBootstrap</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@TwBootstrap</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@TwBootstrap</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">4</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
    </div>
</div>
</div>
</div>

@endsection