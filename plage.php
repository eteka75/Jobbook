<?php
$subject = array('1', 'a', '2', 'b', '3', 'A', 'B', '4'); 
$pattern = array('/\d/', '/[a-z]/', '/[1a]/'); 
$replace = array('A:$0', 'B:$0', 'C:$0'); 

echo "preg_filter renvoie:<br>";
print_r(preg_filter($pattern, $replace, $subject)); 

echo "<br>preg_replace renvoie:<br>";
print_r(preg_replace($pattern, $replace, $subject)); 

preg_match('/(?:\D+|<\d+>)*[!?]/', 'foobar foobar foobar');

if (preg_last_error() == PREG_BACKTRACK_LIMIT_ERROR) {
    print '<br>Backtrack limit was exhausted!';
}
$subject = "abcdef";
$pattern = '/^def/';
preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE, 3);
print_r("<br>".$matches."<br>");
$numbers = array("777-555-4444",
                  "800-123-4567",
                 "(999)555-1111",
                 "604 555 1212",
                 "604-555.1212",
                 "604-555.1212",
                 "604.555.1212",
                 "555-1212",
                 "This is not a number",
                 "1234-123-12345",
                 "123-123-1234a",
                 "abc-123-1234");

function isValidPhoneNumber($number) {
    return preg_match("/\(?\d{3}\)?[-\s.]?\d{3}[-\s.]\d{4}$/x", $number);
}

foreach ($numbers as $number) {
    if (isValidPhoneNumber($number)) {
        echo "The number '$number' is valid<br>";
    } else {
        echo "The number '$number' is not valid<br>";
    }
}

?>
<?php
if (preg_match("#guitare$|Piano$#i", "J'aime jouer de la Guitare."))
{
    echo 'VRAI';
}
else
{
    echo 'FAUX';
}
$t=Array(
"0"=>"Moi",
"2"=>"Toi",
"3"=>"Lui"
);
print_r("<br>".$t);
"ddzdù
dzùzd";
?>

<p>
<?php
if (isset($_POST['telephone']))
{
    $_POST['telephone'] = htmlspecialchars($_POST['telephone']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#^0[1-9]([-. ]?[0-9]{2}){4}$#", $_POST['telephone']))
    {
        echo 'Le ' . $_POST['telephone'] . ' est un numéro <strong>valide</strong> !';
    }
    else
    {
        echo 'Le ' . $_POST['telephone'] . ' n\'est pas valide, recommencez !';
    }
}
?>
</p>

<form method="post">
<p>
    <label for="telephone">Votre téléphone ?</label> <input id="telephone" name="telephone" /><br />
    <input type="submit" value="Vérifier le numéro" />
</p>
</form>
<p>
<?php
if (isset($_POST['mail']))
{
$_POST['mail'] = htmlspecialchars($_POST['mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
    {
        echo 'L\'adresse ' . $_POST['mail'] . ' est <strong>valide</strong> !';
    }
    else
    {
        echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
    }
}
?>
</p>

<form method="post">
<p>
    <label for="mail">Votre mail ?</label> <input id="mail" name="mail" /><br />
    <input type="submit" value="Vérifier le mail" />
</p>
</form>
<?php
$texte = "http://www.siteduzero.com/index.php?page=3&skin=blue
";
echo $texte = preg_replace('#http://[a-z0-9._/\?=&-]+#i', '<a href="$0">$0</a>', $texte);
?>
