@extends('layouts.index')

@section('content')
    <div class="mt-4">
        <form class="form_pupil" method="POST" action="{{ route('pupil.update', $pupil->id) }}">
            @csrf
            @method('PATCH')
            <div class="container">
                <div class="half">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label fw-bold">Фамилия</label>
                        <div class="col-sm-9">
                            <input type="text" name="surname" class="form-control" value="{{ $pupil->surname }}">
                        </div>
                        @error('surname')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Имя</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="inputPassword3"
                                   value="{{ $pupil->name }}">
                        </div>
                        @error('name')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Отчество</label>
                        <div class="col-sm-9">
                            <input type="text" name="father_name" class="form-control" id="inputPassword3"
                                   value="{{ $pupil->father_name }}">
                        </div>
                        @error('father_name')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Дата рождения</label>
                        <div class="col-sm-9">
                            <input type="text" name="birthday" class="form-control" id="inputPassword3"
                                   value="{{ date('d.m.Y',strtotime($pupil->birthday)) }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Пол</label>
                        <div class="col-sm-9">
                            <select name="sex" class="form-control">
                                <option value="">---</option>
                                <option value="Мужской" {{ $pupil->sex == 'Мужской' ? ' selected' : ''}}>Мужской</option>
                                <option value="Женский" {{ $pupil->sex == 'Женский' ? ' selected' : ''}}>Женский</option>
                            </select>
                            @error('sex')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Дата поступления</label>
                        <div class="col-sm-9">
                            <input type="text" name="entrance" class="form-control" id="inputPassword3"
                                   value="{{ date('d.m.Y', strtotime($pupil->entrance)) }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Регистрация</label>
                        <div class="col-sm-9">
                            <input type="text" name="registration" class="form-control" id="inputPassword3"
                                   value="{{ $pupil->registration }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Место учёбы</label>
                        <div class="col-sm-9">
                            <input type="text" name="study" class="form-control" id="inputPassword3"
                                   value="{{ $pupil->study }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Место проживания</label>
                        <div class="col-sm-9">
                            <input type="text" name="corpus" class="form-control" id="inputPassword3"
                                   value="{{ $pupil->corpus }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Комната</label>
                        <div class="col-sm-9">
                            <input type="text" name="room" class="form-control" id="inputPassword3"
                                   value="{{ $pupil->room }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Ивалидность</label>
                        <div class="col-sm-9">
                            <select name="disability" class="form-control">
                                <option value="">---</option>
                                <option value="Да" {{ $pupil->disability == 'Да' ? 'selected' : ''}} >Да
                                </option>
                                <option
                                    value="Нет" {{ $pupil->disability == 'Нет' ? 'selected' : ''}}>
                                    Нет
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">ОВЗ</label>
                        <div class="col-sm-9">
                            <select name="ovz" class="form-control">
                                <option value="">---</option>
                                <option value="Да" {{ $pupil->ovz == 'Да' ? 'selected' : ''}} >Да
                                </option>
                                <option
                                    value="Нет" {{ $pupil->ovz == 'Нет' ? 'selected' : ''}}>
                                    Нет
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Помещён</label>
                        <div class="col-sm-9">
                            <select name="placement" class="form-control">
                                <option value="">---</option>
                                <option value="Временно" {{ $pupil->placement == 'Временно' ? 'selected' : ''}} >Временно
                                </option>
                                <option
                                    value="Постоянно" {{ $pupil->placement == 'Постоянно' ? 'selected' : ''}}>
                                    Постоянно
                                </option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="half">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label fw-bold">Документ</label>
                        <div class="col-sm-9">
                            <select name="identification" class="form-control">
                                <option value="">---</option>
                                <option value="Паспорт" {{ $pupil->identification == 'Паспорт' ? 'selected' : ''}} >
                                    Паспорт
                                </option>
                                <option
                                    value="Свидетельство о рождении" {{ $pupil->identification == 'Свидетельство о рождении' ? 'selected' : ''}}>
                                    Свидетельство о
                                    рождении
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Номер</label>
                        <div class="col-sm-9">
                            <input type="text" name="identification_number" class="form-control" id="inputPassword3"
                                   value="{{ $pupil->identification_number }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Дата выдачи</label>
                        <div class="col-sm-9">
                            <input type="text" name="date_get" class="form-control" id="inputPassword3"
                                   value="{{ $pupil->date_get == '1970-01-01' ? '' : date('d.m.Y', strtotime($pupil->date_get)) }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Кем выдан</label>
                        <div class="col-sm-9">
                            <input type="text" name="who_get" class="form-control" id="inputPassword3"
                                   value="{{ $pupil->who_get }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">СНИЛС</label>
                        <div class="col-sm-9">
                            <input type="text" name="SNILS" class="form-control" id="inputPassword3"
                                   value="{{ $pupil->SNILS }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">ОСЗН (регистрация)</label>
                        <div class="col-sm-9">
                            <input type="text" name="oszn" class="form-control" id="inputPassword3"
                                   value="{{ $pupil->oszn }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 submit">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>
    </div>
@endsection
