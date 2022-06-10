
# kiaan-simple-qrcode
Simple QrCode is an easy to use wrapper for the Kiaan framework based on the great work provided by Bacon/BaconQrCode and SimpleSoftwareIO/simple-qrcode.
We created an interface that is familiar and easy to install for Kiaan users.

### Install

    composer require hassankerdash/kiaan-simple-qrcode

### Usage
All examples below assume you are pulling in the QrCode facade with the following line of code.

    use HassanKerdash\SimpleQrCode\QrCode;
    
    QrCode::generate('Make me into a QrCode!');

or

    use HassanKerdash\SimpleQrCode\Plugin\QrCode;
    
    $qrcode = new QrCode;
    $qrcode->size(500)->generate('Make me into a QrCode!');
    
## Note
Replace :-

    use SimpleSoftwareIO\QrCode\Facades\QrCode;
    To :-
    use HassanKerdash\SimpleQrCode\QrCode;

Replace :-

    use SimpleSoftwareIO\QrCode\Generator;
    To :-
    use HassanKerdash\SimpleQrCode\Plugin\QrCode;


## Documentation

Documentation for Simple QrCode can be found on our [SimpleSoftwareIO/simple-qrcode.](https://github.com/SimpleSoftwareIO/simple-qrcode#official-documentation)
