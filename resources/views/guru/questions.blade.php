@extends('guru.layout.layout')
@section('container')
    <div class="container">
        <h1 class="text-center">Add New Lesson</h1>
        <div class="row">
            {{-- detail mapel --}}
            <div class="col-md-12 mt-2">
                <form action="">
                    <div class="card">
                        <div class="card-header">Detail</div>
                        <div class="card-body">
                            <input type="text" class="form-control" name="" value="" hidden />
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" class="form-control" name="">
                            </div>
                        </div>
                    </div>

                    {{-- soal --}}
                    <div class="container mt-4">
                        <div class="card">
                            <div class="card-header">Questions</div>
                            <div class="card-body">

                                @for ($i = 0; $i <= 3; $i++)
                                    <div class="form-group container">
                                        <div class="row mt-4">
                                            <span class="badge badge-success mr-2"
                                                style="font-size: 20px; line-height: 30px; width: 30px;">11</span>
                                            <input type="text" name="" class="form-control col"
                                                placeholder="Soal">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="radio" name="" id="" value="">
                                                </div>
                                            </div>
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="Opsi 1">
                                        </div>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="radio" name="" id="" value="">
                                                </div>
                                            </div>
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="Opsi 2">
                                        </div>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="radio" name="" id="" value="">
                                                </div>
                                            </div>
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="Opsi 3">
                                        </div>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="radio" name="" id="" value="">
                                                </div>
                                            </div>
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="Opsi 4">
                                        </div>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="radio" name="" id="" value="">
                                                </div>
                                            </div>
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="Opsi 5">
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <div class="card-footer text-muted">
                                <div class="row d-flex justify-content-end">
                                    <div class="">
                                        <input type="submit" value="Add Question" class="btn btn-outline-success" name="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
