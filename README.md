# CursoPHP

Esse diretorio refere-se aos arquivos de exercicios do curso da [HCode Treinamentos](https://www.udemy.com/course/curso-php-7-online/) da Udemy

## Variaveis 
Os arquivos de variaveis foram exemplos sobre: 
- Primeiras variaveis;
- Padrão Camelcase e comentarios;
- Isset e unset;
- Concatenação;
- Tipos de variaveis (basicas, compostas e especiais);
- Variaveis pré definidas;
- Escopo de variaveis.

## Operadores
Os arquivos de operadores foram exemplos sobre:
- Operadores de aribuções
- Operadores de Concatenação
- Operadores compostos
- Operadores aritmeticos
- Operadores de comparação
- Novos operadores (Spaceship e Null Coalesce)
- Operadores de incremento e decremento 
- Prioridade de operadores

## String
- Difereça das aspas(Interpolação de variaveis)
- Funções para strings
- unções para manipulação de Strings

## Include e Require
- Inclusão de arquivos com Include e Require
- Inclusão de arquivos com Include once e Require once

## If
- Controle de fluxo
- Operador Ternario

## Switch
- Estrutura do Switch

## For
- Estrutura do For
- Incluindo o For dentro do HTML

## Foreach
- Estrutura do foreach
- Incluindo o Foreach dentro do HTML

## While e Do While
- Estrutura do While
- Função Rand (Para numeros randomicos)
- Estrutura do Do While

## Json
- Convertendo um Array em Json
- COnvertendo um Json em array

## Constante
- Estrutura de constantes
- Conhecendo algumas constantes pre definidas

## Session
- Conhecendo estrutura de sessions
- Criando sessões e destruindo sessões
- Conhecendo IDs de sessões
- Forçando a geração de IDs diferentes comando session_regenerate_id()

## Funções
- Conhecendo funções e rotinas
- Definindo valores para as funções
- Passagem de parametro por valor ou por referencia
- Declaração de paremetros de tipo escalares
- 


### Notas
#### Diferenças de include e require
- Require: Obriga que o arquivo incluido exista e precisa estar funcionando perfeitamente, caso contrario retorna erro fatal
- Include: Tenta executar o codigo caso falte o arquivo consultando arquivos na pasta path
- Include once ou Require Once: Utilizar para evitar erros quando um arquivo é incluido mais de uma vez

#### Diferenças entre Switch e o If
- If: Possibilidade de usar operadores de comparação
- Switch: Usado para casos que o resultado já esta determinado.

### Diferenças entre For, Foreach, While e Do Whilw
- For: Utilizado para contadores, com valores iniciais, finais e incrementos
- Foreach: Utilizado para Array e coleções
- While: Utilizado para qualquer assunto desde que a condição seja verdadeira
- Do While: Executa pelo menos uma vez mesmo a condição sendo falsa.

### Funções 
Funcões necessariamente precisa retornar um valor, caso alguma função não retorne valor é chamado de rotinas
