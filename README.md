# MunTemplate

#### Simple PHP Template engine
Made by munsiwoo

* How to use?

```php
<?php
include 'MunTemplate.class.php'; # first include class

$MunTemplate = new MunTemplate('./templates/'); # set path

$my_name = 'munsiwoo';
$MunTemplate->render_template('main.html', ['name'=>$my_name]);
```

---

### Statements

* How to use `for statement`?

```html
@mun for($num=0; $num<10; $num++)
	num is @var($num+1)<br>
@endfor
```

* How to use `if statement`?

```html
@mun if(true)
	<h1>TRUE</h1>
@mun else
	<h1>FALSE</h1>
@endif
```

* How to use `variable`?

```html
<p>your name is @var($name)</p>
```

* How to pass `variable`?

```php
<?php
/* index.php */
render_template('main.html', ['var1'=>'1', 'var2'=>array(1,2,3)]);
```

```html
<!-- main.html -->
var1 is @var($var1)<br>
var2 is @var($var2)
```