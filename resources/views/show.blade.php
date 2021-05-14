@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Contact
                        <span class="float-right">
                            <a href="{{ route('sailor.index') }}">Back to Contact list</a>
                        </span>
                    </div>
                    <div class="card-body">
                        <p>Name/Нэр/: {{ $sailor->sailor_name }}</p>
                        <p>Address/Гэрийн хаяг/: {{ $sailor->date_of_birth }}</p>
                        <p>Phone/Утасны дугаар/: {{ sailor->marital_status }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
