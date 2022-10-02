
    <div class="row align-items-center">
        <div class="offset-xl-3 offset-sm-6 col-xl-8 col-sm-6 col-12 img-bg ">
            <h4 class="d-flex  mb-3">
                <span class="font-weight-bold text-white ">Halo
                    &nbsp;{{ Auth::user()->name }}</span>
            </h4>
            <p class="tx-white-7 mb-1">You have {{ $jumlahbarang }} projects to finish,
                you
                had completed <b class="text-warning">57%</b> from your montly
                level,
                Keep going to your level
        </div>
        <img src="{{ asset('acstemplate/assets/img/pngs/work3.png') }}" alt="user-img"
            class="wd-200">
    </div>
