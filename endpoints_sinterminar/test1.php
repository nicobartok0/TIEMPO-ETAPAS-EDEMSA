<?php


$query = "select '>=100' , 
decode (d.cod_depto,1, 'NORTE',
							3,'NORTE',
							4,'NORTE',
							5,'NORTE',
							6,'NORTE',
							14,'NORTE',
							10,'CENTRO',
							11,'CENTRO',
							12,'CENTRO',
							16,'SUR',
							2,'SUR',
							18,'NORTE',
							17,'NORTE',
							21,'SUR',
							23,'NORTE',
							24,'NORTE','NO EXISTE') AS zona	,
d.nom_depto as DEPTO,
decode(s.cod_Tar, 'ERU','T1',
						'EGE','T1',
						'ELP', 'ALP', 'T2') AS TAR,
 e.num_exp, e.f_sol, T.DESC_TIPO, f.f_actual  , a.f_actual , round(contar_dias_habiles(f.f_actual, a.f_actual)) as tiempo
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
select '<100' , 
decode (d.cod_depto,1, 'NORTE',
							3,'NORTE',
							4,'NORTE',
							5,'NORTE',
							6,'NORTE',
							14,'NORTE',
							10,'CENTRO',
							11,'CENTRO',
							12,'CENTRO',
							16,'SUR',
							2,'SUR',
							18,'NORTE',
							17,'NORTE',
							21,'SUR',
							23,'NORTE',
							24,'NORTE','NO EXISTE') AS zona	,
d.nom_depto as DEPTO,
decode(s.cod_Tar, 'ERU','T1',
						'EGE','T1',
						'ELP', 'ALP', 'T2') AS TAR,
 e.num_exp, e.f_sol, T.DESC_TIPO, f.f_actual  , a.f_actual , round(contar_dias_habiles(f.f_actual, a.f_actual)) as tiempo
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

$total3 = count($result3);

API::returnJSON([
    "success" => true,
    "message" => "aca andamos hermanito",
    "result" => $total3
]);
