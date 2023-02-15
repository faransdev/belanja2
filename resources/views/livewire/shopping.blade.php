<div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-3 mt-3">
                    <div class="card">
                        <div class="card-header">
                            KERANJANG
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div class="card-body">
                            Rp. {{ $jumlah }}
                        </div>
                    </div>

                    <div class="card mt-4 ">
                        <div class="card-header">
                            BELANJAAN SAYA
                        </div>
                        <div class="card-body">
                            @foreach ($datas as $item)
                                <p>
                                    <i>{{ $item->nama_barang }}</i>
                                    <button
                                        class="border rounded py-1 px-4 mr-3 mb-2
                                    btn btn-danger "
                                        wire:click="destroy({{ $item->id }} )">
                                        delete
                                    </button>


                                </p>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="col-9 mt-3">
                    <div class="card card-2">
                        <div class="card-header">
                            PRODUK
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <div class="card card-1">
                                        <img src="{{ asset('img/lambo.jpg') }}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Lamborghini</h5>
                                            <p class="card-text">Mobil yang membuat hati para ciwi meleleh</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 1.200.000.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <button class="btn btn-primary"
                                                wire:click="simpan('Tab', '6000000')">BELI</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card card-1">
                                        <img src="{{ asset('img/bugatti.jpg') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Bugatti</h5>
                                            <p class="card-text">Mobilnya orang kaya</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 2.000.000.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <button class="btn btn-primary"
                                                wire:click="simpan('stick', '500000')">BELI</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="card card-1">
                                        <img src="{{ asset('img/ferrari.jpg') }}" class="card-img-top"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">ferrari</h5>
                                            <p class="card-text">Bukan buat orang miskinn</p>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Rp. 1.900.000.000</li>
                                        </ul>
                                        <div class="card-body">
                                            <button class="btn btn-primary"
                                                wire:click="simpan('stick', '500000')">BELI</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
