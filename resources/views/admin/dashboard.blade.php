@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <a class="btn btn-block btn-default" href="{{ route('user.create') }}">Создать пользователя</a>
                <div class="panel panel-default">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Список пользователей</th>
                    </tr>
                    </thead>

                    <tbody>

                    @forelse ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>

                        </tr>

                    @empty

                    @endforelse
                    </tbody>
                </table>
                </div>
            </div>

            <div class="col-sm-6">

            </div>
        </div>
    </div>
@endsection