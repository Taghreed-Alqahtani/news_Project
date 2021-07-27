@extends('dashboardPage.layout')
@section('content')

    <head>
        <link rel="stylesheet" href="{{ asset('css/table.css') }}" type='text/css'>
        <style>
            
        </style>
    </head>

    <body>
        @if (count($messages) < 1)
            <p>no messages</p>
        @else
            <table class="responstable">
                <thead>
                    <th>Title</th>
                    <th>Email</th>
                    <th>Message</th>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->title }}</td>
                            <td>written by {{ $message->email }}</td>
                            <td> {{ $message->message }}.</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </body>
@endsection
