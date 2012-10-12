<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
  <head>
    <title>Encje HTML</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
    body {
        font-family: Verdana, sans-serif;
        margin: 20px;
        text-align: center;            
	background: #e1f4a2;        
    }
    table {
        border-collapse: collapse;
        border: 1px solid black;
        background: #eef9ca;
        margin: 0 auto;
    }
    
    td {
        border: 1px solid black;
        padding: 10px;
    }
    
    th {
        border: 1px solid black;
        padding: 10px;      
	background: black;
	color: white;  
    }
    </style>
  </head>
<body>

<h1>Encje</h1>


<p>
Zestawienie encji z pliku  <em>HTMLsymbol.ent</em> (patrz: <a href="http://www.w3.org/TR/html401/html40.zip">specyfikacja HTML</a>).
</p>


<table>
<tr>
    <th>encja</th>
    <th>encja numeryczna</th>
    <th>znak</th>
</tr>
<?php

$wyr_reg = '/<!ENTITY ([a-zA-Z0-9]+) *CDATA "&(#[0-9]+;)"/';

foreach (file('HTMLlat1.ent') as $l) {
    if (preg_match($wyr_reg, $l, $m)) {
        echo "
            <tr>
                <td><code>&amp;$m[1];</code></td>
                <td><code>&amp;$m[2]</code></td>        
                <td>&$m[1];</td>
            </tr>
        ";                
    }
}
?>
</table>
</body>
</html>

