@extends('dashboardPage.layout')
@section('content')

    <head>
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  --}}
    </head>

    <body>
        @if (count($messages) < 1)
            <p>no news</p>
        @else
            <table class="table table-hover table-dark">
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
