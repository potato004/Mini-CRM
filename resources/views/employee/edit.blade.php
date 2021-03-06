@extends('layouts.admin_template')

@section('content')
    <div class="card card-default">
        <div class="card-header">
        <h3 class="card-title">Edit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label>Fullname</label>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" name="fname" value="{{$data['employee'][0]->fname}}" placeholder="First Name" required>
                            </div>
                            <div class="col-6">
                              <input type="text" class="form-control" name="lname" value="{{$data['employee'][0]->lname}}" placeholder="Last Name" required>
                            </div>
                          </div>
                    </div>
                    <div class="form-group">
                        <label>Company</label>
                        <select class="form-control" name="company">
                            <option>select one</option>
                            @foreach ($data['companies'] as $company)
                                <option {{$company->id === $data['employee'][0]->company_id ? 'selected' : ''}} value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$data['employee'][0]->email}}" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{$data['employee'][0]->phone_no}}" placeholder="10 digit code ex: 1234567890">
                    </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
