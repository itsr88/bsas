@extends('admin.layouts.app_admin')

@section('content')

<div class="container-fluid">

    <hr>

    <a href="{{ route('admin.project.create') }}" class="btn btn-primary pull-left">Новый проект</a>


    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>#</th>
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

@endsection