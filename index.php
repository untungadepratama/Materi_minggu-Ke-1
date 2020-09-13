 <?php 

class Hewan
{
	public $jumlah_kaki,
	       $bisa_terbang = "Bisa terbang",
	       $bersuara;	
}
/**
 * 
 */
class Kucing extends Hewan
{
	public $bisa_terbang = "Tidak bisa terbang";

	function jumlahkaki(){
		return $this->jumlah_kaki;
	}

	public function terbang(){
		return $this->bisa_terbang;
	}

	public function bersuara(){
		return "Meoong";
	}
}
/**
 * 
 */
 class Anjing extends Hewan{
 	public $bisa_terbang = "Tidak bisa terbang";

	function jumlah_kaki(){
		return $this->jumlah_kaki;
	}
	
	public function terbang(){
		return $this->bisa_terbang;
	}

	public function bersuara(){
		return "Guk Guk Guk";
	} 	
}
/**
 * 
 */
 class Elang extends Hewan{

	function jumlah_kaki(){
		return $this->jumlah_kaki;
	}
	
	public function terbang(){
		return $this->bisa_terbang;
	}

	public function bersuara(){
		return "Miip Miip";
	}	
}
/**
 * 
 */
 class Angsa extends Hewan{

	function jumlah_kaki(){
		return $this->jumlah_kaki;
	}
	
	public function terbang(){
		return $this->bisa_terbang;
	}

	public function bersuara(){
		return "Kwak Kwak";
	}	
}

 $momo = new Kucing;
 $momo->jumlah_kaki = 4;
 echo "momo adalah Seekor kucing <br>";
 echo "Mempunyai kaki sebanyak : ". $momo->jumlah_kaki."<br>";
 echo $momo->bisa_terbang."<br>";
 echo "momo bersuara  : ". $momo>bersuara(). "<br>";

 echo "<hr>";

 $doggo= new Anjing;
 $doggo->jumlah_kaki = 4;
 echo "doggo adalah Seekor anjing <br>";
 echo "Mempunyai kaki sebanyak : ". $doggo->jumlah_kaki."<br>";
 echo $doggo->bisa_terbang."<br>";
 echo "doggobersuara : ". $doggo->bersuara(). "<br>";

 echo "<hr>";
 
 $zya= new Elang;
 $zya->jumlah_kaki = 2;
 echo "zya adalah Seekor elang<br>";
 echo "Mempunyai kaki sebanyak : ". $zya->jumlah_kaki."<br>";
 echo $zya->bisa_terbang. "<br>";
 echo "zya bersuara : ". $zya->bersuara(). "<br>";

 echo "<hr>";

 $masha= new Angsa;
 $masha->jumlah_kaki = 2;
 echo "masha adalah Seekor angsa <br>";
 echo "Mempunyai kaki sebanyak : ". $masha->jumlah_kaki."<br>";
 echo $masha->bisa_terbang. "<br>";
 echo "masha bersuara : ". $masha->bersuara(). "<br>";

 echo "<hr>";
