<?php
include 'temp/head_index.php';
include 'temp/navbar_index.php';
include 'temp/header_index.php';

$conn = mysqli_connect('localhost','root','','vakanty'); 


?>


<table>
…
<tr itemprop=”eduChislen”>
<td itemprop=”eduCode”>Код</td>
<td itemprop=”eduName”> Наименование профессии, специальности, направления подготовки </td>
<td itemprop=”eduLevel”> Уровень образования </td>
<td itemprop=”eduForm”> Форма обучения </td>
<td itemprop=”numberBF”> Численность обучающихся за счет бюджетных ассигнований федерального бюджета </td>
<td itemprop=”numberBR”> Численность обучающихся за счет бюджетов субъектов Российской Федерации </td>
<td itemprop=”numberBM”> Численность обучающихся за счет местных бюджетов</td>
<td itemprop=”numberP”> Численность обучающихся за счет средств физических и (или) юридических лиц </td>
<td itemprop=”numberF”> Численность обучающихся, являющихся иностранными гражданами </td>
</tr>




<!-- …
<tr itemprop=”eduChislen”>
<td itemprop=”eduCode”>Код</td>
<td itemprop=”eduName”> Наименование профессии, специальности, направления подготовки </td>
<td itemprop=”eduLevel”> Уровень образования </td>
<td itemprop=”eduForm”> Форма обучения </td>
<td itemprop=”numberBF”> Численность обучающихся за счет бюджетных ассигнований федерального бюджета </td>
<td itemprop=”numberBR”> Численность обучающихся за счет бюджетов субъектов Российской Федерации </td>
<td itemprop=”numberBM”> Численность обучающихся за счет местных бюджетов</td>
<td itemprop=”numberP”> Численность обучающихся за счет средств физических и (или) юридических лиц </td>
<td itemprop=”numberF”> Численность обучающихся, являющихся иностранными гражданами </td>
</tr> -->
</table>
<?php
include 'temp/footer_index.php';
?>

