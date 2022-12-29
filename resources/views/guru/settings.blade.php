@extends('guru.layout.layout')
@section('container')
    <div class="container">
        <h1 class="text-center">Personal Data</h1>
        <div class="row border rounded-4 p-5">
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
                        <a href="" class="btn btn-outline-primary">Change Data</a>
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
