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

                      <form action="{{ route('company.store') }}" method="post"> 
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                            <label for="">конпаний нэр</label>
                            <input type="text" name="company_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                            <label for="">харилцагч</label>
                            <input type="text" name="contact_person" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                            <label for="">и-мэйл</label>
                            <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                            <label for="">утас</label>
                            <input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div> 
                            <div class="form-group">
                            <label for="">хаяг</label>
                            <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
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


