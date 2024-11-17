$(function () {

                   
     //! **** Ajax Get ***********
     $.ajax({
        url: "/ajax/example/get",
        type: "GET",
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

          alert('Başarılı');
          console.log("response: ",response);
          console.log("response: ",response.status);

        },
        error: function (jqXHR, textStatus, errorThrown) {

          alert("Hata");
          console.log("jqXHR:",jqXHR);
          console.log("status:",textStatus);
          console.log("error:",errorThrown);

        },
        complete: function() {

          alert("Bitti");
          console.log("Bitti");

        }
    })
    //! **** Ajax Get Son *********


});