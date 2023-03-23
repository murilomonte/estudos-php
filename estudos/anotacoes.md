# Anotações brabas

Essas são minhas anotações sobre o meu estudo sobre PHP que está ocorrendo principalmente através do Curso em Video.

## Disclaimer
Anoto as coisas do jeito que entendo. Caso tenha algo errado, por favor, abra uma issue informando o problema. Irei agradecer muito :)

## Sumário
**(ToDo)**

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
No PHP temos várias funções aritméticas. Temos como exemplo:
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