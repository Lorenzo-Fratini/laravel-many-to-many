@extends('layouts.main-layout')

@section('content')
    <main>
        <h1>Companies</h1>
        <ul>
            @foreach ($locations as $location)
            <li>
                <h2>
                    {{ $location -> state }}
                </h2>
                <ul>
                    @foreach ($location -> employees as $employee)
                        <li>
                            <span class="emp-name">
                                {{ $employee -> firstname }} {{ $employee -> lastname }}
                                ({{ count($employee -> tasks) }})
                            </span>
                            <ul>
                                @foreach ($employee -> tasks as $task)
                                    <li>
                                        <i>- {{ $task -> name }}</i>   
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </main>
@endsection