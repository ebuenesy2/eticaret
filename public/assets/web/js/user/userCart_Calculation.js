//! ************ İskonto Hesaplama ***********************
document.querySelector('#discountedPercent').addEventListener('keyup', e => { discountedPercentFun(); }); 
document.querySelector('#discountedPrice').addEventListener('keyup', e => { discountedPriceFun(); }); 

//! Hesaplama
function discountedPercentFun(){

  var data_products_currency = $("#cart_info").attr('data_products_currency'); //! Para Birimi

  var productsAllTotalPrice = $('#productTotalPrice').attr('productsAllTotalPrice'); //! Toplam Urun Fiyat
  productsAllTotalPrice = Number(productsAllTotalPrice.replace(',','.')).toFixed(2); //! Sayı Dönüştür

  var discountedPercent = $('#discountedPercent').val(); //! Yüzdelik
  discountedPercent = Number(discountedPercent.replace(',','.')).toFixed(2); //! Sayı Dönüştür

  var productsDiscountedPrice = (Number(productsAllTotalPrice)*discountedPercent)/100; //! İndirim Fiyat
  productsDiscountedPrice = Number(productsDiscountedPrice).toFixed(2); //! Sayı Dönüştür
  
  var productsDiscountedPriceResult = productsAllTotalPrice - productsDiscountedPrice; //! İndirimli Fiyat
  productsDiscountedPriceResult = Number(productsDiscountedPriceResult).toFixed(2); //! Sayı Dönüştür

  //! Sonuc
  $("#discountedPrice").val(productsDiscountedPrice); //! İndirim Fiyat
  $("#productDiscountPrice").html(productsDiscountedPrice+" "+data_products_currency); //! İndirimli Fiyat
  $("#productResultPrice").html(productsDiscountedPriceResult); //! Son Fiyat

}
//! Hesaplama

//! Hesaplama
function discountedPriceFun(){

    var data_products_currency = $("#cart_info").attr('data_products_currency'); //! Para Birimi
  
    var productsAllTotalPrice = $('#productTotalPrice').attr('productsAllTotalPrice'); //! Toplam Urun Fiyat
    productsAllTotalPrice = Number(productsAllTotalPrice.replace(',','.')).toFixed(2); //! Sayı Dönüştür
  
    var discountedPrice = $('#discountedPrice').val(); //! Yüzdelik
    discountedPrice = Number(discountedPrice.replace(',','.')).toFixed(2); //! Sayı Dönüştür
   
    var discountedPercent = (discountedPrice*100)/productsAllTotalPrice; //! İndirim Yüzdelik
    discountedPercent = Number(discountedPercent).toFixed(2); //! Sayı Dönüştür

    var productsDiscountedPriceResult = productsAllTotalPrice - discountedPrice; //! İndirimli Fiyat
    productsDiscountedPriceResult = Number(productsDiscountedPriceResult).toFixed(2); //! Sayı Dönüştür
   
    //! Sonuc
    $("#discountedPercent").val(discountedPercent); //! İndirim Yüzdelik
    $("#productDiscountPrice").html(discountedPrice+" "+data_products_currency); //! İndirimli Fiyat
    $("#productResultPrice").html(productsDiscountedPriceResult); //! Son Fiyat
  
}
//! Hesaplama
//! ************ İskonto Hesaplama Son ***********************