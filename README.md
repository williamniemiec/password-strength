# Pass Strength (HTML plugin)
The project is a HTML plugin that aims to detect the password strength, preventing to create a password outside the specified standards.
<hr />
O projeto é um plugin para HTML que consiste em um mecanismo de detecção de força de senha, impedindo que seja criada uma senha fora dos padrões especificados.

## Images (Imagens)
#### Password = ''
![Password = ''](https://github.com/williamniemiec/pass_strength/blob/master/images/noPass.png?raw=true)
#### Password = 'test1'
![Password = 'test1'](https://github.com/williamniemiec/pass_strength/blob/master/images/pass_test1.png?raw=true)
#### Password = 'test1234'
![Password = 'test1234'](https://github.com/williamniemiec/pass_strength/blob/master/images/pass_test1234.png?raw=true)
#### Password = 'test1234@'
![Password = 'test1234@'](https://github.com/williamniemiec/pass_strength/blob/master/images/pass_test1234@.png?raw=true)
#### Password = 'test1234@A'
![Senha = 'test1234@A'](https://github.com/williamniemiec/pass_strength/blob/master/images/pass_test1234@A.png?raw=true)

## Password standards (Padrões exigidos na senha)
To a password to be accepted, it must meet the following standards:
-   To have a minimum specified length
-   To have numbers and letters
-   To have special caracters
-   To have uppercase and lowercase letters

<hr />

Para uma senha ser aceita, ela deverá atender aos seguintes critérios:
-   Conter um tamanho mínimo especificado
-   Conter Numeros e caracteres
-   Conter caracteres especiais
-   Conter letras maiúsculas e minúsculas

## How to use (Como usar)
- Add class 'pass_input' in password input tag
- Add after this tag a div tag with id='pass_strength_box'
- Inside this tag must have three blocks:
	- Header<br />
		`<h5 class='pass_strength_header'>Header text</h5>`
	- Progress bar<br />
		`<div class='progress'>`<br />
		&nbsp;&nbsp;&nbsp;&nbsp;`<div class='pass_strength_bar'>`<br />
  `</div>           	  </div>`<br />
	- Requirements list<br />
`<ul class='pass_strength'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<li id='pass_length' data-length='MINIMUM_CARACTERS'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`Password length (minimum: MINIMUM_CARACTERS caracters)`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'></span>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`</li>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<li id='pass_numCaract'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`Numbers and Caracters`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'></span>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`</li>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<li id='pass_specCaract'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`Special caracters`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'></span>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`</li>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<li id='pass_ulCaract'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`Uppercase and lowercase letters`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'></span>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`</li>`<br />
`</ul>`<br />
- Exchange <b>MINIMUM_CARACTERS</b> to the minimum password length
- Finally, add class 'submit' at the submit input tag

<hr />

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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'></span>`<br />
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

## Requirements (Requisitos)
- Bootstrap 4
- jQuery
- Font awesome (for the icons / para os ícones)

## Project files (Arquivos do projeto)
|File | Type | Description
|------- | --- | ----
|example | Directory | Contains a HTML example to test the plugin in action
|images | Directory | Contains plugin images in action
|requisites | Directory | Contains the requirement files for the plugin to work
|src | Directory | Contains the plugin source files
| src/ps_style.css | File | Contains the plugin stylesheet
| src/ps_script.js | File | Contains the plugin source

<hr />

|Arquivo | Tipo | Descrição
|------- | --- | ----
|example | Diretório | Contém um exemplo HTML para testar o funcionamento do plugin
|images | Diretório | Contém imagens do plugin
|requisites | Diretório | Contém arquivos que são requisitos para o funcionamento do plugin
|src | Diretório | Contém arquivo fonte do plugin
| src/ps_style.css | Arquivo | Contém estilo usado no plugin
| src/ps_script.js | Arquivo | Contém script do plugin
