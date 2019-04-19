<?php
include('menu.php');
if (isset($_POST['button']))
{
    $action = $_POST['button'];
    switch ($action) {
        case 'Выйти':
            {
                session_destroy();
                header('Location: /site/index.php');  // перенаправление на нужную страницу
                exit();    // прерываем работу скрипта, чтобы забыл о прошлом
                break;
            }
    }
}
?>


<html>
 <head>
  <title>Сайт</title>
  <link rel="shortcut icon" href="notebook.ico">

<link rel='stylesheet' href='style.css'>
 </head>
<body>

<h1 align="center"><i>Учимся писать сайты!</i></h1>

<p align="justify"; style="text-indent: 2%;"> HTML (HyperText Markup Language) — язык разметки (маркировки) гипертекста. Гипертекст своим развитием обязан интернету, хоть и создавался он совсем не для того. HTML дает возможность производить переход от одной части текста к другой, и, что замечательно, эти части могут храниться на совершенно разных компьютерах.</p>

<p align="justify"; style="text-indent: 2%;">CSS (Cascading Style Sheets), или каскадные таблицы стилей, используются для описания внешнего вида документа, написанного языком разметки. Обычно CSS-стили используются для создания и изменения стиля элементов веб-страниц и пользовательских интерфейсов, написанных на языках HTML и XHTML.</p>

<p align="justify"; style="text-indent: 2%;"> PHP – это скриптовый язык, используемый для создания web-страниц. Большинство сайтов, размещенных в сети Интернет, написано с использованием HTML, языка разметки гипертекста. Существенный недостаток HTML – отсутствие динамизма. Эту проблему и призваны решать средства программирования вроде PHP.</p>
<h2 align="center"> Самые полезные теги HTML </h2>

<table border="1" align="center">
		<tr>
			<th rowspan="2">Номер</th>
			<th colspan="2">Теги</th>
		</tr>
		<tr>
			<th>Тег</th>
			<th>Значение</th>
			
		</tr>
		<tr>
			<td>1</td>
			<td>p</td>
			<td rowspan="4">для текста</td>
		</tr>
		<tr>
			<td>2</td>
			<td>a</td>
		</tr>
		<tr>
			<td>3</td>
			<td>b</td>
		</tr>
		<tr>
			<td>4</td>
			<td>i</td>
		</tr>
		<tr>
			<td>5</td>
			<td>table</td>
			<td>таблица</td>
		</tr>
		<tr>
			<td>6</td>
			<td>tr</td>
			<td>ряд таблицы</td>
		</tr>
		<tr>
			<td>7</td>
			<td>td</td>

			<td rowspan="2">ячейки таблицы</td>
		</tr>
		<tr>
			<td>8</td>
			<td>th</td>
		</tr>
</table>

<h3 align="center"> Используемые языки </h3>

<table border="1" align="center">
		<tr>
			<th>HTML</th>
			<th>CSS</th>
			<th>PHP</th>
		</tr>
		<tr>
			<td>Язык разметки</td>
			<td>Каскадные таблицы стилей</td>
			<td>Скриптовый язык</td>
		</tr>
		<tr>
			<td><img align="center" width="100" height="100" alt="HTML" src="HTML5.png"></td>
			<td align="center"><img width="75" height="100" alt="CSS" src="CSS3.png"></td>
			<td align="center"><img width="100" height="100" alt="PHP" src="PHP.png"></td>
		</tr>

</table>

<script src="jquery-3.3.1.min.js"></script>


</body>
</html>
<?php
echo "<br><br><br><br><br><br><br><br>";
include('cellar.php');

?>

