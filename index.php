<?php

	class Voce{

	public $naziv ;
	public $tezina ;
	public $crv_jab;
	public $procenat_crv = 20;

	public function crvljiva($tezina){
		$this->tezina = $tezina;
		$crv_jab = ($this->procenat_crv / 100) * $this->tezina;
		return $crv_jab;
	}

}


	class Sokovnik extends Voce{

		public $posuda_zapremina = 30;
		public $cediljka;
		public $sok;
		public $procenat_soka = 40;
		

		public function cedjenje($tezina){ 
	    $this->tezina = $tezina;
	    if($this->tezina <= $this->posuda_zapremina){
		$this->sok = ($this->procenat_soka / 100) * $this->tezina;
		return $this->sok;


			}
			else {
					echo "Premasen kapacitet";
			}
		}

		public function ubacivanje(){


	}

		

}


$ukupno_sok = new Sokovnik;
echo "Iscedjeno je " . $ukupno_sok->cedjenje(30) . " litara";
echo "<br>";
echo "Ukupno je " . $ukupno_sok->crvljiva(30) . " kg crvljive jabuke";
