/**
 * Veri ekle
 * Veri sil
 * Veri güncelle
 */


//alert("product_actions_web");
console.log("web - Ürün İşlemleri");

//! Değişiklik Olduğunda
document.querySelectorAll('#product_gallery').forEach(function (i) {
    i.addEventListener('click', function (event) {
        //alert("değiştirme");

        //! Attr - Diğer Veri Alma
        var data_src =  event.target.src;
        //console.log("data_src:", data_src);
     
        $('#product_big').attr('src',data_src);
   
    });
});  //! Değişiklik Olduğunda Son