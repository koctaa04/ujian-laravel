@extends('siswa.layout.layout')
@section('container')
    <div class="container">
        <h1 class="text-center">Contacts</h1>
        <div class="row mt-5">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        Message
                    </div>
                    <form action="#" method="post">
                        <div class="card-body">
                            <h5 class="card-title">Leave a message below!</h5>
                            <input type="hidden" name="noWa" value="6283122150023">
                            <div class="form-group mt-4">
                                <label for="nama">Name</label>
                                <input type="text" class="form-control" id="nama" name="nama" value=""
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                    value="" aria-describedby="emailHelp" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="pesan" rows="3">onegaishimasu</textarea>
                            </div>

                        </div>
                        <div class="card-footer text-muted d-flex justify-content-end">
                            <!-- <a href="https://api.whatsapp.com/send?phone=6283122150023&text=Nama%20:%20StevenDesu%0D%0AEmail%20:%20Steven@Ancok.cok%0D%0APesan%20:%20Hai:)" class="btn btn-outline-success" target="_blank">Kirim Pesan</a> -->
                            <button type="submit" class="btn btn-outline-success" target="_blank">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map col-7">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.904709279331!2d114.34868731433117!3d-8.212337684673798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14ff70f397b65%3A0xd4855a1d5d5b2480!2sSMK%20Negeri%201%20Banyuwangi!5e0!3m2!1sid!2sid!4v1672290155525!5m2!1sid!2sid"
                    width="650" height="510" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
