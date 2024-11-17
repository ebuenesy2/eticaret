$(function () {

                   
    //! Ajax  Post
    $.ajax({
        url: "/ajax/example/post",
        method: "post",
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: {
            siteLang: $('[id=lang_change][data_key=lang]').html().trim(),
            name: "enes",
            surname:"yildirim"
        },
        xhr: function () {
            var xhr = new window.XMLHttpRequest();
            
            alert("xhr");
            console.log("xhr:",xhr);
            
            // xhr.upload.addEventListener("progress", function (evt) {
            //   if (evt.lengthComputable) {
            //     var percentComplete = ((evt.loaded / evt.total) * 100);
                
            //       console.log("progress:",percentComplete + '%');

            //   }
            // }, false);

            return xhr;
        },
        beforeSend: function() {
        
            alert("Başlangıc");
            console.log("Başlangıc");

        },
        success: function (response) {
            // alert("başarılı");
            console.log("response:", response);
            // console.log("status:", response.status);

            if (response.status == "success") {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: $('[id=lang_change][data_key=TransactionSuccessful]').html().trim(),
                    showConfirmButton: false,
                    timer: 2000,
                });

                //! Sayfa Yenileme
                //window.location.reload();
            } else {
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: $('[id=lang_change][data_key=TransactionFailed]').html().trim(),
                    showConfirmButton: false,
                    timer: 2000,
                });
            }
        },
        error: function (error) {
            Swal.fire({
                position: "center",
                icon: "error",
                title: $('[id=lang_change][data_key=TransactionFailed]').html().trim(),
                showConfirmButton: false,
                timer: 2000,
            });
            console.log("error:", error);
        },
        complete: function() {

            alert("Bitti");
            console.log("Bitti");

        }
    }); //! Ajax Post Son

});
