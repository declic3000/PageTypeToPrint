<?php

// Le titre du document
$title = "Printing in Relation <br class='breakprint'>to Graphic&nbsp;Art"; // &nbsp; = espace insécable, <br class="breakprint"> produit un saut uniquement en version print
// Le sous-titre éventuel du document
$subtitle = "";
// Votre nom
$name = "George French";
// L’année, par ex. : 2021 – 2022"
$year = "2021 – 2022" ;
// Votre diplôme, par ex. : DNA Design
$diploma = "DNSEP Design";
// Le mention du diplôme, par ex. : Mention Design graphique Multimédia
$mention = "Mention Design <br class='breakprint'>graphique Multimédia"; // <br class="breakprint"> produit un saut uniquement en version print
// Votre pôle éventuel, par ex. : Pôle Nouveaux médias
// Pôle Image, édition &amp;<br class="breakprint"> dessin de caractères
$pole = "Pôle Nouveaux médias";
// Le nom du fichier pdf généré, par ex. : titre-du-document--prenom-nom.pdf
$pdf = "";

$parts = [
  [
    "title" => "Images",
    "folder" => "images",
    "template" => "autofolder"
  ],
  [
    "title" => "Prefatory Note",
    "file" => "text/0.prefatorynote.md",
    "template" => "default"
  ],
  [
    "title" => "Introduction",
    "file" => "text/1.intro.md",
    "template" => "default"
  ],
  [
    "title" => "Art in Printing",
    "file" => "text/2.artinprinting.md",
    "template" => "default"
  ],
  [
    "title" => "Pictorial Composition",
    "file" => "text/3.pictorial.md",
    "template" => "default"
  ],
  [
    "title" => "Type Composition",
    "file" => "text/4.type.md",
    "template" => "default"
  ],
  [
    "title" => "Conclusion",
    "file" => "text/5.conclusion.md",
    "template" => "default"
  ],
  [
    "title" => "Annexes",
    "file" => "text/6.annexes.md",
    "template" => "appendices"
  ],
  [
    "title" => "Entretiens",
    "file" => "text/7.entretiens.md",
    "template" => "interview"
  ],
  [
    "title" => "Glossaire",
    "file" => "text/8.glossaire.md",
    "template" => "references"
  ],
  [
    "title" => "Références",
    "file" => "text/9.references.md",
    "template" => "references"
  ],
  [
    "title" => "Remerciements",
    "file" => "text/10.remerciements.md",
    "template" => "thanks"
  ]
];