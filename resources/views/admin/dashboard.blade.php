@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-block btn-default" href="{{ route('user.create') }}">Создать пользователя</a>
                <div class="panel panel-default">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th data-toggle="true">Список пользователей</th>
                        <th data-toggle="true">E-mail</th>
                        <th data-hide="phone">Роли</th>
                        <th class="text-right" data-sort-ignore="true">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles()->pluck('name')->implode(', ') }}</td>
                            <td class="text-right">
                                <form onsubmit="if(confirm('Удалить?')){ return true }else{return false}" action="{{route('user.destroy', $user)}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger">Удалить</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                    @endforelse
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection