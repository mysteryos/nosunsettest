<?php


 function autoload_4069cc53e28147099e5451994892b8f8($class)
{
    $classes = array(
        'DmrService' => __DIR__ .'/DmrService.php',
        'GetVehicleInformationByReg' => __DIR__ .'/GetVehicleInformationByReg.php',
        'GetVehicleInformationByRegResponse' => __DIR__ .'/GetVehicleInformationByRegResponse.php',
        'GetVehicleInformationByStel' => __DIR__ .'/GetVehicleInformationByStel.php',
        'GetVehicleInformationByStelResponse' => __DIR__ .'/GetVehicleInformationByStelResponse.php',
        'GetVehicleInformationByReg_NoReg' => __DIR__ .'/GetVehicleInformationByReg_NoReg.php',
        'GetVehicleInformationByReg_NoRegResponse' => __DIR__ .'/GetVehicleInformationByReg_NoRegResponse.php',
        'GetVehicleInformationByStel_NoReg' => __DIR__ .'/GetVehicleInformationByStel_NoReg.php',
        'GetVehicleInformationByStel_NoRegResponse' => __DIR__ .'/GetVehicleInformationByStel_NoRegResponse.php',
        'GetKoeretoejModelVariantRegisterRecord_AutoIT' => __DIR__ .'/GetKoeretoejModelVariantRegisterRecord_AutoIT.php',
        'GetKoeretoejModelVariantRegisterRecord_AutoITResponse' => __DIR__ .'/GetKoeretoejModelVariantRegisterRecord_AutoITResponse.php',
        'GetKIdModelVariantIdRecord_AutoIT' => __DIR__ .'/GetKIdModelVariantIdRecord_AutoIT.php',
        'GetKIdModelVariantIdRecord_AutoITResponse' => __DIR__ .'/GetKIdModelVariantIdRecord_AutoITResponse.php',
        'VehicleInformation' => __DIR__ .'/VehicleInformation.php',
        'ArrayOfEjerBruger' => __DIR__ .'/ArrayOfEjerBruger.php',
        'EjerBruger' => __DIR__ .'/EjerBruger.php',
        'EjerBrugerForholdType' => __DIR__ .'/EjerBrugerForholdType.php',
        'EjerBrugerEnhedsType' => __DIR__ .'/EjerBrugerEnhedsType.php',
        'ArrayOfVehicleInformation' => __DIR__ .'/ArrayOfVehicleInformation.php',
        'ArrayOfKoeretoejModelVariantRegisterRecord' => __DIR__ .'/ArrayOfKoeretoejModelVariantRegisterRecord.php',
        'KoeretoejModelVariantRegisterRecord' => __DIR__ .'/KoeretoejModelVariantRegisterRecord.php',
        'ArrayOfKIdModelVariantIdRecord' => __DIR__ .'/ArrayOfKIdModelVariantIdRecord.php',
        'KIdModelVariantIdRecord' => __DIR__ .'/KIdModelVariantIdRecord.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_4069cc53e28147099e5451994892b8f8');

// Do nothing. The rest is just leftovers from the code generation.
{
}
