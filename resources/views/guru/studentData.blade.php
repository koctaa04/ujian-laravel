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
                                            <!--Edit Modal -->
                                            <div class="modal fade" id="editModal" tabindex="-1"
                                                aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="editModalLabel">Edit Student
                                                                Data
                                                            </h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <form>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label">Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="name">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="email" class="form-label">Email
                                                                        address</label>
                                                                    <input type="email" class="form-control"
                                                                        id="email">
                                                                </div>
                                                                <div class="">
                                                                    <label for="passEdit"
                                                                        class="form-label">Password</label>
                                                                    <input type="password" class="form-control"
                                                                        id="passEdit">
                                                                </div>
                                                                <div class="mb-3 form-check">
                                                                    <input type="checkbox" onclick="showPasswordEdit()" class="form-check-input" id="showPassEdit">
                                                                    <label class="form-check-label" for="showPassEdit">Show Password</label>
                                                                  </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editModal">
                                                Edit
                                            </button>
                                            <button onclick="validate()" class="btn btn-danger">Delete</button>
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
                                <label for="passRegis">Password</label>
                                <input type="password" class="form-control" name="" id="passRegis">
                                <div class="form-check">
                                    <input type="checkbox" onclick="showPasswordRegistration()" value="" name="" id="showPassRegis"
                                        class="form-check-input">
                                    <label for="showPassRegis" class="form-check-label">
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

@section('script')
    <script>
        function showPasswordRegistration() {
            
            var x = document.getElementById('passRegis')
            if (x.type === 'password') {
                x.type = 'text'
            } else {
                x.type = 'password'
            }
        }
        function showPasswordEdit() {
            var x = document.getElementById('passEdit')
            if (x.type === 'password') {
                x.type = 'text'
            } else {
                x.type = 'password'
            }
        }
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
