<?php

namespace Deki\Matrix;

class Matrix
{

/**
* Here are the logic of this package
*/
//========================== Matrix ========================== 
    
    // Transformation matrix
    function Transform($kriteria)
	{
		$hasil = array();
		for ($i=0; $i < sizeof($kriteria) ; $i++) { 
			for ($j=0; $j < sizeof($kriteria) ; $j++) { 
				$hasil[$i][$j] = $kriteria[$i]/$kriteria[$j];
			}
		}
		return $hasil;
	}

    // Matrix Squaring
    function Square($matriks)
    {
		$hasil = array();
		for ($i=0; $i < sizeof($matriks) ; $i++) { 
			for ($j=0; $j < sizeof($matriks) ; $j++) {
				$simpan = 0; 
				for ($k=0; $k < sizeof($matriks) ; $k++) { 
					$simpan += $matriks[$i][$k] * $matriks[$k][$j];
				}
				$hasil[$i][$j] = $simpan;
			}
		}
		return $hasil;
	}

	// The Sum Of Metric Lines
	function SumLine($matriks)
	{
		$hasil = array();
		for ($i=0; $i < sizeof($matriks); $i++) { 
			$tampung = 0;
			for ($j=0; $j < sizeof($matriks); $j++) { 
				$tampung += $matriks[$i][$j];
			}
			$hasil[$i]=$tampung;
		}

		$total=0;
		for ($k=0; $k < sizeof($hasil) ; $k++) { 
			$total += $hasil[$k];
		}
		$hasil[$k] = $total;
		return $hasil;
	}

	// Normalization Matrix
	function Normalization($matriks)
	{
		$hasil = array();
		$pembagi = $matriks[sizeof($matriks)-1];
		$tampung = 0;
		for ($i=0; $i < sizeof($matriks); $i++) { 
			$hasil[$i] = $matriks[$i]/$pembagi; 
		}
		return $hasil;
	}

	// Times the eigen vector
	function TimesEigen($a,$b){
		$hasil = array();
		for ($i=0; $i < sizeof($a) ; $i++) { 
			for ($j=0; $j < sizeof($b) ; $j++) {
				$simpan = 0; 
				for ($k=0; $k < sizeof($a) ; $k++) { 
					$simpan += $a[$i][$k] * $b[$k][0];
				}
				$hasil[$i][0] = $simpan;
			}
		}
		return $hasil;
	}
//==========================  End Of Matrix ========================== 

}
