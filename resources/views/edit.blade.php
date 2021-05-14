@extends('layouts.app')

@section('content')
<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ажилтан засах</div>
                    <form action="{{ route('sailor.update', [$sailor->sailor_id]) }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                            <label for="">нэр</label>
                            <input type="text" name="sailor_name" id="" class="form-control" placeholder="" aria-describedby="helpId"  value="{{ $sailor->sailor_name }}">
                            </div>
                            <div class="form-group">
                            <label for="">төрсөн огноо</label>
                            <input type="date" name="date_of_birth" id="" class="form-control" placeholder="" aria-describedby="helpId"  value="{{ $sailor->date_of_birth }}">
                            </div>
                            <div class="form-group">
                            <label for="">гэр бүл</label>
                            <input type="text" name="marital_status" id="" class="form-control" placeholder="" aria-describedby="helpId"  value="{{ $sailor->marital_status }}">
                            </div>
                            <div class="form-group">
                            <label for="">хаяг</label>
                            <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId"  value="{{ $sailor->address }}">
                            </div>
                            <div class="form-group">
                            <label for="">өндөр</label>
                            <input type="text" name="height" id="" class="form-control" placeholder="" aria-describedby="helpId"  value="{{ $sailor->height }}">
                            </div>
                            <div class="form-group">
                            <label for="">жин</label>
                            <input type="text" name="weight" id="" class="form-control" placeholder="" aria-describedby="helpId"  value="{{ $sailor->weight }}">
                            </div>
                            <div class="form-group">
                            <label for="">цусны бүлэг</label>
                            <input type="text" name="blood_type" id="" class="form-control" placeholder="" aria-describedby="helpId"  value="{{ $sailor->blood_type }}">
                            </div>
                            <div class="form-group">
                            <label for="">гутлын зазмер</label>
                            <input type="text" name="shoe_size" id="" class="form-control" placeholder="" aria-describedby="helpId"  value="{{ $sailor->shoe_size }}">
                            </div>
                            <div class="form-group">
                            <label for="">ажилын идэвх</label>
                            <input type="text" name="job_status" id="" class="form-control" placeholder="" aria-describedby="helpId"  value="{{ $sailor->job_status }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Хадгалах
                                </button>
                            </div>

                        </div>
                    </form>


            </div>
        </div>
    </div>
</div>
@endsection
