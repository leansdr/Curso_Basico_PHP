<?php


$cidades = [
    'Brasil' => [
        'São Paulo' => ['Guarulhos', 'São Paulo', 'Cotia', 'Santo Andre'],
        'Minas Gerais' => ['Montes Claros', 'Belo Horizonte', 'Diamantina']
    ],
    'Argentina' => [
        'Bueno Aires' => ['Tigre', 'La Plata', 'Mar Del Plata', 'San Isidro'],
        'Mendoza' => ['Maipu', 'Puente del Inca', 'San Rafael', 'Las Heras'],
    ],
    'Paraguai' => [
        'Cidade do Leste' => ['Minga Guazu', 'Hernandarias', 'Presidente Franco'],
        'Assunção' => ['San Lorenzo', 'Lambaré', 'San Antonio'],
    ]
];


echo $cidades['Brasil']['São Paulo'][0]; # Guarulhos
echo '<br>';
echo $cidades['Brasil']['Minas Gerais'][0]; # Belo Horizonte
echo '<br>';
echo $cidades['Brasil']['São Paulo'][3];
echo '<br>';
echo $cidades['Argentina']['Mendoza'][1];
echo '<br>';
echo $cidades['Paraguai']['Assunção'][2];
echo '<br>';
print_r($cidades);