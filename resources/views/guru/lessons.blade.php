@extends('guru.layout.layout')
@section('container')
    <div class="container">
        <h1 class="text-center">My Lessons</h1>
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mt-2">List of Subjects</h5>
                        <a href="" class="btn btn-outline-success">Add Questions</a>
                    </div>
                    <div class="card-body">
                        <br />
                        <table class="table table-bordered border-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Number of Questions</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 1; $i <= 10; $i++)
                                    <tr>
                                        <td>1</td>
                                        <td>Astronomy</td>
                                        <td>Chapter 1</td>
                                        <td>10 Questions</td>
                                        <td>
                                            <a href="" class="btn btn-primary">Detail</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
