<?php


$query = "select
'pot>100' as pot,
round(contar_dias_habiles(f.f_actual, a.f_actual)) as tiempo
from expedientes e, actividades a, actividades f, tipos t, sumcon s, fincas fl, callejero cas, deptos d
where d.cod_depto=cas.cod_depto
and cas.cod_calle=fl.cod_calle
and fl.nif=s.nif
and s.nis_Rad=e.nis_rad
AND (E.POT_PUNTA / 1000) >= 100
and e.num_exp = a.num_exp 
and t.tipo=e.tip_solic
and e.tip_solic in ('SL026','SL036','SL071') 
and a.est_act = 'AC180' 
and e.f_sol >='20210101'
and e.num_exp = f.num_exp 
and f.est_act = 'AC507' 
union 
select '<100' as pot , 
round(contar_dias_habiles(f.f_actual, a.f_actual)) as tiempo
from expedientes e, actividades a, actividades f, tipos t, sumcon s, fincas fl, callejero cas, deptos d
where d.cod_depto=cas.cod_depto
and cas.cod_calle=fl.cod_calle
and fl.nif=s.nif
and s.nis_Rad=e.nis_rad
AND (E.POT_PUNTA / 1000) < 100
and e.num_exp = a.num_exp 
and t.tipo=e.tip_solic
and e.tip_solic in ('SL026','SL036','SL071') 
and a.est_act = 'AC180' 
and e.f_sol >='20210101'
and e.num_exp = f.num_exp 
and f.est_act = 'AC507' ";


$result3 = OracleDB::getItems(
                $query,
                [],
                true,
                "ocl_open_produccion"
);

$resultado= [
	"<100"=>[
		"dias"=> 0,
		"cantidad"=>0,
		"promedio"=>0
	],
	">100"=>[
		"dias"=> 0,
		"cantidad"=>0,
		"promedio"=>0
	],
		
];

foreach ($result3 as $item) {
	if($item->POT=='<100'){
		$cant_act=$resultado['<100']['cantidad']+1;
		$resultado['<100']['cantidad']=$cant_act;
		$resultado['<100']['dias']+= $item->TIEMPO;
	}
	else{
		$cant_act=$resultado['>100']['cantidad']+1;
		$resultado['>100']['cantidad']=$cant_act;
		$resultado['>100']['dias']+= $item->TIEMPO;

	}
}
$resultado['<100']['promedio']= $resultado['<100']['dias']/$resultado['<100']['cantidad'];
$resultado['>100']['promedio']= $resultado['>100']['dias']/$resultado['>100']['cantidad'];


API::returnJSON([
    "success" => true,
    "message" => "aca andamos hermanito",
    "result" => $resultado
]);
