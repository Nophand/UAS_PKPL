<?php

interface BolaInterface
{
    public function tendensiSentral($jarijari);

}

class Volume implements BolaInterface
{
    public function tendensiSentral($jarijari)
    {
        $phi = 3.14;
        Echo "Volume Bola adalah : ". 4/3*$phi*$jarijari*$jarijari*$jarijari;
    }
}

class LuasPermukaan implements BolaInterface
{
    public function tendensiSentral($jarijari)
    {
        $phi = 3.14;
        Echo "Luas Permukaan Bola adalah : ". 4*$phi*$jarijari*$jarijari;
    }
}

class Diameter implements BolaInterface
{
    public function tendensiSentral($jarijari)
    {
        Echo "Diameter Bola adalah : ". 2*$jarijari;
    }
}


class NoTendensiSentral implements BolaInterface
{
    public function tendensiSentral($jarijari)
    {
        echo 'Tidak Ada Pilihan.';
    }
}

class BolaPilihan
{
    public static function tendensiSentralUntuk($tendensiSentral)
    {
        switch ($tendensiSentral) {
            case 'volume':
                return new Volume;
                break;
            case 'luaspermukaan':
                return new LuasPermukaan;
                break;
            case "diameter":
                return new Diameter;
                break;
            default:
                return new NoTendensiSentral;
        }
    }
}

$jarijari = 8.5;

BolaPilihan::tendensiSentralUntuk('volume')->tendensiSentral($jarijari);
echo '<br>';
BolaPilihan::tendensiSentralUntuk('luaspermukaan')->tendensiSentral($jarijari);
echo '<br>';
BolaPilihan::tendensiSentralUntuk('diameter')->tendensiSentral($jarijari);

?>