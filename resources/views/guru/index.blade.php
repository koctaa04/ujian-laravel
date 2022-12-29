@extends('guru.layout.layout')
@section('container')
    <div class="container">
        <h1 class="text-center">Welcome Teacher</h1>
        <div class="row mt-4">
            <div class="col-md">
                <div class="card text-center">
                    <div class="card-header">
                        <h4>Sains</h4>
                    </div>
                    <div class="card-body row">
                        @for ($i = 1; $i <= 10; $i++)
                        <div class="lessons col-lg-3 p-4 ">
                            <a href="">
                                <div class="p-2  border rounded-5">
                                    <div class="p-2 mt-4">
                                        <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-5.png"
                                            alt="" />
                                    </div>
                                    <h3 class="p-2">Mathematics</h3>
                                    <p class=" text-secondary">Chapter 1
                                        <br>
                                        5 questions
                                    </p>
                                </div>
                            </a>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>


        {{-- Footer --}}
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-center py-2 px-4 px-xl-5">
            <!-- Copyright -->
            <div class=" mb-3 mb-md-0">
                Copyright © 2022. stevendesu.
            </div>
            <!-- Copyright -->
        </div>
    </div>
@endsection
