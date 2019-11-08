@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                @if(count($user->contacts) > 0)
                    <h2 class="mb-5 text-center">Liste de vos {{count($user->contacts)}} Contacts</h2>
                    @foreach($user->contacts as $contact)
{{--                        @if (count($records) === 1)--}}
{{--                            I have one record!--}}
{{--                        @elseif (count($records) > 1)--}}
{{--                            I have multiple records!--}}
{{--                        @else--}}
{{--                            I don't have any records!--}}
{{--                        @endif--}}
                    <div class="shadow p-3 my-2 bg-light rounded"><a href="/show/contact/{{$contact->id}}">{{$contact->fullname}}</a></div>
                    @endforeach
                @else
                    <h2>Vous n'avez pas de Contact</h2>

                @endif

            </div>
        </div>
    </div>
@endsection

