# Pass Strength (HTML plugin)
O projeto é um plugin para html que consiste em um mecanismo de detecção de força de senha, impedindo que seja criada uma senha fora dos padrões especificados.

## Imagens
#### Senha = ''
![Senha = ''](https://github.com/williamniemiec/pass_strength/blob/master/images/noPass.png?raw=true)
#### Senha = 'teste1'
![Senha = 'teste1'](https://github.com/williamniemiec/pass_strength/blob/master/images/pass_teste1.png?raw=true)
#### Senha = 'teste123'
![Senha = 'teste123'](https://github.com/williamniemiec/pass_strength/blob/master/images/pass_teste123.png?raw=true)
#### Senha = 'teste123@'
![Senha = 'teste123@'](https://github.com/williamniemiec/pass_strength/blob/master/images/pass_teste123@.png?raw=true)
#### Senha = 'teste123@A'
![Senha = 'teste123@A'](https://github.com/williamniemiec/pass_strength/blob/master/images/pass_teste123@A.png?raw=true)

## Padrões exigidos na senha
Para uma senha ser aceita, ela deverá atender aos seguintes critérios:
-   Conter um tamanho mínimo especificado
-   Conter Numeros e caracteres
-   Conter caracteres especiais
-   Conter letras maiúsculas e minúsculas

## Como usar
- Colocar na tag que contém o input da senha a classe 'pass_input'
- Adicionar após essa tag uma div com id='pass_strength_box'
- Dentro dessa div deve haver três blocos:
	- Cabeçalho<br />
		`<h5 class='pass_strength_header'>Texto do cabeçalho</h5>`
	- Barra de progresso<br />
		`<div class='progress'>`<br />
		&nbsp;&nbsp;&nbsp;&nbsp;`<div class='pass_strength_bar'>`<br />
  `</div>           	  </div>`<br />
	- Lista de requisitos<br />
`<ul class='pass_strength'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<li id='pass_length' data-length='NUM_MIN_CARACTERES'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`Tamanho da senha (no mínimo NUM_MIN_CARACTERES caracteres)`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'>&nbsp;&nbsp;&nbsp;&nbsp;</span>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`</li>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<li id='pass_numCaract'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`Numeros e caracteres`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'></span>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`</li>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<li id='pass_specCaract'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`Caracteres especiais`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'></span>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`</li>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<li id='pass_ulCaract'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`Letras maiúsculas e minúsculas`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'></span>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`</li>`<br />
`</ul>`<br />
- Substituir <b>NUM_MIN_CARACTERES</b> pelo número mínimo de caracteres que uma senha deve ter
- Por fim, no input do submit, add classe 'submit'

## Requisitos
- Bootstrap 4
- jQuery
- Font awesome (para ícones)

OBS: Não foi testado com bootstrap 3

## Arquivos do projeto
|Arquivo | Tipo | Descrição
|------- | --- | ----
| ps_style.css | File | Contém estilo usado no plugin
|ps_script.js | File | Contém script do plugin
|requisites | Directory | Contém arquivos que são requisitos para o funcionamento do plugin
