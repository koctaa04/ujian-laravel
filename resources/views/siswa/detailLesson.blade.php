@extends('siswa.layout.layout')
@section('container')
    <div class="container text-center mb-5">
        <h1>Mathematics</h1>
        <h5 class="mb-4 text-secondary">Noval Harwin , S.Kom</h5>
        <div class="row border rounded-4 p-5">
            @for ($x = 1; $x <= 5; $x++)
                <div class="lessons col-lg-4 col-xs-4 col-sm-6 col-md-6 mb-4 ">
                    <a href="" data-bs-toggle="modal" data-bs-target="#modalDetailLesson">
                        <div class="p-5 border rounded-5">
                            <h2 class="p-2">Geometry <?= $x ?></h2>
                            <h6 class="text-secondary">
                                5 questions <br />
                                Chapter <?= $x ?> <br />
                                Score : 85
                            </h6>
                        </div>
                    </a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modalDetailLesson" tabindex="-1" aria-labelledby="modalDetailLessonLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="p-4 border rounded-5">
                                    <h2 class="mb-4">Geometry <?= $x ?></h2>
                                    <h5 class="text-secondary">
                                        </h6>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-5">
                                                        Chapter
                                                    </div>
                                                    <div class="col">
                                                        <?= $x ?>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-5">
                                                        Name
                                                    </div>
                                                    <div class="col">
                                                        Steven Yonathan
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-5">
                                                        Class
                                                    </div>
                                                    <div class="col">
                                                        XII RPL 2
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="row">
                                                    <div class="col-5">
                                                        Total Question / Score
                                                    </div>
                                                    <div class="col">
                                                        5 / -
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="mt-2 me-3 btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <a href="/siswa/exam" type="button" class="mt-2 btn btn-primary">Do the exam</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
