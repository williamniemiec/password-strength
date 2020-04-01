# Pass Strength (HTML widget)
The project is a HTML widget that detects the password strength, preventing to create a password outside the specified standards.

## Images
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
-   Must have a minimum specified length
-   Must have numbers and letters
-   Must have special caracters
-   Must have uppercase and lowercase letters

## How to use
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
&nbsp;&nbsp;&nbsp;&nbsp;`<li id='pass_length' data-length='MINIMUM_CHARACTERS'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`Password length (minimum: MINIMUM_CHARACTERS characters)`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'></span>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`</li>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<li id='pass_numCharact'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`Numbers and Characters`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'></span>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`</li>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<li id='pass_specCharact'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`Special characters`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'></span>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`</li>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`<li id='pass_ulCharact'>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`Uppercase and lowercase letters`<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;`<span class='pass_strength_icon'></span>`<br />
&nbsp;&nbsp;&nbsp;&nbsp;`</li>`<br />
`</ul>`<br />
- Exchange <b>MINIMUM_CHARACTERS</b> to the minimum password length
- Finally, add class 'submit' at the submit input tag

## Requirements 
- Bootstrap 4
- jQuery
- [Font awesome](https://github.com/williamniemiec/password_strength/tree/master/requirements/css/font-awesome-4.7.0) (for icons)

## Project files
|File | Type | Description
|------- | --- | ----
|example | Directory | Contains a HTML example to test the plugin in action
|images | Directory | Contains plugin images in action
|requisites | Directory | Contains the requirement files for the plugin to work
|src | Directory | Contains the plugin source files
| src/ps_style.css | File | Contains the plugin stylesheet
| src/ps_script.js | File | Contains the plugin source
