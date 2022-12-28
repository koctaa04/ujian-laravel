@extends('siswa.layout.layout')
@section('container')
    <div class="container">
        <div class="container mb-5">
            <div class="row p-4">
                <div class="col-lg-6 p-4 mt-5">
                    <h1 class="title-text-big fw-bold ">
                        Do the
                        <span style="color: #4e91f9">Best!</span><br class="d-lg-block d-none" /> You <span
                            style="color: #4e91f9">can</span>
                        do it
                    </h1>
                    <p class="text-caption">Hard to find a good mentor according to your wishes?<br
                            class="d-sm-block d-none" />Don't worry because we are here to help you</p>

                </div>
                <div class="col-lg-6">
                    <img src="/img/test.png" width="90%" alt="">
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>

        <div class="container text-center mb-5">
            <h1>Lessons</h1>
            <p>You can easily manage your business with a powerful tools</p>
            <div class="row">
                <div class="col-lg-4 p-4 ">
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
                </div>
                <div class="col-lg-4 p-4 ">
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
                </div>
                <div class="col-lg-4 p-4 ">
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
                </div>
            </div>
            <button type="button" class="btn btn-outline-info">More Lessons</button>
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
