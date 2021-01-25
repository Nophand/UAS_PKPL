<?php
class Bola{
    
    public $phi;

    public function __construct($phi=3.14){
        $this->phi = $phi;
    }

    public function Volume($jarijari){
        Echo "Volume Bola adalah : ". 4/3*$this->phi*($jarijari*$jarijari*$jarijari);
    }

    public function LuasPermukaan($jarijari){
        Echo "Luas Permukaan Bola adalah : ". 4*$this->phi(*$jarijari*$jarijari);
    }

    public function diameterBola($jarijari){
        Echo "Diameter Bola adalah : ". 2*$jarijari;
    }

    public function noChoice()
    {
        echo 'Tidak Ada Pilihan.';
    }

    public function hitungBolaUntuk($hitungBola, $jarijari)
    {
        switch ($tendensiSentral) {
            case 'volume':
                $this->VolumeBola($jarijari);
                break;
            case 'luaspermukaan':
                $this->LuasPermukaan($jarijari);
                break;
            case "diameter":
                $this->diameterBola($jarijari);
                break;
            default:
            $this->noChoice($jarijari);
        }
    }
}

$jarijari=8.5;
$hitungBola = new Bola;
$hitungBola->hitungBolaUntuk('diameter', $jarijari);

?>