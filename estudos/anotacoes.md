# Anotações brabas

Essas são minhas anotações sobre o meu estudo sobre PHP que está ocorrendo principalmente através do Curso em Video.

## Disclaimer
Anoto as coisas do jeito que entendo. Caso tenha algo errado, por favor, abra uma issue informando o problema. Irei agradecer muito :)

## Sumário

* [Descobertas](#descobertas)
    * [Comandos](#comandos)
    * [Definições](#definições)
* [O que é preciso para desenvolver em PHP?](#o-que-é-preciso-para-desenvolver-em-php)
* [Tempo com php](#tempo-com-php)
* [Variáveis e constantes](#variáveis-e-constantes)
    * [Observações](#observações)
* [Tipos primitivos](#tipos-primitivos)
    * [Como testar o tipo primitivo](#como-testar-o-tipo-primitivo)
    * [Declarando o tipo de uma variável](#declarando-o-tipo-de-uma-variável)
    * [Observações](#observac3a7c3b5es-1)
* [Manipulação de strings](#manipulação-de-strings)
    * [Tipos de string](#tipos-de-strings)
    * [Sequências de escape](#sequências-de-escape)
    * [Observações](#observac3a7c3b5es-2)
* [Formulários com PHP](#formulários-com-php)
    * [Observações](#observac3a7c3b5es-3)
* [Funções aritméticas](#funções-aritméticas)
    * [Observações](#observac3a7c3b5es-4)
* [Números aleatórios com PHP](#números-aleatórios-com-php)
    * [Observações](#observac3a7c3b5es-5)
* [Moedas com PHP](#moedas-com-php)

**(ToDo)**

## Descobertas
"Descobertas" que fiz durante meus estudos/pesquisas, incluindo funções, curiosidades etc.

### Comandos

* ``number_format(float $number, int $decimals)`` \
    Serve para formatar números de diversas formas, como por exemplo, diminuir a quantidade de casas decimais. \
    Fonte: [Documentação do PHP](https://www.php.net/manual/pt_BR/function.number-format.php)

* ``rand(int $min, int $max)``\
    Serve para gerar números aleatórios de acordo com o intervalo indicado. Sem nenhum atributo, essa função gera um número de 0 a ``getrandmax()``(que serve para saber o valor máximo). \
    Veja [números aleatórios com php](#números-aleatórios-com-php) para mais informações. \
    Fonte: [Documentação do PHP](https://www.php.net/manual/pt_BR/function.rand.php)
    
* ``str_replace()`` \
    Serve para mudar todas ocorrências indicadas em uma string com outra string. Ex:
    ```php
    $string = "Hello, world!";
    str_repla("World", "Lune!"); 
    echo $string; //--> Hello, Lune!
    ```
    Fonte: [Documentação do PHP](https://www.php.net/manual/pt_BR/function.str-replace.php)

* ``file_get_contents($string $filename, bool $user_include_path, ...)`` \
    Serve para ler um arquivo e colocá-lo dentro de uma string. (*Revisar) Sendo muito útil para usar com apis simples, onde devolvem um json. \
    Fonte [Documentação do PHP](https://www.php.net/manual/en/function.file-get-contents.php)

* ``json_decode($string $json, ?bool $associative = null)`` \
    Serve para decodificar um json em um objeto do php. Observação, quando ``$associative`` receber ``true`` os json serão devolvidos como arrays, caso seja ``false``, serão devolvidos como objetos. \
    Fonte: [Documentação do PHP](https://www.php.net/manual/pt_BR/function.json-decode.php)

* ``strlen($string)`` \
    Retorna o número de caracteres da string. \

* ``substr($string, $int, $int)`` \
    Serve para mostrar os elementos da strin entre o intervalo indicado. Ex: \
    ```php
    substr("Olá!", 0, 1) //--> Ol
    ```
* ``strtoupper($string)`` \
    Transforma todas as letras da sring em maiúsculas.

* ``strtolower($string)`` \
    Tranforma todas as letras da string em minúsculas

* ``str_replace($search, $replace, $subject)`` \
    Substitui uma letra ou string por outra. Ex:
    ```php
    str_replace("Mundo", "World", "Olá Mundo!") //--> Olá World!
    ```

* ``strpos($string, $search)`` \
    Devolve a posição da busca na string indicada.

* ``str_contains($string, $search)`` \
    Retorna ``true`` caso haja resultado para a busca dentro da string, caso contrário, retorna ``false``.
    

* `str_starts_with($string, $search)` \
    Rertona ``true`` caso a string indicada comece com a busca indicada, caso contrário, retorna ``false``.

* ``str_ends_with($string, $search)`` \
    Retorna ``true`` caso a string indicada termine com a busca indicada, caso contrário, retorna ``false``.


### Definições
* ``Query String`` \
    É uma solicitação. É o nome que se dá à URL quando há parâmetros. 


## O que é preciso para desenvolver em PHP?
Para desenvolver em php é preciso de um servidor onde tenha:
* Apache (ou outro) \
    (*Revisar depois) O Apache é um sistema que gerencia um servidor. Ele é responsável por entregar os arquivos conforme o client-side os pediu.
* MySQL (ou outro banco de dados)
* Interpretador PHP

## Tempo com php

* Data
    ```php
    date("d/M/Y");
    /* mostra a data, sendo:
        d = dia em número
        D = dia da semana (ex: tuesday)
        M = Mês
        Y = Ano
    */
    ```
* Hora
    ```php
    date("G:i:s");
    /* Mostra a hora, sendo:
        G =  hora
        i = minuto
        s =  segundo
    */
    ```
Por padrão o php usa o fuso-horário CET. Para mudar para o brasileiro, usa-se a função:

```php
date_default_timezone_set("America/Sao_Paulo");
```
## Variáveis e constantes
 No PHP, para criar uma variável, utiliza-se um cifrão como declaração. Ex:
 ```php
 $nome = "Murilo";
 ```
Para criar uma constante, utiliza-se a declaração ``const``, assim como no javascript. Ex:
```php
const PAIS = "Brasil"
```

### Observações: 
* **Variáveis** sempre terão um **cifrão ($)** no inicio;
* Para **variáveis**, dê preferência a letras **minúsculas**; 
* Para **constantes**, dê preferência a letras **maiúsculas**; 
* Use **SNAKE_CASE** para nomear **constantes**
* Use **camelCase** para **métodos** e **atributos**; 

## Tipos primitivos
No PHP temos 3 classes de tipos primitivos, sendo eles:
* **Escalares**: \
    Valores já conhecidos, como: \
    **string**; \
    **int** ou **integer**; \
    **float** ou **double** ou ~~**real**~~; \
    **boolean** ou **bool**.

* **Compostos**: \
    Há apenas 2: \
    **array**; \
    **object**.

* **Especiais**: \
    **null**; \
    **resouce**; \
    **callabe**; \
    **mixed**.

*o tipo especial **mixed** surgiu a partir da versão 8 do PHP e serve para representar todos os tipos primitivos existentes

### Como testar o tipo primitivo?
Usa-se a função ``var_dump()`` para testar o tipo do valor de uma variável. Ex: \
```php
$valor = 300;
var_dump($valor); //--> int(300)
```

### Declarando o tipo de uma variável
No PHP não há uma forte tipagem, mas isso é possível declarando tipo entre aspas antes do valor. Ex:

```php
// o valor que seria considerado como string agora é lido como inteiro.
$num = (int) "950";
var_dump($num); //--> int(950)
```

### Observações:
* Representações numéricas: \
    0x = hexadecimal \
    0b = binário \
    0 = octal

* Sempre que usar potência o número será considerado como float.

* Para um **echo** (ou **print**) o valor **boolean** **true** é mostrado como **1**, já o valor **false** é mostrado como **nada**.

## Manipulação de strings

### Tipos de strings

As strings podem ser dividida em 4 formatos. Sendo eles:

* **Double quoted** \
    É um tipo de string que utiliza aspas duplas. \
    Nela, o php também **interpreta o conteúdo**. Ex:
    ```php
    echo "PHP \u{1F418}" //--> PHP 🐘
    ```
    Também é possível concatenar a string com outra utilizando um ponto. Ex:
    ```php
    echo "string " . "legal"; //--> string legal
    ```

* **Single Quoted** \
    É o tipo de string que utiliza aspas simples. Possui a mesma propiedade das strings com aspas duplas, porém **não interpreta o conteúdo**.

* **Heredoc** ( **Nem o criador sabe que existe** )\
    É uma string de várias linhas que aceita **pré formatação**. Ex:
    ```php
    echo <<< IDENTIFICADOR
        String
            Com 
                Pré
                    Formatação.
    IDENTIFICADOR;
    ```
* **Nowdoc** 
    Tem a mesma sintáxe do formato ``heredoc``, porém não **interpreta o conteúdo**.

### Sequências de escape
(*Revisar depois) Servem como uma forma de **formatar** strings. Ex:

* \n ( Nova linha );
* \t ( Sinal de tabulação (tecla tab) );
* \\\ ( Barra invertida );
* \$ ( Cifrão );
* \u{} ( Emojis )


### observações:
* Não é possível utilizar aspas duplas dentro de aspas duplas e virce-versa. Para isso, utilizamos a seguinte sintáxe:
    ```php
    echo "Nome \"Apelido\" Sobrenome"; //--> Nome "Apelido" Sobrenome
    ```

## Formulários com PHP
É possível integrar dados de formulários no PHP, para isso temos de passar os dados através do método ``GET`` ou ``POST`` na tag ``</form>`` no HTML. \
Ex:

```html
<!-- HTML -->
<form action="index.php" method="get">
    <!-- Sendo o atributo 'name' o que o php irá utilizar -->
    <input type="text" name="nome" id="idnome">
    [...]
</form>
```
Já no PHP, realizamos a integração da seguinte forma:

```php
<?php
    // Ao executar var_dump($_REQUEST) vemos que se trata de uma array por onde os dados são transmitidos. Ex: array(1) { ["nome"]=> string(6) "Murilo"}.

    $nome = $_REQUEST["nome"]; // É utilizado o mesmo nome do atributo 'name' usado no input html para indicar o dado.

    echo $nome; //--> Nome fornecido através do input.
?>
```
Podemos utilizar outras super globais para conseguir os dados, como por exemplo:

* $_POST
* $_GET
* $_REQUEST\
    Essa sendo a junção dos métodos: ``$_GET``, ``$_POST`` e ``$_COOKIES``.

### Observações:
Caso não seja transmitido nenhum dado através do formulário, será mostrado um erro de sintáxe. \
Para resolver, podemos utilizar os operadores de **coalescencia nula**, adicionados no php 8. Ex:

```php
// caso não seja transmitido nenhum dado através de 'name', será usado a string "sem nome no lugar".
$nome = $_REQUEST["nome"] ?? "sem nome";
```
## Funções aritméticas
No PHP há várias funções aritméticas. Temos como exemplo:

* **abs()** \
    que retorna o valor absoluto de um número.
* **base_convert()** \
    Converte a base dos números. Pode converter da base decimal para hexa ou octa, por exemplo.
* **ceil()**, **floor()**, **round()** \
    São funções de arredondamento. Elas podem arredondar para cima, para baixo e aritmeticamente, respectivamente.
* **hypot()** \
    Calcula a hipotenusa.
* **intdiv()** \
    Faz a divisão inteira.
* **min()**, **max()** \
    Mostra o valor mínimo e máximo de uma sequência.
* **pi()** \
    Mostra o valor de pi.
* **pow()** \
    Realiza o cálculo de uma potência. (*checar observações)
* **sin()**, **cos()**, **tan()** \
    Servem para calcular o seno, corseno e tangente, respectivamente.
* **sqrt()**
    Realiza a raiz quadrada de um número. (*checar observações)


### Observações
* Até um tempo atrás não havia uma expressão para potência no php, então era usado a função ``pow()``, que agora pode ser substituído pelos dois asteríscos (``**``). **Qual a diferença então?** Usando a função, perde-se a ordem de precedência.

* Alternativamente a função ``sqrt()`` é possível realizar uma raiz quadrada utilizando a expressão de potência. Ex:
    ```php
    // raiz quadrada
    27 ** (1/2) //--> 9

    // raiz cúbica 
    27 ** (1/3) //--> 3
    ```
    **Qual a diferença?** Utilizando esse método alternativo é possível realizar o cálculo raiz cúbica.

## Números aleatórios com PHP
No php há diversas formas de gerar números aleatórios. Delas, temos as seguintes funções com suas respectivas características:

* ``rand(int $min, int $max)``\
    Serve para gerar números aleatórios de acordo com o intervalo indicado. Sem nenhum atributo, essa função gera um número de 0 a ``getrandmax()`` (que serve para saber o valor máximo). A partir da versão 7.1 a função se tornou um alias para a função ``mt_rand()`` (*Ver observações)\
    Fonte: [Documentação do PHP](https://www.php.net/manual/pt_BR/function.rand.php).
 * ``mt_rand(int $min, int $max)`` \
    É uma versão atualizada da função ``rand()```antes das versões 7.1 do PHP. Utilizando um algorítmo diferente da sua antecessora, é capaz de gerar números 4 vezes mais rápido. (*Ver observações) \
    Fonte: [Documentação do PHP](https://www.php.net/manual/pt_BR/function.mt-rand.php).
* ``int_rand()`` \
    Gerar números criptograficamente seguros. Porém, em uma velocidade muito baixa.

### Observações
Em versões anteriores a 7.1 do php, a função ``rand()`` utilizava o algorítmo **Linear Congrential Generator**, de meados de 1951. Já nas versões atuais, utiliza o algorítmo **Mersenne Twister**, de 1997, sendo mais rápido e mais seguro. Alternativamente, pode ser utilizado a função ``mt_rand()``, que usa por padrão o novo algorítmo.

## Moedas com PHP
(*Revisar depois)
É possível mostrar corretamente moedas de acordo com a língua do usuário através utilizando a classe [``NumberFormatter``](https://www.php.net/manual/en/class.numberformatter.php), utilizando as funções ``numfmt_create()`` e ``numfmt_format_currency()``. Ex:
```php
$valor = 1000;

$padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

echo "O valor no Brasil é " . numfmt_format_currency($padrão, $valor, "BRL" ); //--> R$ 1.000,00

echo "O valor nos EUA é " . numfmt_format_currency($padrão, $valor, "USD") //--> US$1.000,00
```

(toDo)

### Observações
Essa função pode não funcionar em um servidor local utilizando o xampp, por exemplo. Sendo necessário fazer alguns ajustes no servidor. (toDo)

## Superglobais
Superglobais são variáveis pré-definidas que estão disponíveis em todo o escopo do script. Temos como exemplo:

* ``$_GET``
* ``$_POST``
* ``$_REQUEST``
* ``$_COOKIES``
* ``$_FILES`` \
    Serve para pegar os dados de um arquivo enviado pelo usuário.
* ``$_SESSION`` \
    Utiliza variáveis de sessão (*Revisar)
* ``$_ENV``
    Utiliza variáveis do servidor (*Revisar)
* ``$_SERVER``
* ``$GLOBALS``
    Mostra o dados de todas as outras globais.


## Arrays
A sintáxe de arrays funcionam de forma parecida ao javascript (com chaves []). \
Para atribuir um valor a um indice não sequencial, podemos utilizar a seguinte sintáxe:
```php
$dados = [ 
    10 => 1000,
    20 => 2000,
    30 => 3000
];

echo $dados[10]; //--> 1000
```

Podemos adicionar um valor a última posição de um array utilizando a seguinte sintáxe, pois sem um indice, o php considerará o último (30) + 1 (= 31):
```php
$dados[] = 4000; //--> $dados[31]
// assim o array $dados receberá o valor 4000 na última posição
```
Alternativamente é possível adicionar um valor a última posição de um array com uma função:
```php
array_push($dados, 5000);
```

### Arrays associativos
Ao contrário dos arrays "comums", os arrays associativos possuem indices como strings. Por exemplo:
```php
$dados = [
    'nome' => 'Ana',
    'email' => 'ana@email.com',
    'nacionalidade' => 'Brasil',
    'telefone' => '5511912345678'
]
```
E como faz para mostrar um valor? Para isso utilizamos a seguinte sintáxe:
```php
echo $dados['nome'] //--> Ana
echo $dados['nacionalidade'] //--> Brasil
```
### Arrays mistos (nem o criador sabe que existe)
É possível criar um array que combina indices associativos com indices numéricos. Ex:
```php
$dados = [
    0 => 10,
    'nome' => 'Ana',
    'email' => 'ana@email.com',
    10 => 1000,
    11 => 'string legal'
]
```
### Arrays multidimensionais
São arrays onde seus valores podem ser outros arrays. Por exemplo:
```php
$dados = [
    [
        10, //--> 0
        20, //--> 1
        30, //--> 2
        40  //--> 3
    ], //--> 0
    [100, 200, 300, 400], //--> 1
    [1000, 2000, 3000, 4000] //--> 2
]
```
Para apresentar este tipo de array, utilizamos a seguinte sintáxe. Ex:
```php
echo $dados[1][2]; //--> 300
```
Onde o primeiro colchete indica o array principal e o segundo colchete indica o array dentro do indice indicado

#### Arrays multidimensionais associativos
Também é possível utilizar arrays associativos como multidimensionais:
```php
$cidades = [
    'Portugal' => ['Lisboa', 'Porto', 'Coimbra'],
    'Brasil' => ['Teresina', 'Fortaleza', 'Recife']
]
```
E para apresentá-los, utiliza-se a seguinte sintáxe:
```php
echo $cidades['Brasil'][0]; //--> Teresina
```

#### Observação:
Os arrays multidimensionais podem ter mais de duas dimensões.