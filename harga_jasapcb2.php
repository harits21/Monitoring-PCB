<?php 

$panjang 	= $_POST['panjang'];
$lebar 		= $_POST['lebar'];
$jumlah		= $_POST['jumlah'];
$pcb 		= $_POST['pcb'];
$layer 		= $_POST['layer'];
$ma 		= $_POST['ma'];
$mb 		= $_POST['mb'];
$ss 		= $_POST['ss'];
$desain 	= $_POST['desain'];
$bentuk 	= $_POST['bentuk'];

$panjang=ceil($panjang);
$lebar=ceil($lebar);

//if($layer == 'double') $pcb = 'fr4';

if (($ma=='merah') || ($ma=='biru') || ($ma=='hijau')|| ($ma=='hitam')|| ($ma=='putih')|| ($ma=='kuning')) $ma='yes'; else $ma='no';
if (($mb=='merah') || ($mb=='biru') || ($mb=='hijau')|| ($mb=='hitam')|| ($mb=='putih')|| ($mb=='kuning')) $mb='yes'; else $mb='no';
if (($ss=='hitam') || ($ss=='putih')) $ss='yes'; else $ss='no';

$jasa 				= 160;
$fr2single 			= 120;
$fr4single 			= 170;
$fr4double 			= 210;
$plusmaskingatas 	= 110;
$plusmaskingbawah	= 110;
$plussilscreen 		= 60;
$desainpdf 			= 50;
$plussingle			= 0;
$plusdouble			= 700;
$plusbentuk			= 100;
 
//if ($panjang<10) $panjang=10; 
//if ($lebar<10) $lebar=10;

if($layer == 'single'){
	if($pcb == 'fr2'){
	 	if($ma == 'no' && $mb == 'no' && $ss == 'no'){
			if($desain == 'pdf'){

					$hasiljasa = $jasa * $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					
					if ($bentuk=='nonkotak')	$bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<33000) $total=33000;
					echo $total;
			}
			else{

					$hasiljasa = $jasa * $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					
					if ($bentuk=='nonkotak')	$bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<28000) $total=28000;
					echo $total;
			}
		}

	 	elseif($ma == 'no' && $mb == 'no' && $ss == 'yes'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plussilscreen)* $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak')	$bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<39000) $total=39000;
					echo $total;
			}
			else{

					$hasiljasa = ($jasa + $plussilscreen) * $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					if ($bentuk=='nonkotak')	$bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<34000) $total=34000;
					echo $total;
			}
		}

	 	elseif($ma == 'no' && $mb == 'yes' && $ss == 'no'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plusmaskingbawah) * $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak')	$bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<44000) $total=44000;
					echo $total;
			}
			else{

					$hasiljasa = ($jasa + $plusmaskingbawah)* $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<38000) $total=38000;
					echo $total; 
			}
		}

	 	elseif($ma == 'no' && $mb == 'yes' && $ss == 'yes'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plusmaskingbawah + $plussilscreen + $plussingle) * $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<49000) $total=49000;
					echo $total;
			}
			else{

					$hasiljasa =($jasa + $plusmaskingbawah + $plussilscreen + $plussingle) * $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<45000) $total=45000;
					echo $total;
			}
		}

	 	elseif($ma == 'yes' && $mb == 'no' && $ss == 'no'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plusmaskingatas + $plussingle ) * $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<44000) $total=44000;
					echo $total;
			}
			else{

					$hasiljasa =($jasa + $plusmaskingatas+ $plussingle )* $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<39000) $total=39000; 
					echo $total;
			}
		}
		
		elseif($ma == 'yes' && $mb == 'no' && $ss == 'yes'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plusmaskingatas  + $plussilscreen + $plussingle) * $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<49000) $total=49000;
					echo $total;
			}
			else{

					$hasiljasa =($jasa + $plusmaskingatas  + $plussilscreen + $plussingle)* $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<45000) $total=45000;
					echo $total;
			}
		}
		
		elseif($ma == 'yes' && $mb == 'yes' && $ss == 'no'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plusmaskingatas + $plusmaskingbawah  + $plussingle) * $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<55000) $total=55000;
					echo $total;
			}
			else{

					$hasiljasa =($jasa + $plusmaskingatas + $plusmaskingbawah  + $plussingle)* $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<49000) $total=49000;
					echo $total;
			}
		}
		
		elseif($ma == 'yes' && $mb == 'yes' && $ss == 'yes'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plusmaskingatas + $plusmaskingbawah + $plussilscreen + $plussingle) * $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<61000) $total=61000;
					echo $total;
			}
			else{

					$hasiljasa =($jasa + $plusmaskingatas + $plusmaskingbawah + $plussilscreen + $plussingle)* $panjang * $lebar;
					$hasilpcb  = $fr2single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<56000) $total=56000; 
					echo $total;
			}
		}

	}

	elseif($pcb == 'fr4'){
	 	if($ma == 'no' && $mb == 'no' && $ss == 'no'){
			if($desain == 'pdf'){

					$hasiljasa = $jasa * $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<39000) $total=39000;
					echo $total;
			}
			else{

					$hasiljasa = $jasa * $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<36000) $total=36000;
					echo $total;
			}
		}

	 	elseif($ma == 'no' && $mb == 'no' && $ss == 'yes'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plussilscreen) * $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<45000) $total=45000;
					echo $total;
			}
			else{

					$hasiljasa = ($jasa + $plussilscreen) * $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<40000) $total=40000;
					echo $total;
			}
		}

	 	elseif($ma == 'no' && $mb == 'yes' && $ss == 'no'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plusmaskingbawah) * $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<50000) $total=50000;
					echo $total;
			}
			else{

					$hasiljasa = ($jasa + $plusmaskingbawah) * $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<45000) $total=45000;
					echo $total;
			}
		}

	 	elseif($ma == 'no' && $mb == 'yes' && $ss == 'yes'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plusmaskingbawah + $plussilscreen + $plussingle)* $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<56000) $total=56000;
					echo $total;
			}
			else{

					$hasiljasa = ($jasa + $plusmaskingbawah + $plussilscreen + $plussingle)* $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<51000) $total=51000;
					echo $total;
			}
		}
		
		elseif($ma == 'yes' && $mb == 'no' && $ss == 'no'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plusmaskingatas  +  $plussingle) * $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<60000) $total=60000;
					echo $total; 
			}
			else{

					$hasiljasa = ($jasa + $plusmaskingatas +  $plussingle)* $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<45000) $total=45000;
					echo $total;
			}
		}	
		
		elseif($ma == 'yes' && $mb == 'no' && $ss == 'yes'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plusmaskingatas  + $plussilscreen +  $plussingle) * $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<56000) $total=56000;
					echo $total; 
			}
			else{

					$hasiljasa = ($jasa + $plusmaskingatas + $plussilscreen +  $plussingle)* $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<51000) $total=51000;
					echo $total;
			}
		}	
		
		elseif($ma == 'yes' && $mb == 'yes' && $ss == 'no'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plusmaskingatas + $plusmaskingbawah +  $plussingle) * $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<61000) $total=61000;
					echo $total; 
			}
			else{

					$hasiljasa = ($jasa + $plusmaskingatas + $plusmaskingbawah +  $plussingle)* $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<56000) $total=56000;
					echo $total;
			}
		}	

	 	elseif($ma == 'yes' && $mb == 'yes' && $ss == 'yes'){
			if($desain == 'pdf'){

					$hasiljasa = ($jasa + $plusmaskingatas + $plusmaskingbawah + $plussilscreen + $plussingle) * $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					$hasildesain = $desainpdf * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<67000) $total=67000;
					echo $total;
			}
			else{

					$hasiljasa = ($jasa + $plusmaskingatas + $plusmaskingbawah + $plussilscreen + $plussingle)* $panjang * $lebar;
					$hasilpcb  = $fr4single * $panjang * $lebar;
					if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
					$total = $hasiljasa+$hasilpcb+$bentukpcb;
					$total=$total*$jumlah;
					if ($total<62000) $total=62000;
					echo $total;
			}
		}		
	}
}

elseif($layer == 'double'){
	if($pcb == 'fr2'){
		echo "PCB FR2 double layer tidak tersedia, silahkan pilih FR4 ";
	}
	//elseif( $ma == 'no' || $mb == 'no' || $ss == 'no'){
	//	echo "PCB double layer harus dengan masking dan silkscreen  ";
	//}
	
	elseif($pcb == 'fr4' && $ma == 'no' && $mb == 'no' && $ss == 'no'){
		if($desain == 'pdf'){
			$hasiljasa = ($jasa  + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double  * $panjang * $lebar;
			$hasildesain = $desainpdf * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<97000) $total=97000;
					echo $total;
		}else{
			$hasiljasa = ($jasa  + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double  * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<92000) $total=92000;
					echo $total;
		}
	}
	
	elseif($pcb == 'fr4' && $ma == 'yes' && $mb == 'no' && $ss == 'no'){
		if($desain == 'pdf'){
			$hasiljasa = ($jasa + $plusmaskingatas  + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double  * $panjang * $lebar;
			$hasildesain = $desainpdf * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<108000) $total=108000;
					echo $total;
		}else{
			$hasiljasa = ($jasa + $plusmaskingatas + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double  * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<102000) $total=102000;
					echo $total;
		}
	}
	
	elseif($pcb == 'fr4' && $ma == 'no' && $mb == 'yes' && $ss == 'no'){
		if($desain == 'pdf'){
			$hasiljasa = ($jasa + $plusmaskingbawah + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double * $panjang * $lebar;
			$hasildesain = $desainpdf * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<108000) $total=108000;
					echo $total;
		}else{
			$hasiljasa = ($jasa + $plusmaskingbawah + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<102000) $total=102000;
					echo $total;
		}
	}
	
	elseif($pcb == 'fr4' && $ma == 'no' && $mb == 'no' && $ss == 'yes'){
		if($desain == 'pdf'){
			$hasiljasa = ($jasa + $plussilscreen + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double * $panjang * $lebar;
			$hasildesain = $desainpdf * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<103000) $total=103000;
					echo $total;
		}else{
			$hasiljasa = ($jasa  + $plussilscreen + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<108000) $total=108000;
					echo $total;
		}
	}
	
	elseif($pcb == 'fr4' && $ma == 'yes' && $mb == 'yes' && $ss == 'no'){
		if($desain == 'pdf'){
			$hasiljasa = ($jasa + $plusmaskingatas + $plusmaskingbawah  + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double * $panjang * $lebar;
			$hasildesain = $desainpdf * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<119000) $total=119000;
					echo $total;
		}else{
			$hasiljasa = ($jasa + $plusmaskingatas + $plusmaskingbawah +  $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<114000) $total=114000;
					echo $total;
		}
	}
	
	elseif($pcb == 'fr4' && $ma == 'yes' && $mb == 'no' && $ss == 'yes'){
		if($desain == 'pdf'){
			$hasiljasa = ($jasa + $plusmaskingatas + $plussilscreen + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double * $panjang * $lebar;
			$hasildesain = $desainpdf * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<114000) $total=114000;
					echo $total;
		}else{
			$hasiljasa = ($jasa + $plusmaskingatas + $plussilscreen + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<109000) $total=109000; 
					echo $total;
		}
	}
	
	elseif($pcb == 'fr4' && $ma == 'no' && $mb == 'yes' && $ss == 'yes'){
		if($desain == 'pdf'){
			$hasiljasa = ($jasa +  $plusmaskingbawah + $plussilscreen + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double * $panjang * $lebar;
			$hasildesain = $desainpdf * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<114000) $total=114000;
					echo $total;
		}else{
			$hasiljasa = ($jasa +  $plusmaskingbawah + $plussilscreen + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<109000) $total=109000;
					echo $total;
		}
	}
	
	elseif($pcb == 'fr4' && $ma == 'yes' && $mb == 'yes' && $ss == 'yes'){
		if($desain == 'pdf'){
			$hasiljasa = ($jasa + $plusmaskingatas + $plusmaskingbawah + $plussilscreen + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double * $panjang * $lebar;
			$hasildesain = $desainpdf * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$hasildesain+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<125000) $total=125000;
					echo $total;
		}else{
			$hasiljasa = ($jasa + $plusmaskingatas + $plusmaskingbawah + $plussilscreen + $plusdouble) * $panjang * $lebar;
			$hasilpcb  = $fr4double * $panjang * $lebar;
			if ($bentuk=='nonkotak') $bentukpcb=$plusbentuk * $panjang * $lebar; else $bentukpcb=0;
			$total = $hasiljasa+$hasilpcb+$bentukpcb;
			$total=$total*$jumlah;
					if ($total<120000) $total=120000;
					echo $total;
		}
	}
}

else{
	echo "PCB Tidak Tersedia  ";
}

?>

