<?php include 'class/character.php';
 include 'class/orc.php';
$orc1 = NEW orc();
$orc1->setMana(0);
$orc2 = NEW orc();
$orc2->setMana(100);
echo 'le mana de orc1 est de ' . $orc1->getMana();
echo 'le mana de orc2 est de ' . $orc2->getMana();