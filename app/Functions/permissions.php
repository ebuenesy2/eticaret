<?php 

//! Kullanıcı Yetki Listesi
function permissionsUserList($userId,$roleId) {

    // return [
    //     "userId" => $userId,
    //     "roleId" => $roleId
    // ];
  
    //! Tanım
    $dbFindPermissionsList = array(); //! Yetki Listesi
    $dbFindPermissionsId = array(); //! Kişi Listesi

    //! Görev göre
    if($roleId != 1) {  //! Super Admin değil se
            
        //! Kullanıcıya Göre
        //! Status [0 => delete] [1 => add]
        $dbFind_permissionsUserList= DB::table("permissions_users")
        ->select
            (
                "permissions.id as permissionsId",
                "permissions.service as permissionsService",
                "permissions.title as permissionsTitle",
                "permissions.description as permissionsDescription",
                "permissions_users.status as permissionsUserStatus"
            )
        ->leftJoin("permissions","permissions.id","permissions_users.permission_id")
        ->where('permissions_users.user_id',(int)$userId)->get();
        //echo "<pre>"; print_r($dbFind_permissionsUserList); die();


        //! Yetki Id Veriler
        for ($i=0; $i < count($dbFind_permissionsUserList); $i++) {  $dbFindPermissionsId[] = $dbFind_permissionsUserList[$i]->permissionsId; }

        //! Görevlere Göre
        $dbFind_permissionsRoleList= DB::table("permissions_role")
        ->select
            (
                "permissions.id as permissionsId",
                "permissions.service as permissionsService",
                "permissions.title as permissionsTitle",
                "permissions.description as permissionsDescription"
            )
        ->leftJoin("permissions","permissions.id","permissions_role.permission_id")
        ->where('permissions_role.role_id',(int)$roleId)
        ->whereNotIn("permissions_role.permission_id",$dbFindPermissionsId)
        ->get();
        //echo "<pre>"; print_r($dbFind_permissionsRoleList); die();


        //! Tanım
        $dbFindPermissionsList = $dbFind_permissionsRoleList; //! Eşitliyor

        //! Yetki Listesi
        for ($i=0; $i < count($dbFind_permissionsUserList); $i++) { 
            $permissionsId_user = $dbFind_permissionsUserList[$i]->permissionsId; //! id
            $permissionsId_status = $dbFind_permissionsUserList[$i]->permissionsUserStatus; //! Durum
            
            if($permissionsId_status == 1) {  
                $dbFindPermissionsList[] = $dbFind_permissionsUserList[$i]; //! Veri Ekleme
                unset($dbFindPermissionsList[$i]->permissionsUserStatus); //! Key Sil
            } 
        }

        $dbFindPermissionsList = json_decode($dbFindPermissionsList,true);  //! Array verisini Json dönüştürüyor
        $key_values = array_column($dbFindPermissionsList, 'permissionsId'); //! Sutun Verileri [permissionsId] verisine göre
        array_multisort($key_values, SORT_ASC, $dbFindPermissionsList); //! Sıralama Yapıyor
        //echo "<pre>"; print_r($dbFindPermissionsList);  die();
        
    }
    else { 
    
        $dbFindPermissionsList= DB::table("permissions")
        ->select
            (
                "permissions.id as permissionsId",
                "permissions.service as permissionsService",
                "permissions.title as permissionsTitle",
                "permissions.description as permissionsDescription"
            )
        ->get();
    }
    //! Görev göre Son


    //! Return
    // $DB["dbFindPermissionsList"] =  $dbFindPermissionsList; //! Tüm Yetkiler
    // $DB["dbFind_permissionsUserList"] =  $dbFind_permissionsUserList; //! Kullanıcıya Göre Yetkiler
    // $DB["dbFind_permissionsRoleList"] =  $dbFind_permissionsRoleList; //! Görevlere Göre Yetkiler

    return $dbFindPermissionsList;
}
//! Kullanıcı Yetki Listesi Son

//! Kullanıcı Yetki Listesi - Servise Göre
function permissionsUserServiceList($userId,$roleId,$service) {

    // return [
    //     "userId" => $userId,
    //     "roleId" => $roleId,
    //     "service" => $service
    // ];
   
    //! Tanım
    $dbFindPermissionsList = array(); //! Yetki Listesi
    $dbFindPermissionsId = array(); //! Kişi Listesi

    //! Görev göre
    if($roleId != 1) {  //! Super Admin değil se

        //! Kullanıcıya Göre
        //! Status [0 => delete] [1 => add]
        $dbFind_permissionsUserList= DB::table("permissions_users")
        ->select
            (
                "permissions.id as permissionsId",
                "permissions.service as permissionsService",
                "permissions.title as permissionsTitle",
                "permissions.description as permissionsDescription",
                "permissions_users.status as permissionsUserStatus"
            )
        ->leftJoin("permissions","permissions.id","permissions_users.permission_id")
        ->where('permissions.service',$service)->where('permissions_users.user_id',(int)$userId)->get();
        //echo "<pre>"; print_r($dbFind_permissionsUserList); die();

        //! Yetki Id Veriler
        for ($i=0; $i < count($dbFind_permissionsUserList); $i++) {  $dbFindPermissionsId[] = $dbFind_permissionsUserList[$i]->permissionsId; }
 

        //! Görevlere Göre
        $dbFind_permissionsRoleList= DB::table("permissions_role")
        ->select
            (
                "permissions.id as permissionsId",
                "permissions.service as permissionsService",
                "permissions.title as permissionsTitle",
                "permissions.description as permissionsDescription"
            )
        ->leftJoin("permissions","permissions.id","permissions_role.permission_id")
        ->where('permissions.service',$service)
        ->where('permissions_role.role_id',(int)$roleId)
        ->whereNotIn("permissions_role.permission_id",$dbFindPermissionsId)
        ->get();
        //echo "<pre>"; print_r($dbFind_permissionsRoleList); die();

        //! Tanım
        $dbFindPermissionsList = $dbFind_permissionsRoleList; //! Eşitliyor

        //! Yetki Listesi
        for ($i=0; $i < count($dbFind_permissionsUserList); $i++) { 
            $permissionsId_user = $dbFind_permissionsUserList[$i]->permissionsId; //! id
            $permissionsId_status = $dbFind_permissionsUserList[$i]->permissionsUserStatus; //! Durum
            
            if($permissionsId_status == 1) {  
                $dbFindPermissionsList[] = $dbFind_permissionsUserList[$i]; //! Veri Ekleme
                unset($dbFindPermissionsList[$i]->permissionsUserStatus); //! Key Sil
            } 
        
        }

        $dbFindPermissionsList = json_decode($dbFindPermissionsList,true);  //! Array verisini Json dönüştürüyor
        $key_values = array_column($dbFindPermissionsList, 'permissionsId'); //! Sutun Verileri [permissionsId] verisine göre
        array_multisort($key_values, SORT_ASC, $dbFindPermissionsList); //! Sıralama Yapıyor
        //echo "<pre>"; print_r($dbFindPermissionsList);

    }
    else { 
    
        $dbFindPermissionsList= DB::table("permissions")
        ->select
            (
                "permissions.id as permissionsId",
                "permissions.service as permissionsService",
                "permissions.title as permissionsTitle",
                "permissions.description as permissionsDescription"
            )
        ->where('permissions.service',$service)
        ->get();
    }
    //! Görev göre Son


    //! Return
    // $DB["dbFindPermissionsList"] =  $dbFindPermissionsList; //! Tüm Yetkiler
    // $DB["dbFind_permissionsUserList"] =  $dbFind_permissionsUserList; //! Kullanıcıya Göre Yetkiler
    // $DB["dbFind_permissionsRoleList"] =  $dbFind_permissionsRoleList; //! Görevlere Göre Yetkiler

    return $dbFindPermissionsList;
}
//! Kullanıcı Yetki Listesi - Servise Göre Son


function viewControl($service,$action,$permissionsList){
    
    //! Arama
    $results = array_filter($permissionsList, function($key) use ($service,$action) {  
       return $key["permissionsService"] == $service && $key["permissionsTitle"] == $action; 
    });
    //echo "<pre>"; print_r($results); die();

    //! Durum
    $status = false; 
    if(count($results) > 0 ) { $status = true; }

    return $status;
    
}

?>