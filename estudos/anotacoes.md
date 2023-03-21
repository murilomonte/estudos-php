# Anotações brabas

Essas são minhas anotações sobre o meu estudo sobre PHP que está ocorrendo principalmente através do Curso em Video.

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
Por padrão o php usa o fuso-horário CET
para mudar para o brasileiro, usa-se a função:

```php
date_default_timezone_set("America/Sao_Paulo");
```
