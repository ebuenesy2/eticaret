//alert('export_list.js');
console.log("export_list.js");

//! Karakter Düzeltmesi
var Duzeltme = [ 
    { orgin:" ",return:"_" }, { orgin:"ı",return:"i" }, { orgin:"İ",return:"i" }, { orgin:"ç",return:"c" }, { orgin:"Ç",return:"c" }, 
    { orgin:"ğ",return:"g" }, { orgin:"Ğ",return:"g" }, { orgin:"ş",return:"s" }, { orgin:"Ş",return:"s" }, { orgin:"ü",return:"u" }, 
    { orgin:"Ü",return:"u" }, { orgin:"ö",return:"o" }, { orgin:"Ö",return:"o" }, 
]; //! Karakter Düzeltmesi Son

//! Modal
$("#exportModal").modal({ keyboard: true,backdrop: "static", show: false,})
.on("show.bs.modal", function(event){
    //alert("Modal Açıldı");

    //! Tablo Json
    var TableJson = tableConvertJson("customers"); //! Tablo Json Oluşturuyor
    //console.log("TableJson:",TableJson);

    var TabloHeader = TableJson.header.filter(u=> u.exportStatus == true);
    //console.log("TabloHeader:",TabloHeader);

    //! Tablo Sutunları
    var tableColumns = '';

    for (let index = 0; index < TabloHeader.length; index++) {
        const element = TabloHeader[index];

        var tableColumns = tableColumns+ '<div>';
        var tableColumns = tableColumns+ '<input type="checkbox" name="exportColumnCheck" id="'+element.exportName+'" onClick="checkControl()"  style="position: absolute;" checked >';
        var tableColumns = tableColumns+ '<label for="'+element.exportName+'" style="margin-left: 15px;font-size: 12px;">'+element.title+'</label>';
        var tableColumns = tableColumns+ '</div>';       
    }

    $('#columnTableSetting').html(tableColumns); //! Sutunları Gösteriyor
    $("input[type=checkbox][id=exportColumnCheckAll]").prop('checked',true); //! Tüm Veriler - Checkları
    //! Tablo Sutunları Son

}); //! Modal Son

//! ************ Export  ***************

//! ************ Tümü Seç Olayı --- Ekleme ***************
    
//! Tümü Seçme
$('input[type="checkbox"][name="exportColumnCheckAll"]').click(function () { 
    $("input[type=checkbox][name=exportColumnCheck]").prop('checked', $(this).prop('checked')); //! Tüm Elemanları Seçiyor
}); //! Tümü Seçme Son
  
//! ************ Tümü Seç Olayı Son  --- Ekleme ***************

//! Export Türü Seç
$('input[type="radio"][name="exportRadio"]').click(function (e) {
    $oku_val= $("input[type='radio'][name='exportRadio']:checked").val(); //! seçili

    if($oku_val == "export_sql") { $('#exportTableNamePanel').css('display','block'); } 
    else { $('#exportTableNamePanel').css('display','none'); } 
}); //! Export Türü Seç - Son

//! Export - Button
$("#new_export").click(function (e) {
    e.preventDefault();

    //alert("new_export");

    //! Veriler
    var exportTitle = $('#exportTitle').val(); //! Export Adı
    var exportTableName = $('#exportTableName').val(); //! Export - Tablo Adı
    var exportType = $("input[name='exportRadio']:checked").val(); //! Hangi Export Türü [ export_json ]

    // console.log("exportTitle:",exportTitle);
    // console.log("exportType:",exportType);

    //! Display - Sutunlar
    var exportColumnCheckDisplay = $("input[type=checkbox][name=exportColumnCheck]:checked"); //! Seçilenler
    //console.log("exportColumnCheckDisplay:",exportColumnCheckDisplay);

    var exportCheckList = []; //! List
    exportColumnCheckDisplay.map((e) => { 
        var exportTitle = exportColumnCheckDisplay[e].id;
        Duzeltme.map((u) =>{return exportTitle = exportTitle.replaceAll(u.orgin,u.return) })[Duzeltme.length-1]; //! Ebu_Enes_Yildirim
        exportCheckList.push(exportTitle); 
    });
    //console.log("exportCheckList:",exportCheckList);
    //! Display - Sutunlar Son

    //! Tablo Json
    var TableJson = tableConvertJson("customers",exportCheckList); //! Tablo Json Oluşturuyor
    console.log("TableJson:",TableJson);

    if(exportType == "export_json") {exportJson(TableJson.dataExport,exportTitle); }  //! Export Json
    else if(exportType == "export_xml") { exportXml(TableJson.dataExport,exportTitle);  } //! Export Xml
    else if(exportType == "export_excel") { exportExcel(TableJson.dataExport,exportTitle);  }  //! Export Excel
    else if(exportType == "export_sql") { exportSql(TableJson.header,TableJson.dataExport,exportTableName,exportTitle);   }  //! Export Sql
    else if(exportType == "export_pdf") { exportPdf(TableJson.dataExport_TableTitle,exportTitle) }  //! Export Pdf
    else { alert("seçilmedi"); }

}); //! Export - Button Son

//! ************ Export Son  ***************

//! Fonksiyon - Tablo -> JSON
function tableConvertJson(tableFind,exportCheckList = []) { 

    //console.log("tableFind:",tableFind);
    //console.log("exportCheckList Convert:",exportCheckList);
 
    //! Tanım
    var tableFind = tableFind; //! Tablo Adı 
    var tableInfo = { title: tableFind, header:[], data: [], dataExport:[], dataExport_TableTitle:[], exportCheckList:exportCheckList }; //! Tablo Bilgileri

    //! Satır
    var rows = document.getElementById(tableFind).rows; //! Tüm Satır
    var rowCount = rows.length; //! Satır Sayısı
    //console.log("rows: ",rows);

    //! Header
    var headerData = rows[0].cells; //! Header Veriler
    //console.log("headerData: ",headerData);

    for (let index = 0; index < headerData.length; index++) {

        const header_data = headerData[index];  //! Header Veriler
        const header_data_text = headerData[index].innerHTML.trim(); //! ID

        // console.log("header_data:",header_data);
        // console.log("header_data_text:",header_data_text);
    
        //! Export Name
        var exportNameControl = headerData[index]['attributes']['exportName']; //! exportName="isActive" 
        var exportNameValue = exportNameControl ? exportNameControl.nodeValue  : ""; //! isActive

        //! Export Title
        var exportTitleControl = headerData[index]['attributes']['exportTitle']; //! exportTitle="@lang('admin.actions')" 
        var exportTitleValue = exportTitleControl ? exportTitleControl.nodeValue : header_data_text; //! Tablodaki Ad [ Durum ]

        //! Export Durumu
        var exportviewdisplayControl = headerData[index]['attributes']['exportviewdisplay']; //! exportViewDisplay="true"
        var exportviewdisplayStatus = exportviewdisplayControl ? exportviewdisplayControl.nodeValue  == "false" ? false : true : true; //! Görünürlük - false

        //! Export Type
        var exportTypeControl = headerData[index]['attributes']['exportType']; //! exportType="number"
        var exportTypeValue = exportTypeControl ? exportTypeControl.nodeValue  : "text"; //! number
        
        //! Data
        var dataHeader={title:header_data_text, exportName:exportNameValue , exportName_TableTitle:exportTitleValue , exportStatus:exportviewdisplayStatus , type:exportTypeValue } //! Veriler
        tableInfo.header.push(dataHeader); //! Ekleme
        
        //console.log("dataHeader:",dataHeader); 
        
    }
    //! Header Son

    //console.log("tableInfo:",tableInfo);
    // console.log("tableInfo header:",tableInfo.header);

    //! Satır Veri Al
    for (let indexRow = 1; indexRow < rows.length; indexRow++) {
        const elementRow = rows[indexRow].cells; //! Satır Sayısı
        //console.log("elementRow: ",elementRow);

        //! Satır Verileri
        var dataRow={};
        var dataRowExport={};
        var dataRowExport_TableTitle={};

        //! Sutundan Veri Al
        for (let indexCell = 1; indexCell < elementRow.length; indexCell++) {

            const header_data_text = headerData[indexCell].innerHTML.trim(); //! ID
            //console.log("header_data_text:",header_data_text);

            //! Header -  Export Name
            var exportNameControl = headerData[indexCell]['attributes']['exportName']; //! exportName="isActive" 
            var exportNameValue = exportNameControl ? exportNameControl.nodeValue.trim()  : ""; //! isActive
            
            //! Export Title
            var exportTitleControl = headerData[indexCell]['attributes']['exportTitle']; //! exportTitle="@lang('admin.actions')" 
            var exportTitleValue = exportTitleControl ? exportTitleControl.nodeValue : header_data_text; //! Tablodaki Ad [ Durum ]
            
            //! Header -  Export Durumu
            var exportviewdisplayControl = headerData[indexCell]['attributes']['exportviewdisplay']; //! exportViewDisplay="true"
            var exportviewdisplayStatus = exportviewdisplayControl ? exportviewdisplayControl.nodeValue  == "false" ? false : true : true; //! Görünürlük - [ true / false]

            //! Export Type
            var exportTypeControl = headerData[indexCell]['attributes']['exportType']; //! exportType="number"
            var exportTypeValue = exportTypeControl ? exportTypeControl.nodeValue  : "text"; //! number

            //console.log("exportTypeValue:", exportTypeValue);
          

            //! Row
            var elementCell = elementRow[indexCell];  //! <td class="" exportname="id" exportviewdisplay="true">35</td>
            var elementCell_val = elementRow[indexCell].innerHTML.trim(); //! 35

            //! Row - Status
            if(exportNameValue == "isActive") {  var elementCell_val = elementRow[indexCell].childNodes[1]["attributes"]["data_value"].nodeValue.trim() }

            //! Value
            if(exportTypeValue == "number") { var elementCell_val = Number(elementCell_val); }
            
            
            //! Return
            dataRow[exportNameValue] = elementCell_val; //! Tüm Veriler
            if(exportviewdisplayStatus == true && exportCheckList.length > 0 && exportCheckList.includes(exportNameValue)) { dataRowExport[exportNameValue] = elementCell_val; dataRowExport_TableTitle[exportTitleValue] = elementCell_val; } //! Export
            else if(exportviewdisplayStatus == true && exportCheckList.length == 0 ) { dataRowExport[exportNameValue] = elementCell_val; dataRowExport_TableTitle[exportTitleValue] = elementCell_val; } //! Export
        }
        //! Sutundan Veri Al -- Son

        //! Veriler
        tableInfo.data.push(dataRow); //! Ekleme
        tableInfo.dataExport.push(dataRowExport); //! Ekleme - Export
        tableInfo.dataExport_TableTitle.push(dataRowExport_TableTitle); //! Ekleme - Export
    }
    //! Satır Veri Al -- Son

    //! Return
    return tableInfo;
 
} //! Fonksiyon - Tablo -> JSON Son

//! Export Json
function exportJson(TableJson,exportFileName){

    // alert("exportJson");
    // console.log("TableJson:",TableJson);
    // console.log("exportFileName:",exportFileName);

    let dataStr = JSON.stringify(TableJson,undefined, 4); //! Json Düzgün Gösteriyor
    let dataUri = "data:application/json;charset=utf-8," + encodeURIComponent(dataStr);
    let exportFileDefaultName = exportFileName + ".json"; //! İndirilen Dosya Adı

    //! İndirme
    let linkElement = document.createElement("a");
    linkElement.setAttribute("href", dataUri);
    linkElement.setAttribute("download", exportFileDefaultName);
    linkElement.click();
    //! İndirme son

} //! Export Json Son

//! Export Xml
function exportXml(TableJson,exportFileName){

    // alert("exportXml");
    // console.log("TableJson:",TableJson);
    // console.log("exportFileName:",exportFileName);

    //! Export Json
    var ExportJson = {
        DataList:{
            Data: TableJson
        }
    } //! Export Json Son
    
    //console.log("ExportJson:", ExportJson);
    
    //! Xml
    var x2js = new X2JS();
    var xmlChange = x2js.json2xml_str( ExportJson );
    var pretty_xml = vkbeautify.xml(xmlChange, 4); //! Görünüm
    //! Xml Son

    //console.log("pretty_xml: ",pretty_xml);

    //! İndirme
    var anchor = document.createElement("a");
    anchor.setAttribute("href","data:text/plain; charset=utf-8," + encodeURIComponent(pretty_xml) ); //! İndiricek yer
    anchor.setAttribute("download", exportFileName+".xml"); //! İndirme - Dosya Adı
    anchor.click();
    anchor.remove();
    //! İndirme Son

} //! Export Xml Son

//! Export Excel
function exportExcel(TableJson,exportFileName){

    // alert("exportExcel");
    // console.log("TableJson:",TableJson);
    // console.log("exportFileName:",exportFileName);

    // Excel Oluşturuyor
    var ws = XLSX.utils.json_to_sheet(TableJson, { origin: "A1" }); //! Excel Formatına Dönüştürüyor
    const wb = XLSX.utils.book_new(); //! Yeni Çalışma Oluşturuyor
    XLSX.utils.book_append_sheet(wb, ws, "Sheet1"); //! Yeni Sheet oluşturuyor

    // Boyutlarını ayırlıyoruz
    ws['!cols'] = [];
    ws['!rows'] = [];

    ws['!cols'] = [
        { 'width': 15 }, // col A = Genişlik
        { 'width': 25 }, // col B = Genişlik
        { 'width': 25 }, // col C = Genişlik
        { 'width': 25 }, // col D = Genişlik
        { 'width': 10 }, // col E = Genişlik
        { 'width': 25 }, // col F = Genişlik
        { 'width': 25 }, // col G = Genişlik
        { 'width': 25 }, // col H = Genişlik
        { 'width': 25 }, // col H = Genişlik
        { 'width': 10 }, // col I = Genişlik
    ];

    ws['!rows'] = [
        { 'hpt': 20 }, // row 1 = Yükseklik
        { 'hpt': 20 }, // row 2 = Yükseklik
    ]; 

    //! Dosya İndiriyor 
    XLSX.writeFile(wb, exportFileName+".xlsx")

} //! Export Excel Son

//! Export Sql
function exportSql(TableHeader,TableJson,tableName,exportFileName){

    //alert("exportSql");
    //console.log("TableHeader:",TableHeader);
    //console.log("TableJson:",TableJson);
    //console.log("tableName:",tableName);

    //! Veriler
    var sqlHeader = TableHeader.filter(u=>u.exportStatus == true);
    //console.log("sqlHeader: ",sqlHeader);


    //! Sabit Verileri Ayarla
    var constJsonKeys = [{"title":"id","type":"int(11) NOT NULL AUTO_INCREMENT"}]; //! id
    constJsonKeys.push({"title":"isActive","type":"int(11) NOT NULL DEFAULT 1"}); //! isActive

    //! Ekleme
    constJsonKeys.push({"title":"created_at","type":"timestamp NOT NULL DEFAULT current_timestamp()"}); //! created_at
    constJsonKeys.push({"title":"created_byId","type":"int(11) DEFAULT NULL"}); //! created_byId

    //! Güncelleme
    constJsonKeys.push({"title":"isUpdated","type":"int(11) NOT NULL DEFAULT 0"}); //! isUpdated 
    constJsonKeys.push({"title":"updated_at","type":"timestamp NULL DEFAULT NULL"}); //! updated_at
    constJsonKeys.push({"title":"updated_byId","type":"int(11) DEFAULT NULL"}); //! updated_byId

    //! Silme
    constJsonKeys.push({"title":"isDeleted","type":"int(11) NOT NULL DEFAULT 0"}); //! isDeleted 
    constJsonKeys.push({"title":"deleted_at","type":"timestamp NULL DEFAULT NULL"}); //! deleted_at
    constJsonKeys.push({"title":"deleted_byId","type":"int(11) DEFAULT NULL"}); //! deleted_byId
    
    //! Return
    //console.log("constJsonKeys:",constJsonKeys);
    
    //! Sabit Verileri Ayarla Son

    //! Sutun Verilerden Sabit Verileri Kaldır
    constJsonKeys.forEach(function (item) {
        var sqlHeaderFindIndex = sqlHeader.findIndex(a => a.exportName == item.title); //! Veri Arama
        sqlHeaderFindIndex != -1 && sqlHeader.splice(sqlHeaderFindIndex, 1); //! Veri Varsa Siliyor
    });
    
    //console.log("sqlHeader: ",sqlHeader);
    //!  Sutun Verilerden Sabit Verileri Kaldır --   Son

    //! Çıktı Sql Header Belirle
    var exportSqlHeader = [];//! Tum Header
    
    exportSqlHeader.push(constJsonKeys.find(s=>s.title =="id")); //! id Al
    
    //! Sql Header Format Ayarla -- Son
    sqlHeader.map((u) => {  
        u["title"] = u["exportName"]; //! Sutunları yer değiştir
        delete u["exportName"]; delete u["exportStatus"]; //! Sil
       
        //! Type Değiştir
        if(u["type"] == "number") { u["type"] = "int(11) NOT NULL"; }
        else if(u["type"] == "text") { u["type"] = "text DEFAULT NULL"; }
        else if(u["type"] == "time") { u["type"] = "timestamp NULL DEFAULT NULL"; }
        else { u["type"] = "text DEFAULT NULL"; }

        exportSqlHeader.push(u); //! Header Ekle
    });
    //! Sql Header Format Ayarla -- Son

    constJsonKeys.filter(s=>s.title !="id").map((u) => { exportSqlHeader.push(u);  }); //! id - dışındakileri - header ekle
    
    //console.log("exportSqlHeader: ",exportSqlHeader);
    //! Çıktı Sql Header Belirle--  Son

    // //! **********************************************************************

    //! Sql Oluşturma Kodu
    var createSqlDataCode = []; //! Sutun Değerleri
    var createSqlCode = "CREATE TABLE `"+tableName+"` ("+"\n"; //! Başlangıç

    //! Header - Ekle
    exportSqlHeader.map((u) => {createSqlDataCode.push(" `"+u.title+"` "+u.type);  }); //! Veri Ekliyor
    createSqlDataCode.push("PRIMARY KEY (id)"); //! PRIMARY KEY

    //console.log("createSqlDataCode:",createSqlDataCode);

    //! CreateSQL
    createSqlCode = createSqlCode + createSqlDataCode.join(', \n')+"\n"; //! Birleştirme
    createSqlCode = createSqlCode +") ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

    //console.log(createSqlCode); //! Oluşturma Kodu
    //! Sql Oluşturma Kodu Son

    //! **********************************************************************

    //! Ekleme Yapılacak Sutunları Alıyor
    var exportSqlHeader =  exportSqlHeader.filter(u=> 
        (u.title != "id") && 
        (u.title != "updated_byId") && (u.title != "updated_at") && (u.title != "isUpdated") &&
        (u.title != "deleted_byId") && (u.title != "deleted_at") && (u.title != "isDeleted") 
    );

    //console.log("exportSqlHeader:",exportSqlHeader);
   
    //! Sql Veri Ekleme
    var addSqlDataCode = []; //! Sutun Değerleri
    var addSqlCode = "INSERT INTO `"+tableName+"` \n ("; //! Başlangıç Kod
    //console.log("addSqlCode: ",addSqlCode);

    //! Eklenecek Sutun 
    exportSqlHeader.map((u)=> { u.title != "id" && addSqlDataCode.push(" `"+u.title+"` ");   }); //! Ekliyor

    addSqlCode = addSqlCode + addSqlDataCode.join(','); //! Birleştirme
    addSqlCode = addSqlCode +") VALUES "+"\n";
    //! Eklenecek Sutun  Son


    //! Eklenecek Veriler
    var addSqlValues = []; //! Eklenecek Veri

    TableJson.map((u) => {
        var dataValue =[]; //! Yeni Veri
        exportSqlHeader.map((h) => {  h.type ==  "int(11) NOT NULL" ?  dataValue.push( Number(u[h.title]) ) : dataValue.push("'"+u[h.title]+"'"); }); //! Ekleme
        addSqlValues.push("( "+ dataValue.join(',') +" )"); //! Birleştirme
    });

    //console.log("addSqlValues:",addSqlValues);
    //! Eklenecek Veriler Son

    addSqlCode = addSqlCode + addSqlValues.join(', \n')+";";
    //console.log(addSqlCode); //! İnsert Code
    // //! Sql Veri Ekleme Son

    //! **********************************************************************
    
    //! Kod Birleştirme
    //console.log("kod:");

    var ReturnCode = "";
    //ReturnCode = ReturnCode+ "\n\n" + "DROP TABLE `"+tableName+"`;"; //! Tablo Sil
    ReturnCode = ReturnCode+ "\n\n" + createSqlCode; //! Ekleme
    ReturnCode = ReturnCode+ "\n\n" + addSqlCode; //! Silme
    //console.log(ReturnCode);
    //! Kod Birleştirme Son

    //! Dosya İndirme
    let dataStr = ReturnCode;
    let dataUri =
            "data:application/text;charset=utf-8," +
            encodeURIComponent(dataStr);

    let exportFileDefaultName = exportFileName + ".sql";

    let linkElement = document.createElement("a");
    linkElement.setAttribute("href", dataUri);
    linkElement.setAttribute("download", exportFileDefaultName);
    linkElement.click();
    //! Dosya İndirme Son
    

} //! Export Sql Son

//! Export Pdf
function exportPdf(TableJson,exportFileName){

    //alert("exportPdf");
    console.log("TableJson:",TableJson);
    console.log("exportFileName:",exportFileName);
  
    var sqlHeader = Object.keys(TableJson[0]); //! Object - Key 
    console.log("sqlHeader: ",sqlHeader);
  
    //! Tanım
    var new_window = document.getElementById("iFramePdf").contentWindow; //! İframe
    var new_windowDocument = new_window.document; //! Veri
  
    //! Sayfa Css Ayarlama
    var styleCss = '<style type="text/css" media="print">';
    styleCss = styleCss+"@page {";
    //styleCss = styleCss+"size: portrait;"; //! Dikey
    styleCss = styleCss+"size: landscape;"; //! Yatay
    //styleCss = styleCss+"margin: 5mm;";
    styleCss = styleCss+"margin-top: 5mm;";
    styleCss = styleCss+"}";
    styleCss = styleCss+"</style>";
  
    $("body",new_windowDocument).append(styleCss); //! Ekran Ekleme
    //! Sayfa Css Ayarlama -- Son
  
    //! Görünürlük Ayarlama
    new_windowDocument.querySelectorAll('[exportviewdisplay=true]').forEach((e) => { e.style.display='' }); //! Göster
    new_windowDocument.querySelectorAll('[exportviewdisplay=false]').forEach((e) => { e.style.display='none' }); //! Gizle
  
    //! Yazıları Değiştir
  
    //! TabloHeader   Ayarlama
    var TabloHeader = '';
  
    for (let index = 0; index < sqlHeader.length; index++) {
      var TabloHeader = TabloHeader + '<td class="c28" colspan="1" rowspan="1"><p class="c1"><span class="c0"  >'+sqlHeader[index]+'</span></p></td>';
    }
    //! TabloHeader   Ayarlama Son
    
  
    //! Body - Veriler
    var TabloBody = '';
    for (let indexBody = 0; indexBody < TableJson.length; indexBody++) {
      var TabloBody = TabloBody +'<tr class="c33">';
        
      for (let index = 0; index < sqlHeader.length; index++) {
        var TabloBody = TabloBody + '<td class="c7" colspan="1" rowspan="1"><p class="c1"><span class="c0"  >'+TableJson[indexBody][sqlHeader[index]]+'</span></p></td>';
      }
  
      var TabloBody = TabloBody + '</tr>';
    }
    //! Body - Veriler -- Son
  
    //! Değişicek Veriler
    var updateData = [
      { title: "exportTableTitle", text : exportFileName },
  
      { title: "exportTableHeader", text : TabloHeader },
      { title: "exportTableBody", text : TabloBody },
  
      { title: "tableFooterText", text : $('#editable-sample_info').html().trim() },
    ]

    console.log("updateData:",updateData);
  
    updateData.map((u) => { if(new_windowDocument.querySelector('#'+u.title)) { new_windowDocument.querySelector('#'+u.title).innerHTML = u.text; } });
    //! Yazıları Değiştir -- Son
  
    //! Print
    new_window.print();
  
} //! Export Pdf Son