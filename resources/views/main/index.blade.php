@extends('layouts.index')

@section('content')
    <div class="all_filtr">
        <div class="filtr">

            <form class="form_filtr" action="{{route('pupil.index')}}" method="POST">
                @csrf
                @method('POST')
                <select class="form-select padding_left" aria-label="Default select example" name="filter">
                    <option value="sort" selected>Алфавит</option>
                    <option value="age">Возраст</option>
                    <option value="entrance">Зачисление</option>
                    <option value="город Москва, Ясный проезд, дом 24А">Декабристов</option>
                    <option value="corpusY">Ясный</option>
                </select>

                <div class="form-group padding_left">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="От" name="ot">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="До" name="do">
                </div>
                <button type="submit" class="btn btn-primary padding_left">Фильтр</button>

            </form>

        </div>
        <div class="search">

            <form class="form_search" action="#" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="inputPassword2" placeholder="От">
                </div>
                <button type="submit" class="btn btn-success padding_left">Поиск</button>
            </form>
            <a href=" {{ route('pupil.create') }} ">
                <button type="submit" class="btn btn-outline-primary padding_left">Добавить воспитанника</button>
            </a>
        </div>
    </div>
    <div class="items_filtr">
        <div class="item_f">Всего детей: <b>{{ $pupils->count() }}</b></div>
        <div class="item_f"><a href="?sex=Мужской">Мальчики: <b>{{ $pupils->where('sex', 'Мужской')->count() }}</b></a></div>
        <div class="item_f"><a href="?sex=Женский">Девочки: <b>{{ $pupils->where('sex', 'Женский')->count() }}</b></a></div>
        <div class="item_f"><a href="?{{ http_build_query(array_merge($_GET, ["disability"=>"Да"])) }}">Инвалиды: <b>{{ $pupils->where('disability', 'Да')->count() }}</b></a></div>
        <div class="item_f"><a href="?placement=Временно">Временные: <b>{{ $pupils->where('placement', 'Временно')->count() }}</b></a>
        </div>
        <div class="item_f"><a href="#">ОВЗ: <b>{{ $pupils->where('ovz', 'Да')->count() }}</b></a></div>
        <div class="item_f"><a href="#">Декабристов:
                <b>{{ $pupils->where('corpus', 'город Москва, улица Декабристов, дом 8, корпус 3')->count() }}</b></a>
        </div>
        <div class="item_f"><a href="#">Ясный:
                <b>{{ $pupils->where('corpus', 'город Москва, Ясный проезд, дом 24А')->count() }}</b></a></div>
        <div class="item_f"><a href="#">Сироты: <b>{{ $pupils->where('status', 'Сирота')->count() }}</b></a></div>
        <div class="item_f"><a href="#">БОМЖ: <b>{{ $pupils->where('registration', 'БОМЖ')->count() }}</b></a></div>
    </div>
    <div class="content">
        <div class="list_pupil">

            <table class="table">
                <tr class="title_table">
                    <th class="number">№</th>
                    <th class="FIO">ФИО</th>
                    <th class="birthday">Дата рождения</th>
                    <th class="age">Возраст</th>
                    <th class="enter">Дата поступления</th>
                    <th class="registration">Регистация</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($pupils as $pupil)
                    <tr>
                        <td class="number">{{ $count }}</td>
                        <td class="FIO">{{ $pupil->surname.' '.$pupil->name.' '.$pupil->father_name}}</td>
                        @php
                            $date = strtotime($pupil->birthday)
                        @endphp
                        <td class="birthday">{{ date('d.m.Y', $date) }}</td>
                        <td class="age">{{ $pupil->age }}</td>
                        @php
                            $date = strtotime($pupil->entrance)
                        @endphp
                        <td class="enter">{{ date('d.m.Y', $date) }}</td>
                        <td class="registration">{{ $pupil->registration }}</td>
                        <td class="icon">
                            <a href="{{ route('pupil.show', $pupil->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path
                                        d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('pupil.destroy', $pupil->id) }}" style="border: none" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @php($count++)
                @endforeach
            </table>

        </div>
    </div>
@endsection


