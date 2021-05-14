@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <div class="card">
                <div class="card-header">ажилтан бүртгэх</div>

                      <form action="{{ route('sailor.store') }}" method="post"> 
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                            <label for="">нэр</label>
                            <input type="text" name="sailor_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                            <label for="">төрсөн огноо</label>
                            <input type="date" name="date_of_birth" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                            <label for="">гэр бүл</label>
                            <input type="text" name="marital_status" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                            <label for="">хаяг</label>
                            <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div> 
                            <div class="form-group">
                            <label for="">өндөр</label>
                            <input type="text" name="height" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                            <label for="">жин</label>
                            <input type="text" name="weight" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div> 
                            <div class="form-group">
                            <label for="">цусны бүлэг</label>
                            <input type="text" name="blood_type" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div> 
                            <div class="form-group">
                            <label for="">гутлын зазмер</label>
                            <input type="text" name="shoe_size" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div> 
                            <div class="form-group">
                            <label for="">ажилын идэвх</label>
                            <input type="text" name="job_status" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div> 
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Хадгалах
                                </button>
                            </div>

                        </div> 
                    <!-- </form> -->
            </div>
        </div>
    </div>
</div>
@endsection


