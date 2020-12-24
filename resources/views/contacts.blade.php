@extends('layouts.app')
@section('content')
    <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>{{__('Список контактов')}}</h1>
        <table class="table table-bordered">
            <tr>
                <th>{{__('ID')}}</th>
                <th>{{__('membership_date')}}</th>
                <th>{{__('name')}}</th>
                <th>{{__('age')}}</th>
                <th>{{__('city')}}</th>
                <th>{{__('numbers')}}</th>
            </tr>

            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->membership_date }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->age }}</td>
                    <td>{{ $contact->city }}</td>

                    @component('alert')
                        @slot('id', $contact->id)
                        @slot('name', $contact->name)
                        @slot('numbers', $contact->numbers)
                        @slot('buttons')
                            <button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close')}}</button>
                        @endslot
                    @endcomponent

                    <td>
                        <a href="#" class="btn btn-success phones" rel="{{$contact->id}}" onclick="$('#{{$contact->id}}').modal({'show':true});">{{__('номера телефонов')}}</a>
                    </td>
                </tr>
            @endforeach
        </table>

        <div class="clearfix">
            {{ $contacts->links( "pagination::bootstrap-4") }}
        </div>
    </main>

@endsection
