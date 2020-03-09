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
    $config['database_name']    = 'comisionsps';
    $config['database_password']    = 'isaiah4118';
    /*
    |--------------------------------------------------------------------------
    | Default Variables for Adding Site Controller
    |--------------------------------------------------------------------------
    */
    $config['default_datum']    = 'MSL';
    $config['default_spatial']  = 'NAD83';
    $config['default_source']   = 'Comision de Valle de Sula';
    $config['LocalX']   = '-88.027319';
    $config['LocalY']   = '15.503307';
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
    $config['default_varcode']  = 'CVDS';
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
    $config['homename'] = 'BYU World Water Initiative'; //Name of your blog/Website homepage.
    $config['homelink'] = 'http://worldwater.byu.edu/';//Link of your blog/Website homepage
    $config['orgname']  = 'San Pedro Sula (Honduras)'; //Name of your organization
    $config['HSLversion']   = '3.0'; //Name of your software version
    /*
    |--------------------------------------------------------------------------
    | Default Language Settings
    |--------------------------------------------------------------------------
    */
    $config['lang'] = 'Spanish';
    /*
    |--------------------------------------------------------------------------
    | WaterOneFlow Services Settings
    |--------------------------------------------------------------------------
    */
    //Service code Settings
    $config['auth_token'] = '';
    $config['service_code'] = 'default';
    $config['odm_service'] = 'http://his.cuahsi.org/ODMCV_1_1/ODMCV_1_1.asmx?wsdl';
    /* End of file default.php */
    /* Location: ./application/config/installations/default.php */