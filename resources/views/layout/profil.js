$('#gantisandi').validate({
    ignore:'.ignore',
    errorClass:'invalid',
    validClass:'success',
    rules:{
        password_lama:{
            required:true,
            minlength:6,
            maxlength:100
        },
        password:{
            required:true,
            minlength:6,
            maxlength:100
        },
        password_confirmation:{
            required:true,
            equalTo: '#password_lama'
        },
    },
    message: {
        password_lama: {
            required: "Masukkan Sandi Lama"
        },
        password: {
            required: "Masukkan Sandi Baru"
        },
        password_confirmation: {
            required: "Konfirmasi Sandi"
        },
    },

    submitHandler:function(form) {
        $.LoadingOverlay("show");
        form.submit();
    }
    
});