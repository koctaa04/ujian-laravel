@extends('siswa.layout.layout')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">

                        <h2 class="">Geometry</h2>
                        <h6 class="text-secondary">Chapter 1</h6>
                    </div>
                    <div class="card-body p-4">
                        <div class="card-title">

                            <h5><span class="badge bg-success me-2"
                                    style="font-size: 20px; line-height: 25px; width: 45px;">1</span>Sebuah kubus memiliki
                                panjang rusuk 10 cm. Berapa volume dan kubus tersebut?</h5>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" id="answer1">
                            <label class="form-check-label" for="answer1">
                                900 cm³
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" id="answer2" checked>
                            <label class="form-check-label" for="answer2">
                                1.000 cm³
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" id="answer3" checked>
                            <label class="form-check-label" for="answer3">
                                1.100 cm³
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" id="answer4" checked>
                            <label class="form-check-label" for="answer4">
                                1.200 cm³
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="answer" id="answer5" checked>
                            <label class="form-check-label" for="answer5">
                                1.300 cm³
                            </label>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-outline-primary">Previous</button>
                        <button type="button" class="btn btn-outline-primary">Next</button>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        Total Questions
                    </div>
                    <div class="card-body mt-3" style="max-height: 300px; overflow:scroll">
                        <ul class="px-2" style="list-style-type: none">
                            @for ($x = 1; $x <= 40; $x++)
                            <li class="d-inline"><button type="button" style="width: 45px; height:45px; font-size:15px" class="m-1 fs-6 btn btn-sm btn-outline-primary"><?=$x?></button></li>
                            @endfor
                        </ul>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="button" class="btn btn-primary">Finish it!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
