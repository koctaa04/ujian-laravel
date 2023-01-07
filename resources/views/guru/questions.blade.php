@extends('guru.layout.layout')
@section('container')
    <div class="container">

        <h1 class="text-center">Add New Lesson</h1>

        <div class="row mb-5">
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


                </form>
            </div>
        </div>
        {{-- soal --}}
        <div class="card">
            <div class="card-header">Questions</div>
            <div class="card-body">

                @for ($i = 0; $i <= 4; $i++)
                    <div class="form-group container">
                        <div class="row mb-2">
                            <span class="badge bg-success me-2"
                                style="font-size: 15px; line-height: 30px; width: 40px;"><?= $i + 1 ?></span>
                            <input type="text" name="" class="form-control col" placeholder="Soal">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-text">
                                <input type="radio" name="answer<?= $i ?>" id="" value="">
                            </div>
                            <input type="text" name="" id="" class="form-control" placeholder="Opsi 1">
                        </div>
                        <div class="input-group mb-2">

                            <div class="input-group-text">
                                <input type="radio" name="answer<?= $i ?>" id="" value="">
                            </div>
                            <input type="text" name="" id="" class="form-control" placeholder="Opsi 2">
                        </div>
                        <div class="input-group mb-2">

                            <div class="input-group-text">
                                <input type="radio" name="answer<?= $i ?>" id="" value="">
                            </div>
                            <input type="text" name="" id="" class="form-control" placeholder="Opsi 3">
                        </div>
                        <div class="input-group mb-2">

                            <div class="input-group-text">
                                <input type="radio" name="answer<?= $i ?>" id="" value="">
                            </div>
                            <input type="text" name="" id="" class="form-control" placeholder="Opsi 4">
                        </div>
                        <div class="input-group mb-4">

                            <div class="input-group-text">
                                <input type="radio" name="answer<?= $i ?>" id="" value="">
                            </div>
                            <input type="text" name="" id="" class="form-control" placeholder="Opsi 5">
                        </div>
                    </div>
                @endfor
            </div>

            <div class="card-footer text-muted">
                <div class="row d-flex justify-content-end">
                    <div class="">
                        <button type="button" onclick="addQuestion()" class="btn btn-outline-success" name="">Add Question</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function addQuestion() {
            Swal.fire({
                title: 'Are you sure?',
                text: "Make sure what you fill is correct!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, i sure!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Success!',
                        'Your file has been added.',
                        'success'
                    )
                }
            })
        }
    </script>
@endsection
