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
    $config['database_name']    = 'gill_lab_byu';
    $config['database_password']    = 'isaiah4118';
    /*
    |--------------------------------------------------------------------------
    | Default Variables for Adding Site Controller
    |--------------------------------------------------------------------------
    */
    $config['default_datum']    = 'NULL';
    $config['default_spatial']  = 'NULL';
    $config['default_source']   = 'Gill Lab';
    $config['LocalX']   = 'NULL';
    $config['LocalY']   = 'NULL';
    $config['LocalProjectionID']    = 'NULL';
    $config['PosAccuracy_m']    = 'NULL';
    /*
    |--------------------------------------------------------------------------
    | Default Variables for Adding Data Values
    |--------------------------------------------------------------------------
    */
    $config['UTCOffset']    = '7';
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
    $config['default_varcode']  = 'GillBYU';
    $config['time_support'] = '0';
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
    $config['homename'] = 'Gill Lab'; //Name of your blog/Website homepage.
    $config['homelink'] = 'http://gilllab.byu.edu';//Link of your blog/Website homepage
    $config['orgname']  = 'Gill Lab'; //Name of your organization
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
    $config['service_code'] = 'default';
    $config['odm_service'] = 'http://his.cuahsi.org/ODMCV_1_1/ODMCV_1_1.asmx?wsdl';
    /*
    |--------------------------------------------------------------------------
    | Enterprise Settings
    |--------------------------------------------------------------------------
    */
    $config['multiInstall'] = true;
    /* End of file default.php */
    /* Location: ./application/config/installations/default.php */