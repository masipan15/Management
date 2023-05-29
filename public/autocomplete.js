$(document).ready(function() {
    $("#barang_name").autocomplete({

        source: function(request, response) {
            $.ajax({
                type: "GET",
                url: siteUrl + '/' + "autocomplete",
                data: {
                    term: request.term
                },
                dataType: "json",
                success: function(data) {
                    // console.log(data);
                    var resp = $.map(data, function(obj) {
                        return {
                            label: "[" + obj.stok + "] " + obj.namabarang,
                            value: obj.value,
                            data: obj,
                        };
                    });

                    response(resp);
                }
            });
        },
        select: function (e, selectData) {
            console.log(selectData.item);
            if (selectData && selectData.item && selectData.item.data) {
                var data = selectData.item.data;
                $("#harga-id").empty();
                $("#kode-id").empty();
                $("#barang_id").val(data.id);
                var hargabarang =
                    "<div class='card-body'>" +
                    "<div class='col-lg mt-3' value='hargajual'>" +
                    "</div>" +
                    "</div>";
                var kodebarang = 
                    "<div class='card-body'>" +
                    "<div class='col-lg mt-3' value='kodebarang'>" +
                    "</div>" +
                    "</div>";

                $("#harga-id").append(hargabarang);
                $("#kode-id").append(kodebarang);
            }   
        },
        minLength: 2,
        classes: {
            "ui-autocomplete": "rounded-bottom",
        },
    });
});
