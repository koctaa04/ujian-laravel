@extends('guru.layout.layout')
@section('container')
    <div class="container">
        <h1 class="text-center">Student Data</h1>
        <div class="row mt-4">
            <div class="col-lg-8 col-md-12 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mt-2">Student Data</h5>
                    </div>
                    <div class="card-body">
                        <br />
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 6; $i++)
                                    <tr>
                                        <td>1</td>
                                        <td>Siswa</td>
                                        <td>siswa@gmail.com</td>
                                        <td>
                                            <a href="" class="btn btn-warning">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 ml-auto">
                <form action="">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="" id="" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="" id="">
                                <div class="form-check">
                                    <input type="checkbox" value="" name="" id=""
                                        class="form-check-input">
                                    <label for="" class="form-check-label">
                                        <p>Show Password</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <input type="submit" class="btn btn-outline-primary d-flex justify-content-center"
                                id="" value="Add">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        {{-- Footer --}}
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-center py-2 px-4 px-xl-5">
            <!-- Copyright -->
            <div class="mt-4 mb-md-0">
                Copyright © 2022. stevendesu.
            </div>
            <!-- Copyright -->
        </div>
    </div>
@endsection
