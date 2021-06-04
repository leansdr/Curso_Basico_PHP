<?php

/**
 * 
 *  ARRAYS
 * ===========================
 * Um array (traudzido para portugues é uma matriz) é na realidade uma coleção de valores.
 * Funciona como uma variavel, mas que pode conter muitos valores "arrumados" cada um com o seu espaço.
 * Esse "espaço" é designado por indice do array.
 * 
 * Resumindo, um array é uma coleção constituida por chaves/indices e valores.
 * As chaves/indices podem ser numericos (array numerico) ou strings (array associativo)
 * e podem até coexistir os dois tipos de indices no array.
 * Os valores podem ser de qualquer tipo, inclusive serem outros arrays.
 * 
 * 
 * Exemplos:
 *  */

$valores = array(1, 2, 3, 10, 20, 30);
$nome = array('joão', 'ana', 'carlos');

# a partir do PHP 5.4, passou a ser possivel escrever os arrays de forma mais simplificada

$valores = [1, 2, 3, 10, 20, 30];
$nome = ['joão', 'ana', 'carlos'];

# Estes arrays são de indice numerico.
# Para apresentar um dos seus valores, procedemos da seguinte forma:

echo $valores[0]; # 1
echo $nomes[1]; # ana

# NUNCA ESQUECER QUE OS ARRAYS TEM INDICES DE BASE 0

# não tem obrigatoriedade de ter chaves sequenciais

$dados = [
    10 => 1000,
    20 => 2000,
    30 => 3000
];

# se adicionarmos um novo elemento no final da coleção, ele vai assumiro ultimo indice + 1
$dados[] = 4000; # 31 => 4000

/**
 *  Sempre que queremos apresenar um valor de um array usamos o seu indice.
 *  Da mesma forma, podemos alterar o valor do array usando o seu indice.
 * 
 */

$valores = [10, 20, 30];

$valores[1] = 2000; # $valores = [10,2000,30];

# Podemos tambem ignorar o indice para adicionar um novo elemento ao array

$valores[] = 3000; # valores = [10,2000,30,3000];

# ou de outra forma...
array_push($valores, 5000); # $valores = [10,2000,30,3000,5000];

# para apresentar valores de uma array numa string, podemos fazer da seguinte forma:
echo 'Os valores são: ' . $valores[0] . ' e ' . $valores[1];
# OU
echo "Os valores são: $valores[0] e $valores[1]";

/**
 *   ARRAY ASSOCIATIVO
 * =================================
 *  
 *  Ao contrario dos array numericos, as chaves são do tipo string
 * 
 */

$dados = [
    'A' => 20,
    'B' => 30,
    'C' => 40,
    'D' => 50,
    'E' => 60
];

# OU

$dados = [
    'nome' => 'leandro',
    'email' => 'leandro@gnmail.com',
    'nacionalidade' => 'Brasil',
    'telefone' => '9999-9999'
];

/**
 * Da mesma forma que nos arrays numericos não devem existir duas chaves iguais,
 * nos associativos tambem não.
 * Na apresentação não é gerado nenhum erro. O valor a ser definido é sempre o último.
 * 
 */

$dados = [
    'nome' => 'joão',
    'nome' => 'carlos' # este valor ira sobreescrever o valor de cima
];

echo $dados['nome']; # carlos

/**
 *  ARRAY MISTOS (MIXES ARRAYS)
 * ===================================
 * 
 * É possivel criar um array que combina indices numericos e strings.
 * Embora não seja de necessidade muito frequente, é possivel da seguinte forma:
 * 
 */

$dados = [
    0 => 10,
    'nome' => 'Antônio',
    'apelido' => 'Silva',
    10 => 10000,
    11 => 'Rua de Lisboa',
    12 => 'Portugal'
];

/**
 * Uma estrutura deste tipo é mais complexa de gerir
 * devido a mistura de indices e tipos de dados.
 * 
 * Para apresentar dados do array, procedemos sempre da mesma forma:
 */

echo $dados[0]; # 10
echo $dados['apelido']; #Silva

/**
 *  ARRAYS MULTIDIMENSIONAIS
 * ======================================
 * 
 * São arrays numericos ou associativos cujos valores são outros arrays.
 * Exemplos:
 */

$dados = [
    [10, 20, 30, 40],
    [100, 200, 300, 400],
    [1000, 2000, 3000, 4000]
];

# Neste caso, para apresentar-mos valores deste array:

echo $dados[1][2]; # 300
echo $dados[0][3]; # 30

# Podemos ter arrays multidimensionais associativos:

$cidades = [
    'Portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'Brasil' => ['São Paulo', 'Brasilia', 'Rio de Janeiro'],
    'Espanha' => ['Madrid', 'Barcelona', 'Servilha']
];

echo $cidades['Portugal'][1]; # Porto
echo $cidades['Brasil'][0]; # Sao Paulo
echo $cidade['Espanha'][2]; #Servilha 

# Os arrays podem ter mais que 2 dimensoes.

$cidades = [
    'Brasil' => [
        'São Paulo' => ['Guarulhos', 'São Paulo', 'Cotia', 'Santo Andre'],
        'Minas Gerais' => ['Montes Claros', 'Belo Horizonte', 'Diamantina']
    ]
];

echo $cidades['Brasil']['São Paulo'][0]; # Guarulhos
echo $cidades['Brasil']['Minas Gerais'][1]; # Belo Horizonte