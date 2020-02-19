<?php
echo "Синтаксис";
echo "<p>Зад.1  Напишете .php програма, с 
която да отпечатвате вашето име и възраст в подходяща форма/текст</p>";
$name = "Stanislav Ginev";
$age = 38;
echo "име" . "-" . $name, "\n";
echo "възраст" . "-" . $age, "\n";
echo "<p> Зад.2 Отпечатайте в браузъра адреса си</p>";
$adress = "гр. Враца ул. Демокрация 2";
echo $adress;
echo "<p>Променливи</p>";
echo "<p>Зад.1 Декларирайте променливи от 4-те основни типа: 
●
цяло число(integer), 
●
дробно число(double/float), 
●
низ(string) 
●
булев(boolean).  </p>";
$a = 1234;
$b = 23.54;
$c = 'Gosho';
$d = false;
echo gettype($a), "\n";
echo gettype($b), "\n";
echo gettype($c), "\n";
echo gettype($d), "<br/>";
echo "<p>Зад. 2 * Нека a = 5, а b = 10 
–
отпечатайте стойностите на а и b. 
Разменете стойностите на двете променливи и ги отпечатайте 
отново</p>";
$a = 5;
$b = 10;
echo $a . " ";
echo $b . " <br/>";
$a = 10;
$b = 5;
var_dump($a);
var_dump($b);
echo "<p>Променливи и оператори</p> ";
echo "<p>Зад. 1 Отпечатайте името и любимото си занимание с PHP. Предварително 
запазете името и любимото си занимание в променливи.</p>";
$name = "Stanislav";
$hobby = "developing";
echo "<p>Име: $name</p>";
echo "<p>Хоби: $hobby</p>";
echo "<p>Зад. 2 Отпечатайте името и любимото си занимание с PHP. Предварително 
запазете името и любимото си занимание в променливи.</p>";
$name = "Цецо";
$hobby = "drawing";
echo "<p>Име на приятел: $name</p>";
echo "<p>Хоби на приятел: $hobby</p>";
echo "<p>Зад.3 Отпечатайте с PHP. 
I've gone to the store. 
“The harder’s the life, the sweeter’s the song.”  </p>";
echo "I've gone to the store.<p>\"The harder’s the life, the sweeter’s the song.\"</p>";
echo "<p>зад. 4 Трябва да изпратите следното писмо до 
х потребители. Х е число значително по-голямо от 1.
Hi, username! You`ve been approved to take part in the course 1 as a 
lecturer. The course 1 will last for two days. 
-
Потребителите са разделени в 3 групи 
–
student, lecturer, assistant. 
-
Курсовете са 3 вида. 
Всеки участник е ангажиран в курса различно време. Помислете кои части 
от текста трябвада бъдат променливи, които да присвояват различна 
стойност, за да може основната част от текста да бъде преизползвана. </p> ";
$username = "";
$course = "";
$user = "";
echo "<p> Зад 5. Отпечатайте текста три пъти за трите типа участника в 
мероприятието, присвоявайки различна стойност на 
променливите и използвайки един и същи основен текст </p>";
$username = "Stancho";
$course = "php";
$user = "student";
echo "<p>Hi, $username! You`ve been approved to take part in the course $course as a 
$user. The course $course will last for two days. </p>";
$username = "Nina";
$course = "java";
$user = "lecturer";
echo "<p>Hi, $username! You`ve been approved to take part in the course $course as a 
$user. The course $course will last for two days. </p>";
$username = "Ceco";
$course = "JS";
$user = "assistant";
echo "<p>Hi, $username! You`ve been approved to take part in the course $course as a 
$user. The course $course will last for two days. </p>";
echo "<p>Задачи с изчисления</p>";
echo "<p>Зад. 1. Опишете с PHP програма за изчисляване на периметъра и лицето на разли
чни геометрични форми 
–
изпробвайте с три различни стойности на променливите.  </p>";
function litse($a, $b)
{
    $S = $a * $b;
    return $S;
}

echo "<p>Input</p>";
echo "Rectangle, a=10, b = 20";
echo " S= ";
print (litse(7, 20));
echo "<br/>";
echo "Лицето на правоъгълник е ";
print litse(5, 12);
echo "<br/>";
function perimeter($a, $b)
{
    $P = 2 * ($a + $b);
    return $P;
}

echo "Периметърът на правоъгълника е ";
print (perimeter(7, 20));
echo "<br/>";
echo "Периметърът на правоъгълника е ";
print perimeter(5, 12);
echo "<br/>";
echo "<p>Генериране на html </p>";
echo "<p>Зад 1. Отпечатайте с рнр таблица с две колони. На първия ред трябва да има 
информация за име, втория ред -телефонен номер, трети –възраст, четвърти –
адрес. Фона на първата колона нека да бъде сив.  </p>";

echo "<html><body><table style='border: 2px solid'>
        <tr>    
        <td>jsjs</td>
        <td>ekmdke</td>

    </tr>
</table></body>
</html>";

