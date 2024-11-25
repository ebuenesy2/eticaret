/***
 * Sabit List
 * Veri Ekleme
 * Veri Güncelleme
 * Veri Sil
 * Çoklu İşlemler
*/

//alert("userCart.js");
console.log("userCart.js");

//! Dil Alıyor
var yildirimdevMultiLangJson = JSON.parse(localStorage.getItem('yildirimdevMultiLang')); //! Çoklu Dil

//! Çoklu Dil Fonksiyon
function yildirimdevMultiLangJsonReturn () {
    if(yildirimdevMultiLangJson == null) { var yildirimdevMultiLangJson = JSON.parse(localStorage.getItem('yildirimdevMultiLang')); }
    return yildirimdevMultiLangJson;
}  //! Çoklu Dil Fonksiyon Son

//! Tanım
var listUrl = "/user/cart"; //! List Adresi


//! ************ Sepete Ekle ***************
//! Sepete Ekle
document.querySelectorAll("#userCartAdd").forEach((Item) => {
    Item.addEventListener("click", e => {

        alert("userCartAdd");

        var yildirimdevMultiLangJsonReturnR = yildirimdevMultiLangJsonReturn();
        //console.log("lang:",yildirimdevMultiLangJsonReturnR.lang);
        
        //! Veriler
        var data_productid = e.target.getAttribute("data_productid"); //! Urun
        console.log("data_productid:", data_productid);

        var userid = document.cookie.split(';').find((row) => row.startsWith(' web_userId='))?.split('=')[1];
        console.log("userid:",userid);  

        if(data_productid == '') { 

            Swal.fire({
                position: "center",
                icon: "error",
                title: "Ürün Seçilmedi",
                showConfirmButton: false,
                timer: 2000,
            });
        }
        else if(userid == '') { 

            Swal.fire({
                position: "center",
                icon: "error",
                title: "Kullanici Giriş Yapınız",
                showConfirmButton: false,
                timer: 2000,
            });

        }
        else {

            //! Ajax  Post
            $.ajax({
                url: listUrl + "/add/post",
                type: "post",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                data: {
                    siteLang: yildirimdevMultiLangJsonReturnR.lang,
                    name: $('#nameAdd').val(),
                    surname: $('#surnameAdd').val(),
                    email: $('#emailAdd').val(),
                    phone: $('#phoneAdd').val(),
                    subject: $('#subjectAdd').val(),
                    message: $('#messageAdd').val(),
                    created_byId: document.cookie.split(';').find((row) => row.startsWith(' web_userId='))?.split('=')[1]
                },
                beforeSend: function() { console.log("Başlangıc"); },
                success: function (response) {
                    // alert("başarılı");
                    console.log("response:", response);
                    // console.log("status:", response.status);

                    if (response.status == "success") {
                        Swal.fire({
                            position: "center",
                            icon: "success",
                            title: yildirimdevMultiLangJsonReturnR.transactionSuccessful,
                            showConfirmButton: false,
                            timer: 2000,
                        });

                        //! Sayfa Yenileme
                        window.location.reload();
                    } else {
                        Swal.fire({
                            position: "center",
                            icon: "error",
                            title: yildirimdevMultiLangJsonReturnR.transactionFailed,
                            showConfirmButton: false,
                            timer: 2000,
                        });
                    }
                },
                error: function (error) {
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: yildirimdevMultiLangJsonReturnR.transactionFailed,
                        showConfirmButton: false,
                        timer: 2000,
                    });
                    console.log("error:", error);
                },
                complete: function() {  }
            }); //! Ajax Post Son

        }

    })
}) //! Sepete Ekle Son
//! ************ Sepete Ekle Son  ***************