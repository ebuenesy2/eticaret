<?php

//! Kullanım izinleri -  Tüm Veriler
function permissonAll(){

    $dbAll= DB::table('permissions')->get();
    return $dbAll;
    
}
//! Kullanım izinleri -  Tüm Veriler Son


//! Kullanım izinleri -  Veri Arama
function permissonFind($dbFindData){

    //echo "<pre>"; print_r($dbFindData); die();

    $dbAll= DB::table('permissions')->where('service',$dbFindData['service'])->get();
    return $dbAll;
    
}
//! Kullanım izinleri -  Veri Arama Son


//! Yetki Listesi
function permissionsList($dbFindData) {

    //echo "<pre>"; print_r($dbFindData); die();

    //! Yetkiler
    $dbFind_role= DB::table("permissions_role")->where('role_id',$dbFindData['role_id'])->get(); //! Görevler
    $dbFind_departman= DB::table("permissions_departman")->where('departman_id',$dbFindData['departman_id'])->get(); //! Görevler
    $dbFind_user= DB::table("permissions_users")->where('user_id',$dbFindData['user_id'])->get(); //! Görevler
  

    //! Return
    //$DB["dbFind_role"] =  $dbFind_role; //! Görevler
    $DB["dbFind_departman"] =  $dbFind_departman; //! Departman
    //$DB["dbFind_user"] =  $dbFind_user; //! Kullanıcı

    //$DB["dbFind_permissions"] =  $dbFind_permissions; //! Yetki Listesi

    return $DB;
}
//! Yetki Listesi Son


//! Yetki Kontrol
function permissionsControl($role,$permissionsId) {

    echo "yetki kontrol"; die();

    //! Yetkiler
    $dbFind_role= DB::table("roles")->where('title','admin')->first(); //! Görevler
    $dbFind_role_permissions = json_decode($dbFind_role->permissions, true); //! Yetkiler
    $dbFind_permissionsControl = in_array($permissionsId, $dbFind_role_permissions); //! Kontrol
    $dbFind_permission= DB::table("permissions")->where('id',$permissionsId)->first(); //! Yetki Listesi

    
    // echo "key:"; echo $key;  die();

    //! Return
    $DB["status"] = $dbFind_permissionsControl  ? 1 : 0; //! Durum
    $DB["permissionsId"] =  $permissionsId; //! Yetki
    $DB["dbFind_role"] =  $dbFind_role; //! Görevler
    $DB["dbFind_permission"] =  $dbFind_permission; //! Yetki Bilgisi
    $DB["dbFind_permission_description"] =  $dbFind_permission ? $dbFind_permission->description : null; //! Yetki Açıklaması

    return $DB;

}
//! Yetki Kontrol Son

?>