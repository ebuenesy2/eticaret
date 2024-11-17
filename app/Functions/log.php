<?php

//! Log Ekleme
function LogAdd ($logAddData) {
     try {
        
        //! Veri Ekleme
        $dbStatus =  DB::table('logs')->insert([
            'serviceName' => $logAddData['serviceName'],
            'serviceDb' => $logAddData['serviceDb'],
            'serviceDb_Id' => $logAddData['serviceDb_Id'],
            'serviceCode' => $logAddData['serviceCode'],
            'status' => $logAddData['status'],
            'decription' => $logAddData['decription'],
            'created_byId'=> $logAddData['created_byId'],
        ]); //! Veri Ekleme Son
    
        //! Return
        $DB["title"] =  "Log Ekleme";
        $DB["status"] =  $dbStatus;
        $DB["logAddData"] =  $logAddData;

        //echo "<pre>"; print_r($DB); die();  
    
        return $DB;

    } catch (\Throwable $th) { throw $th; }
}
//! Log Ekleme Son