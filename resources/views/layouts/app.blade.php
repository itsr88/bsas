<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Система учёта базовых станций') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Система учёта базовых станций') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Войти</a></li>
                        @else
                            <li>
                                <a href="{{ route('project.index') }}" class="dropdown-toogle" role="button" aria-expanded="false">Проекты</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    <script>

        $('.wrap').on('click', '.edit', function() {
            $this = $(this);
            $this.find('div').hide();
            $input = $this.find('input').show().focus();
        });
        $('.wrap').on('focusout', '.edit input', function() {
            var $input = $(this).hide();
            var $tr = $input.closest('tr');
            var $td = $input.parent();
            var defaultValue = $input[0].defaultValue;
            var newValue = $input.val();
            var $div = $tr.find('div').text($input.val()).show();


            // if(defaultValue === newValue) {
            //     return false;
            // }
            // function fail(){
            //     $div.text(defaultValue);
            //     $input.val(defaultValue);
            //     alert('не удалось изменить элемент');
            // }

            {{--$.ajax({--}}
                {{--method: 'POST',--}}
                {{--url: '{{route('ajaxupdate')}}',--}}
                {{--data: {--}}
                    {{--'id' : $tr.data('id'),--}}
                    {{--'name' : $td.data('name')--}}
                {{--}--}}
            {{--})--}}
            $.post('{{route('ajaxupdate')}}', {
                id: $tr.data('id'),
                name: $td.data('name'),
                value: newValue,
                html: 'ok'
            }).done(function(data){
                if(data==='ok'){
                    $input[0].defaultValue = newValue;
                } else {
                    fail()
                }
            }).fail(fail)
        })


    </script>
</body>
</html>
