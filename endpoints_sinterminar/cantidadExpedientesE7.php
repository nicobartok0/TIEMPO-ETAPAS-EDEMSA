<?php

$query = "select  'pot>100' as pot,
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
and a.est_act = 'AC523' 
and e.f_sol >='20210101'
and e.num_exp = f.num_exp 
and f.est_act = 'AC521'
union
select  '<100' as pot , 
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
and a.est_act = 'AC523' 
and e.f_sol >='20210101'
and e.num_exp = f.num_exp 
and f.est_act = 'AC521'
and e.num_exp='P11092019090064'
";

$result = OracleDB::getItems(
                $query,
                [],
                true,
                "ocl_open_produccion"
);

$total = count($result);

API::returnJSON([
    "success" => true,
    "message" => "aca andamos hermanito",
    "result" => $total
]);
