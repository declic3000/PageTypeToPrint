

## Notes

Pour créer une note, insérer `[^identifiant_de_la_note]` au fil du texte, puis créer un paragraphe contentant :   

`[^identifiant_de_la_note]: Contenu de la note mise en forme.`

### Appels de notes et citations

Dans le texte, un appel de note précède toujours le signe de ponctuation. Il se placera donc toujours avant le point final d’une phrase. En fin de citation, il se place avant le guillemet fermant. On le saisit sans le faire précéder d’une espace :
```html
C’est ainsi que Paul Watzlawick formule son axiome d’impossibilité[^axiome].
<!-- ici, avant le point -->

L’axiome d’impossibilité, «&#8239;On ne peut pas ne pas communiquer[^axiome].&#8239;», est formulé […]
<!-- ici, avant le point concluant la citation, avant le guillemet qui l’encadre (précédé d’une espace fine insécable) -->

Paul Watzlawick affirme «&#8239;On ne peut pas ne pas communiquer[^axiome].&#8239;». Ainsi […]
<!-- ici, un point final conclut la phrase comportant une citation -->
```

De la même manière, les images de note doivent être saisies _immédiatement_ (sans espace) après le mot qu’elles précisent :
```md
Les illustrations de Gustave Doré(imagenote: images/gustave.jpg) sont gravées dans les mémoires.
```

### Problèmes de notes

En contexte d’impression, si trop d'images de note sont présentes sur une seule page, l’outil ne peut pas gérer automatiquement le “reflux” de la note sur la page suivante. Une `alert` est alors affichée.

Plusieurs solutions : 

- Utiliser une grande `(figure: nomdufichier.jpg caption: La légende de l’image)` au fil du texte pour développer la pagination différemment.
- Déporter certaines images de notes en annexes.
- Forcer un saut de page en intégrant le code :
```html
<br class="breakpage">
```

### Modifier l’affichage des notes

Pour étendre ou modifier l’affichage des notes, il importe de comprendre comment elles sont générées et mises en page. Une documentation dédiée est accessible ici : [Pour aller plus loin avec les notes](advanced-notes.md).

