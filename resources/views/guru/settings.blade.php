@extends('guru.layout.layout')
@section('container')
    <div class="container">
        <h1 class="text-center">Personal Data</h1>
        <div class="row  p-5">
            <div class="col-lg-4 ">
                <div class="card mb-3">
                    <img src="/img/man.png" class="card-img-top mt-3 mb-3 px-5" alt="...">
                    <div class="card-body">
                        <div class="d-grid gap-12 col-12">
                            <button type="button" class="btn btn-outline-info mb-3">Change Profile Photo</button>
                        </div>
                        <p class="card-text"><small class="text-muted">This is a wider card with supporting text below as a
                                natural lead-in to additional content. Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title mt-2">Change Personal Data</h5>
                        <a href="" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#ubahData">Change Data</a>
                    </div>
                    <div class="card-body">
                        <div class=" mx-auto" >
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">
                                <div class="row">
                                    <div class="col-4">
                                        Name
                                    </div>
                                    <div class="col-8">
                                        Stevendesu
                                    </div>
                                </div>
                              </li>
                              <li class="list-group-item">
                                <div class="row">
                                    <div class="col-4">
                                        Lesson
                                    </div>
                                    <div class="col-8">
                                        Mathematics
                                    </div>
                                </div>
                              </li>
                              <li class="list-group-item">
                                <div class="row">
                                    <div class="col-4">
                                        Email
                                    </div>
                                    <div class="col-8">
                                        Stevendesu@gmail.com
                                    </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- modal ubah data --}}
        <div class="modal fade" id="ubahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change Personal Data</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            @csrf
                            <div class="card-body">
                                <input type="hidden" name="" id="">
                                <input type="text" name="" id="" value="murid" hidden>
                                <div class="form-group mt-2">
                                    <label for="">Name</label>
                                    <input type="text" id="" name="" class="form-control" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="">Lesson</label>
                                    <input type="text" id="" name="" class="form-control" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="">Email</label>
                                    <input type="text" id="" name="" class="form-control" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" value="" id="passEdit" onclick="passUbah()">
                                        <label for="passEdit" class="form-check-label">
                                            <p>Show Password</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" id="ubah" value="Save changes">
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
