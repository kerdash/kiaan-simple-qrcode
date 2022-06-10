<?php

/**
 * Kiaan framework
 *
 * @author Hassan Kerdash kerdashhassan@gmail.com
**/

/*
|---------------------------------------------------
| Namespaces
|---------------------------------------------------
*/
namespace HassanKerdash\SimpleQrCode;

/*
|---------------------------------------------------
| Uses
|---------------------------------------------------
*/
use Kiaan\Facade;
use HassanKerdash\SimpleQrCode\Plugin\QrCode as Base;

/*
|---------------------------------------------------
| QrCode
|---------------------------------------------------
*/
class QrCode {
    
    /*
    * Facade
    *
    */
    use Facade;

    protected function __facade() {
        return Base::class;
    }

}
