@extends('layouts.layout')

@section('title', 'delete')

@section('content')

        <section>
            <p>Por aquí se eliminará un equipo</p>
            <ul>
                @foreach ($teams as $team)
                    {{-- <li>{{$team->name}}</li>
                    <li>{{$team->id}}</li> --}}

                    <li><a href="{{route('show2',$team->id)}}">{{$team->name}}</a></li>
                @endforeach
            </ul>
            {{$teams->links()}}
        </section>
@endsection

