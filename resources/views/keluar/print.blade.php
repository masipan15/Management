<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Preview</title>
</head>

<body>

    <div class="table-responsive">
        <table class="table" id="example1">
            <thead>
                <tr>
                    <th class="wd-20p">No</th>
                    <th class="wd-20p">Kode Transaksi</th>
                    <th class="wd-20p">Nama Pelanggan</th>
                    <th class="wd-20p">Nama Barang</th>
                    <th class="wd-20p">Kode Barang</th>
                    <th class="wd-20p">Merk</th>
                    <th class="wd-25p">Harga Jual</th>
                    <th class="wd-20p">Jumlah Beli</th>
                    <th class="wd-15p">Total</th>
                    <th class="wd-15p">Aksi</th>
                </tr>
            </thead>

        </table>
    </div>
</body>


<script src="js/printpage.js" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="{{ asset('acstemplate/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('acstemplate/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('acstemplate/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

<script type="text/javascript">
    window.print();
</script>

</html>



