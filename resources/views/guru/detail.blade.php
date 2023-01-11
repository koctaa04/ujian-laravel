@extends('guru.layout.layout')
@section('container')
    {{-- SOAL --}}
    <div class="container mt-4" style="min-height: 500px">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Mathematics</h3>
                        <h6>mtk</h6>
                    </div>
                    <div class="card-body">
                        @for ($i = 0; $i <= 10; $i++)
                            <h5 class="card-title">
                                <h5><span class="badge bg-success me-2"
                                        style="font-size: 15px; line-height: 30px; width: 40px"><?= $i + 1 ?></span>asdasd
                                    adsasd
                                    asdasd asdasd....
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#ubahSoal">edit</button> |
                                    <button class="btn btn-danger btn-sm" onclick="validate()">delete</button>
                                </h5>
                            </h5>
                            <div class="card-text">
                                {{-- opsi jawaban --}}
                                <ul>
                                    <li>asd</li>
                                    <li>asd</li>
                                    <li>asd</li>
                                    <li>asd</li>
                                    <li>asd</li>
                                </ul>
                            </div>
                            {{-- Modal ubah soal --}}
                            <div class="modal fade" id="ubahSoal" tabindex="-1" aria-labelledby="ubahSoalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="ubahSoalLabel">Change Questions</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form action="">
                                            @csrf
                                            <div class="form-group container">
                                                <div class="row">
                                                    <input type="text" name="" id=""
                                                        class="form-control col" placeholder="Soal" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group mt-2">
                                                    <div class="input-group-text">
                                                        <input type="radio" name="answer<?= $i ?>" id=""
                                                            value="">
                                                    </div>
                                                    <input type="text" name="" id="" class="form-control"
                                                        placeholder="Opsi 1">
                                                </div>
                                                <div class="input-group mt-2">

                                                    <div class="input-group-text">
                                                        <input type="radio" name="answer<?= $i ?>" id=""
                                                            value="">
                                                    </div>
                                                    <input type="text" name="" id="" class="form-control"
                                                        placeholder="Opsi 2">
                                                </div>
                                                <div class="input-group mt-2">

                                                    <div class="input-group-text">
                                                        <input type="radio" name="answer<?= $i ?>" id=""
                                                            value="">
                                                    </div>
                                                    <input type="text" name="" id="" class="form-control"
                                                        placeholder="Opsi 3">
                                                </div>
                                                <div class="input-group mt-2">

                                                    <div class="input-group-text">
                                                        <input type="radio" name="answer<?= $i ?>" id=""
                                                            value="">
                                                    </div>
                                                    <input type="text" name="" id="" class="form-control"
                                                        placeholder="Opsi 4">
                                                </div>
                                                <div class="input-group mt-2">

                                                    <div class="input-group-text">
                                                        <input type="radio" name="answer<?= $i ?>" id=""
                                                            value="">
                                                    </div>
                                                    <input type="text" name="" id="" class="form-control"
                                                        placeholder="Opsi 5">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                {{-- <input type="hidden" name=""> --}}
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="card-footer text-muted">
                        <div class="row d-flex justify-content-between">
                            <a href="#" class="btn btn-outline-success" data-bs-toggle="modal"
                                data-bs-target="#tambahSoal"><i class="fa-solid fa-angles-left"></i>Add
                                Questions</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- modal tambah soal --}}
            <div class="modal fade" id="tambahSoal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Questions</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                @csrf
                                <div class="form-group container">
                                    <div class="row">
                                        <input type="text" name="" id="" class="form-control col"
                                            placeholder="Soal" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mt-2">
                                        <div class="input-group-text">
                                            <input type="radio" name="jawaban" id="" required
                                                value="option_a">
                                        </div>
                                        <input type="text" name="option_a" class="form-control" placeholder="Opsi 1"
                                            required>
                                    </div>
                                    <div class="input-group mt-2">
                                        <div class="input-group-text">
                                            <input type="radio" name="jawaban" id="" required
                                                value="option_b">
                                        </div>
                                        <input type="text" name="option_b" class="form-control" placeholder="Opsi 1"
                                            required>
                                    </div>
                                    <div class="input-group mt-2">
                                        <div class="input-group-text">
                                            <input type="radio" name="jawaban" id="" required
                                                value="option_c">
                                        </div>
                                        <input type="text" name="option_c" class="form-control" placeholder="Opsi 1"
                                            required>
                                    </div>
                                    <div class="input-group mt-2">
                                        <div class="input-group-text">
                                            <input type="radio" name="jawaban" id="" required
                                                value="option_d">
                                        </div>
                                        <input type="text" name="option_d" class="form-control" placeholder="Opsi 1"
                                            required>
                                    </div>
                                    <div class="input-group mt-2">
                                        <div class="input-group-text">
                                            <input type="radio" name="jawaban" id="" required
                                                value="option_e">
                                        </div>
                                        <input type="text" name="option_e" class="form-control" placeholder="Opsi 1"
                                            required>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- detail mapel --}}
            <div class="col-md-4 ml-auto">
                <form action="" method="">
                    @csrf
                    <div class="card">
                        <div class="card-header">Detail</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Exam Title</label>
                                <input type="text" name="judul" value="mtk" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Exam Description</label>
                                <input type="text" name="judul" value="mtk" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Number of Questions</label>
                                <input type="text" name="" value="10 soal" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="hidden" value="">
                            <input type="submit" class="btn btn-primary" value="Ubah">
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
