@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="{{url('create/contact')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="formGroupExampleInput">Fullname</label>
                        <input type="text" class="form-control" name="fullname" id="formGroupExampleInput" placeholder="Fullname">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Address:</label>
                        <input type="text" class="form-control" name="address" id="formGroupExampleInput2" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Phone</label>
                        <input type="tel" class="form-control" name="phone" id="formGroupExampleInput2" placeholder="phone">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Add Contact">
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
