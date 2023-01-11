@extends('guru.layout.layout')
@section('container')
    <div class="container">
        <h1 class="text-center">My Lessons</h1>
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mt-2">List of Subjects</h5>
                        <a href="/guru/lessons/questions" class="btn btn-outline-success">Add Questions</a>
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
                                        <td>Mathematics</td>
                                        <td>Chapter 1</td>
                                        <td>10 Questions</td>
                                        <td>
                                            <a href="/guru/lessons/detail" class="btn btn-primary">Detail</a>
                                            <button onclick="validate()" class="btn btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
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

@section('script')
    <script>
        function validate() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        }
    </script>
@endsection
