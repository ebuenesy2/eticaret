
//alert("4_0_controllersToSettingLocalStorage js Kullanımı");
console.log("4_0_controllersToSettingLocalStorage js çalışıyor");

var siteLang = $('html').attr('lang'); //! Site Dili
var yildirimdevMultiLangJson = JSON.parse(localStorage.getItem('yildirimdevMultiLang')); //! Çoklu Dil
if(yildirimdevMultiLangJson == null) {  getLangData(siteLang); }
else {
    var localLang = yildirimdevMultiLangJson?.lang; //! Local Dil
    if(siteLang != localLang ) { getLangData(siteLang); } //! Yoksa Ayarla
}

//! Dilleri Getir
function getLangData(changeLang) { console.log("changeLang:",changeLang);

    (async () => {
        const rawResponse = await fetch('/setting/local/storage/read', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify({ lang: changeLang })
        });
        const response = await rawResponse.json();
        //console.log("response:",response);

        localStorage.setItem('yildirimdevMultiLang', JSON.stringify(response.searchKey)); //! Ayarlama
    })();

}

//! Dilleri Getir Son