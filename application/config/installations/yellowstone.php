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
    $config['database_host']    = '128.187.103.13';
    $config['database_username']    = 'miller';
    $config['database_name']    = 'yellowstone';
    $config['database_password']    = 'moroni123';
    /*
    |--------------------------------------------------------------------------
    | Default Variables for Adding Site Controller
    |--------------------------------------------------------------------------
    */
    $config['default_datum']    = 'MSL';
    $config['default_spatial']  = 'WGS84';
    $config['default_source']   = 'Dr. Miller\'s Research on the Lakes in the Yellowstone Area';
    $config['LocalX']   = '44.414021';
    $config['LocalY']   = '-110.578508';
    $config['LocalProjectionID']    = '3';
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
    $config['default_varcode']  = 'YST';
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
    $config['homename'] = 'BYU Water Resources'; //Name of your blog/Website homepage.
    $config['homelink'] = 'http://ceen.et.byu.edu/content/water-resources-and-environmental';//Link of your blog/Website homepage
    $config['orgname']  = 'Dr. W. Miller at Brigham Young University'; //Name of your organization
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