@extends('siswa.layout.layout')
@section('container')
    <div class="container text-center mb-5">
        <h1>Lessons</h1>
        <p class="mb-4">You can easily manage your business with a powerful tools</p>
        <div class="row">
            @for ($x = 1; $x <= 10; $x++)
                <div class="lessons col-lg-4 col-xs-4 col-sm-6 col-md-6 mb-4 ">
                    <a href="">
                        <div class="p-5 border rounded-5">
                            <div class="p-2">
                                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-5.png"
                                    alt="" />
                            </div>
                            <h3 class="p-2">Mathematics</h3>
                            <p class=" text-secondary">
                                This can easily help you to<br />
                                grow up your business fast
                            </p>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
@endsection
