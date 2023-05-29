var CSRF_TOKEN = $('input[name="_token"]').val();

$(document).ready(function () {
    // auto numeric on price
    $("#barang").autocomplete({
        source: function (request, data) {
            $.ajax({
                type: "GET",
                url: "/autocomplete",
                dataType: "json",
                data: {
                    search: request.term,
                },
                success: function (res) {
                    var result;
                    result = [
                        {
                            label:
                                "There is matching record found for " +
                                request.term,
                            value: "",
                        },
                    ];
                    // console.log(res);

                    if (res.length) {
                        result = $.map(res, function (obj) {
                            return {
                                label: "[" + obj.stok + "] " + obj.namabarang,
                                value: obj.value,
                                data: obj,
                            };
                        });
                    }
                    data(result);
                },
            });
        },
        select: function (e, selectData) {
            console.log(selectData.item);
            if (selectData && selectData.item && selectData.item.data) {
                var data = selectData.item.data;
                $("#detail-barang").empty();
                $("#barang_id").val(data.id);
                var detailbarang =
                    "<div class='user-details'>" +
                    "<div class='user-name' id='namabarang'>" +
                    data.harga +
                    "<div class='text-job text-muted' id='hargajual'>" +
                    "</div>" +
                    data.kode +
                    "<div class='text-job text-muted' id='kodebarang'>" +
                    "</div>" +
                    data.group +
                    "</div>" +
                    "</div>";
                $("#detail-barang").append(detailbarang);
                console.log(detailbarang);
                // function to fetch all bill
                // var price = data.price;

                // getbill(price);

                // var loadbill = getbill(price);
            }
        },
        minLength: 2,
        classes: {
            "ui-autocomplete": "rounded-bottom",
        },
    });

});