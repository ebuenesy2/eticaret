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
var listUrl_Cart = "/user/cart"; //! List Adresi


//! ************ Sepete Ürün Ekle ***************
//! Sepete Ürün Ekle
document.querySelectorAll("#userCartAdd").forEach((Item) => {
    Item.addEventListener("click", e => {

        var yildirimdevMultiLangJsonReturnR = yildirimdevMultiLangJsonReturn();
        //console.log("lang:",yildirimdevMultiLangJsonReturnR.lang);
        
        //! Kullanıcı
        var userid = document.cookie.split(';').find((row) => row.startsWith('web_userId='))?.split('=')[1];
        //console.log("userid:",userid);  

        //! Ürün Id
        var data_productid = e.target.getAttribute("data_productid"); 
        //console.log("data_productid:", data_productid);

        //! Urun Sayısı
        var data_product_quantity = e.target.getAttribute("data_product_quantity");
        data_product_quantity = data_product_quantity ? data_product_quantity : $('#product_quantity').val(); 
        //console.log("data_product_quantity:", data_product_quantity);
        //! Ürün Son

        if(userid == '' || !userid ) { 

            Swal.fire({
                position: "center",
                icon: "error",
                title: "Kullanici Giriş Yapınız",
                showConfirmButton: false,
                timer: 2000,
            });

        }
        else if(data_productid == '') { 

            Swal.fire({
                position: "center",
                icon: "error",
                title: "Ürün Seçilmedi",
                showConfirmButton: false,
                timer: 2000,
            });
        }
        else {

            //! Ajax  Post
            $.ajax({
                url: listUrl_Cart + "/add/post",
                type: "post",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                data: {
                    siteLang: yildirimdevMultiLangJsonReturnR.lang,
                    user_id: userid,
                    product_uid: data_productid,
                    product_quantity: data_product_quantity,
                    created_byId: document.cookie.split(';').find((row) => row.startsWith(' web_userId='))?.split('=')[1]
                },
                beforeSend: function() { console.log("Sepet Listesine Ekle - Başlangıc"); },
                success: function (response) {
                    // alert("başarılı");
                    console.log("response:", response);
                    // console.log("status:", response.status);

                    if (response.status == "success") {
                        // Swal.fire({
                        //     position: "center",
                        //     icon: "success",
                        //     title: yildirimdevMultiLangJsonReturnR.transactionSuccessful,
                        //     showConfirmButton: false,
                        //     timer: 2000,
                        // });

                        //! Buton Güncelleme
                        document.querySelectorAll('[id="userCartAdd"][data_productid="'+data_productid+'"]').forEach(function(el) { el.style.display="none" }) 
                        document.querySelectorAll('[id="userCartAdd_None"][data_productid="'+data_productid+'"]').forEach(function(el) { el.style.display="flex" })


                        //! Sepet Listesi  Sayısı
                        var cart_count = $('.cart-count').html(); //! Sayısını Alıyor
                        var cart_count = Number(cart_count) + 1; //! Sayısını Artılıyor
                        $('.cart-count').html(cart_count); //! Sayısını Gösteriyor

                        //! Sayfa Yenileme
                        //window.location.reload();
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
}) //! Sepete Ürün Ekle Son
//! ************ Sepete Ürün Ekle Son  ***************

//! ************ Sepete Ürün Silme ***************
//! Sepete Ürün Silme
document.querySelectorAll("#userCartDelete").forEach((Item) => {
    Item.addEventListener("click", e => {
       
        var data_id = e.target.getAttribute("data_id"); //! Target ATTR
        //console.log("data_id:", data_id);

        var data_productstitle = e.target.getAttribute("data_productstitle"); //! Target 
        //console.log("data_productstitle:", data_productstitle);

        var yildirimdevMultiLangJsonReturnR = yildirimdevMultiLangJsonReturn();
        //console.log("lang:",yildirimdevMultiLangJsonReturnR.lang);
      
        //! Alert
        Swal.fire({
            title: yildirimdevMultiLangJsonReturnR.deleteWarning + " " +yildirimdevMultiLangJsonReturnR.areYouSure+" #"+data_id + "[ " + data_productstitle +"]",
            //text:  yildirimdevMultiLangJsonReturnR.deleteWarning,
            icon: 'error',
            showCancelButton: true,
            cancelButtonColor: '#d33',
            cancelButtonText: yildirimdevMultiLangJsonReturnR.no,
            confirmButtonColor: '#3085d6',
            confirmButtonText: yildirimdevMultiLangJsonReturnR.yes,
        }).then((result) => {
            if (result.isConfirmed) {
                //alert("oldu");

                //! Ajax  Post
                $.ajax({
                    url: listUrl_Cart + "/delete/post",
                    type: "post",
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    data: {
                        siteLang: yildirimdevMultiLangJsonReturnR.lang,
                        id:Number(data_id),
                        //created_byId: document.cookie.split(';').find((row) => row.startsWith(' yildirimdev_userID='))?.split('=')[1],
                    },              
                    beforeSend: function() { console.log("Sepet Listesinden Sil -  Başlangıc"); },
                    success: function (response) {
                        //alert("başarılı");
                        // console.log("response:", response);
                        //console.log("status:", response.status);

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
                    complete: function() {  console.log("Search Ajax Bitti"); }
                }); //! Ajax Post Son

            }
        });
        //! Alert Son

    })
}) //! Sepete Ürün Silme Son
//! ************ Sepete Ürün Silme Son  ***************


//! ************ Sepete Ürün Güncelleme ***************
//! Değişiklik Olduğunda
document.querySelectorAll('#cart-product-quantity').forEach((Item) => {
    Item.addEventListener("change", e => {

        //! Sepet Ürün Id
        var data_id = e.target.getAttribute("data_id"); 
        //console.log("data_id:", data_id);
    
        //! Sepet Ürün Fiyatı
        var data_productsPrice = e.target.getAttribute("data_productsPrice"); 
        //console.log("data_productsPrice:", data_productsPrice);

        //! Sepet Ürün Fiyat Birimi
        var data_productsCurrency = e.target.getAttribute("data_productsCurrency");  //! TL
        //console.log("data_productsCurrency:", data_productsCurrency);

        //! Sayısı
        var data_count = e.target.value;  //! Sayısı
        //console.log("data_count:", data_count);

        //! Toplam Fiyat
        var data_sum_price = Number(data_productsPrice)* data_count;
        data_sum_price = data_sum_price.toFixed(2);
        //console.log("data_sum_price:", data_sum_price);

        //! Sonuç
        document.querySelector('[class="total-col"][data_id="'+data_id+'"]').innerHTML = data_sum_price+" "+data_productsCurrency;  //! Toplam Urun Güncelle
        document.querySelector('[class="total-col"][data_id="'+data_id+'"]').setAttribute("data_productstotalprice",data_sum_price); //! Toplam Güncelle

        //! Toplam Fiyat Hesaplama
        var totalProductPrice = 0;
        document.querySelectorAll('[class="total-col"]').forEach((Item) => {
            var data_sum_price = Item.getAttribute("data_productstotalprice");
            totalProductPrice = totalProductPrice + Number(data_sum_price);
        });

        $("#productTotalPrice").html(totalProductPrice+" " +data_productsCurrency);
       
    })
 }); //! Değişiklik Olduğunda Son
//! ************ Sepete Ürün Güncelleme Son ***************
