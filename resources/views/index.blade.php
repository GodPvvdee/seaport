@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Ажилтаны бүртгэл
                        <span class="float-right">
                        <a href="{{ route('sailor.create') }}">ажилтан бүртгэх</a>
                    </span>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">


                            <thead>
                            <th>нэр</th>
                            <th>төрсөн огноо</th>
                            <th>гэр бүл</th>

                            <th>хаяг</th>
                            <th>өндөр</th>
                            <th>өргөн</th>
                            <th>цусны бүлэг</th>
                            <th>гутлын размер</th>
                            <th>ажилтан идэвх</th>
                            <th colspan="2">засах</th>
                            </thead>
                            <tbody>
                            @foreach ($sailors as $sailor)
                                <tr>
                                    <td>{{ $sailor->sailor_name }}</td>
                                    <td>{{ $sailor->date_of_birth }}</td>
                                    <td>{{ $sailor->marital_status }}</td>

                                    <td>{{ $sailor->address }}</td>
                                    <td>{{ $sailor->height }}</td>
                                    <td>{{ $sailor->weight }}</td>

                                    <td>{{ $sailor->blood_type }}</td>
                                    <td>{{ $sailor->shoe_size }}</td>
                                    <td>{{ $sailor->job_status }}</td>
                                    <td>{{$sailor->id}}</td>
                                    <td>
                                        <a href="{{route('sailor.edit', $sailor->sailor_id)}}">
                                            <button class="btn btn-success">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('sailor.destroy', [$sailor->sailor_id]) }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
