@extends('layouts.index')

@section('content')
    <div class="mt-4">
        <form class="form_pupil" method="POST" action="{{ route('pupil.store') }}">
            @csrf
            <div class="container">
                <div class="half">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label fw-bold">Фамилия</label>
                        <div class="col-sm-9">
                            <input type="text" name="surname" class="form-control" value="{{ old('surname') }}">
                        </div>
                        @error('surname')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Имя</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="inputPassword3" value="{{ old('name') }}">
                        </div>
                        @error('name')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Отчество</label>
                        <div class="col-sm-9">
                            <input type="text" name="father_name" class="form-control" id="inputPassword3" value="{{ old('father_name') }}">
                        </div>
                        @error('father_name')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Дата рождения</label>
                        <div class="col-sm-9">
                            <input type="text" name="birthday" class="form-control" id="inputPassword3" value="{{ old('birthday') }}">
                        </div>
                        @error('birthday')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Пол</label>
                        <div class="col-sm-9">
                            <select name="sex" class="form-control">
                                <option value="">---</option>
                                <option value="Мужской" {{ old('sex') == 'Мужской' ? ' selected' : ''}}>Мужской</option>
                                <option value="Женский" {{ old('sex') == 'Женский' ? ' selected' : ''}}>Женский</option>
                            </select>
                            @error('sex')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Дата поступления</label>
                        <div class="col-sm-9">
                            <input type="text" name="entrance" class="form-control" value="{{ old('entrance') }}">
                        </div>
                        @error('entrance')
                        <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Регистрация</label>
                        <div class="col-sm-9">
                            <input type="text" name="registration" class="form-control" value="{{ old('registration') }}">
                            @error('registration')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Место учёбы</label>
                        <div class="col-sm-9">
                            <input type="text" name="study" class="form-control" value="{{ old('study') }}">
                            @error('study')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Место проживания</label>
                        <div class="col-sm-9">
                            <input type="text" name="corpus" class="form-control" value="{{ old('corpus') }}">
                            @error('corpus')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Комната</label>
                        <div class="col-sm-9">
                            <input type="text" name="room" class="form-control" value="{{ old('room') }}">
                            @error('room')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Ивалидность</label>
                        <div class="col-sm-9">
                            <select name="disability" class="form-control">
                                <option value="">---</option>
                                <option value="Да" {{ old('disability') == 'Да' ? ' selected' : ''}}>Да</option>
                                <option value="Нет" {{ old('disability') == 'Нет' ? ' selected' : ''}}>Нет</option>
                            </select>
                            @error('disability')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">ОВЗ</label>
                        <div class="col-sm-9">
                            <select name="ovz" class="form-control">
                                <option value="">---</option>
                                <option value="Да" {{ old('ovz') == 'Да' ? ' selected' : ''}}>Да</option>
                                <option value="Нет" {{ old('ovz') == 'Нет' ? ' selected' : ''}}>Нет</option>
                            </select>
                            @error('ovz')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Помещён</label>
                        <div class="col-sm-9">
                            <select name="placement" class="form-control">
                                <option value="">---</option>
                                <option value="Временно" {{ old('placement') == 'Временно' ? ' selected' : ''}}>Временно</option>
                                <option value="Постоянно" {{ old('placement') == 'Постоянно'  ? ' selected' : ''}}>Постоянно</option>
                            </select>
                            @error('placement')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="half">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label fw-bold">Документ</label>
                        <div class="col-sm-9">
                            <select name="identification" class="form-control">
                                <option value="">---</option>
                                <option value="Паспорт" {{ old('identification') == 'Паспорт' ? ' selected' : ''}}>Паспорт</option>
                                <option value="Свидетельство о рождении" {{ old('identification') == 'Свидетельство о рождении' ? ' selected' : ''}}>Свидетельство о рождении</option>
                            </select>
                            @error('identification')
                            <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Номер</label>
                        <div class="col-sm-9">
                            <input type="text" name="identification_number" class="form-control" value="{{ old('identification_number') }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Дата выдачи</label>
                        <div class="col-sm-9">
                            <input type="text" name="date_get" class="form-control" value="{{ old('date_get') }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Кем выдан</label>
                        <div class="col-sm-9">
                            <input type="text" name="who_get" class="form-control" value="{{ old('who_get') }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">СНИЛС</label>
                        <div class="col-sm-9">
                            <input type="text" name="SNILS" class="form-control" value="{{ old('SNILS') }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">ОСЗН (регистрация)</label>
                        <div class="col-sm-9">
                            <input type="text" name="oszn" class="form-control" value="{{ old('oszn') }}">
                        </div>
                    </div>
                    <div class="form-group row mt-1">
                        <label for="inputPassword3" class="col-sm-2 col-form-label fw-bold">Статус</label>
                        <div class="col-sm-9">
                            <select name="status" class="form-control">
                                <option value="">---</option>
                                <option value="Сирота" {{ old('status') == 'Сирота' ? ' selected' : ''}}>Мужской</option>
                                <option value="Ограничены в род. правах" {{ old('status') == 'Ограничены в род. правах' ? ' selected' : ''}}>Ограничены в род. правах</option>
                                <option value="Лишены в род. правах" {{ old('status') == 'Лишены в род. правах' ? ' selected' : ''}}>Лишены в род. правах</option>
                            </select>
                            @error('status')
                            <div class="error">{{ $message }}</div>
                            @enderror
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
