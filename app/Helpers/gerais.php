<?php

if (!function_exists('mascara')) {
    function mascara($valor, $maskara)
    {
        $maskared = '';
        $k        = 0;
        for ($i = 0; $i <= strlen($maskara) - 1; $i++) {
            if ($maskara[$i] == '#') {
                if (isset($valor[$k])) {
                    $maskared .= $valor[$k++];
                }
            } else {
                if (isset($maskara[$i])) {
                    $maskared .= $maskara[$i];
                }
            }
        }
        return $maskared;
    }
}

if (! function_exists('estados')) {
    function estados()
    {
        return [
            'AC'=>'Acre',
            'AL'=>'Alagoas',
            'AP'=>'Amapá',
            'AM'=>'Amazonas',
            'BA'=>'Bahia',
            'CE'=>'Ceará',
            'DF'=>'Distrito Federal',
            'ES'=>'Espírito Santo',
            'GO'=>'Goiás',
            'MA'=>'Maranhão',
            'MT'=>'Mato Grosso',
            'MS'=>'Mato Grosso do Sul',
            'MG'=>'Minas Gerais',
            'PA'=>'Pará',
            'PB'=>'Paraíba',
            'PR'=>'Paraná',
            'PE'=>'Pernambuco',
            'PI'=>'Piauí',
            'RJ'=>'Rio de Janeiro',
            'RN'=>'Rio Grande do Norte',
            'RS'=>'Rio Grande do Sul',
            'RO'=>'Rondônia',
            'RR'=>'Roraima',
            'SC'=>'Santa Catarina',
            'SP'=>'São Paulo',
            'SE'=>'Sergipe',
            'TO'=>'Tocantins'
        ];
    }
}
