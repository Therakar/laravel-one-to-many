@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="mt-5 mb-3">
                <h5>{{$type->name}}</h5>
                @if (count($type->projects) > 0)
                    <ul>
                        @foreach ($type->projects as $project)
                            <li><a class="btn btn-primary" href="{{route('admin.projects.show', $project)}}">{{$project->title}}</a></li>
                        @endforeach
                    </ul>
                @else
                    <h3>No Matches</h3>
                @endif
                
                

        </div>
        <a href="{{ route('admin.types.index')}}" class="btn btn-primary">Return to Types List</a>
    </div>
    
@endsection