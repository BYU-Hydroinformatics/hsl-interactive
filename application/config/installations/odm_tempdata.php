<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    /*
    |--------------------------------------------------------------------------
    | HydroServer Lite Configuration\
    |--------------------------------------------------------------------------
    |
    | This file is dynamically populated during installation. 
    | It provides configuration for the database and default options for some pages
    | Developed by Rohit Khattar, GIS LAB - CAES at ISU
    | Further edits made while at GIS Lab - BYU, Provo, Utah
    */
    /*
    |--------------------------------------------------------------------------
    | MySQL connection settings
    |--------------------------------------------------------------------------
    */
    $config['database_host']    = 'localhost';
    $config['database_username']    = 'WWO_Admin';
    $config['database_name']    = 'odm_tempdata';
    $config['database_password']    = 'isaiah4118';
    /*
    |--------------------------------------------------------------------------
    | Default Variables for Adding Site Controller
    |--------------------------------------------------------------------------
    */
    $config['default_datum']    = 'Unknown';
    $config['default_spatial']  = 'Unknown';
    $config['default_source']   = 'Brigham Young University';
    $config['LocalX']   = 'NULL';
    $config['LocalY']   = 'NULL';
    $config['LocalProjectionID']    = 'NULL';
    $config['PosAccuracy_m']    = 'NULL';
    /*
    |--------------------------------------------------------------------------
    | Default Variables for Adding Data Values
    |--------------------------------------------------------------------------
    */
    $config['UTCOffset']    = '-7';
    $config['CensorCode']   = 'nc';
    $config['QualityControlLevelID']    = '0';
    $config['ValueAccuracy']    = 'NULL';
    $config['OffsetValue']  = 'NULL';
    $config['OffsetTypeID'] = 'NULL';
    $config['QualifierID']  = '1';
    $config['SampleID'] = 'NULL';
    $config['DerivedFromID']    = 'NULL';
    /*
    |--------------------------------------------------------------------------
    | Default Variables for Adding Variable
    |--------------------------------------------------------------------------
    */
    $config['default_varcode']  = '57';
    $config['time_support'] = '456700';
    /*
    |--------------------------------------------------------------------------
    | Default Variables for Adding Source
    |--------------------------------------------------------------------------
    */
    $config['ProfileVersion']   = 'Unknown';
    /*
    |--------------------------------------------------------------------------
    | Configuration for Names and home links
    |--------------------------------------------------------------------------
    */
    $config['homename'] = 'iUTAH GAMUT Network'; //Name of your blog/Website homepage.
    $config['homelink'] = 'http://data.iutahepscor.org/mdf/Data/Gamut_Network/';//Link of your blog/Website homepage
    $config['orgname']  = 'Brigham Young University'; //Name of your organization
    $config['HSLversion']   = '3.0'; //Name of your software version
    /*
    |--------------------------------------------------------------------------
    | Default Language Settings
    |--------------------------------------------------------------------------
    */
    $config['lang'] = 'English';
    /*
    |--------------------------------------------------------------------------
    | WaterOneFlow Services Settings
    |--------------------------------------------------------------------------
    */
    //Service code Settings
    $config['auth_token'] = '';
    $config['service_code'] = 'odm_tempdata';
    $config['odm_service'] = 'http://his.cuahsi.org/ODMCV_1_1/ODMCV_1_1.asmx?wsdl';
    /*
    |--------------------------------------------------------------------------
    | Enterprise Settings
    |--------------------------------------------------------------------------
    */
    
    /* End of file odm_tempdata.php */
    /* Location: ./application/config/installations/odm_tempdata.php */