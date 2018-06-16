# MSMVC Console

Plugin de Console pro meu mini framework MSMVC.

O framework pode ser baixado pelo composer usando o comando:

``` bash
$ composer create-project msouza/msmvc
```

## Já tem o framework e quer adicionar o plugin?

Pra instalar é muito simples, basta rodar este comando no seu projeto:

``` bash
$ composer require msouza/msmvc-console
```


Após adicionar o plugin como dependencia do projeto, é necessário baixar o arquivo **msmvc** para poder rodar os comandos.

Para isso é muito simples, você pode baixar usando o PHP rodando o comando:

``` bash
`php -r "copy('https://gist.githubusercontent.com/matheusviegas/966fc59759c4127894b92d12dedfe4ae/raw/83cbaaf92ec991ba069db9b5e5814b11d51f5075/msmvc', 'msmvc');"`
```
Ou usando o comando **wget**, como mostrado abaixo:

``` bash
wget https://gist.githubusercontent.com/matheusviegas/966fc59759c4127894b92d12dedfe4ae/raw/83cbaaf92ec991ba069db9b5e5814b11d51f5075/msmvc
```

Ou você pode baixar o arquivo pelo navegador mesmo acessando o link abaixo e salvando o arquivo na raiz do seu projeto:

https://gist.githubusercontent.com/matheusviegas/966fc59759c4127894b92d12dedfe4ae/raw/83cbaaf92ec991ba069db9b5e5814b11d51f5075/msmvc


Pronto, agora você ja pode utilizar os comandos na sua console.


## Comandos Disponíveis

``` bash
php msmvc create:helper {NOME DO ARQUIVO} {NOME DA FUNCTION}
php msmvc create:controller {NOME DO CONTROLLER}
php msmvc create:model {NOME DA MODEL}
php msmvc create:view {NOME DA VIEW] --type=html (Opcional - Se não informado, gerará o arquivo de view vazio)
php msmvc create:route {NOME DA ROTA} {CONTROLLER@METODO} {METODO HTTP (Opcional - Aceita get ou post - Default: get)}
```
