

## Images

Des images légendées peuvent être insérées grâce à un « _shortcode_ » spécifique.

Les images peuvent être intégrées au fil du texte sous forme de note de côté :
```md
(imagenote: url/de_limage.jpg caption: La légende de l’image)
```

Mais également sous forme de blocs :

```md
(figure: url/de_limage.jpg caption: La légende de l’image)
```

On peut ajouter des `class` aux images :

```md
(figure: url/de_limage.jpg class: maclass monautreclass)
```

Pour distinguer les images à l’arrière-plan blanc de celui de la page, une `class` dédiée (`notwhite`) est disponible :

```md
(figure: url/de_limage.jpg class: notwhite)
```

Pour aligner les images de note à gauche ou à droite (en contexte d’impression) utiliser les `class` suivantes : `printleft` `printright` :

```md
(imagenote: url/de_limage.jpg class: printleft)
```

Pour des images sous forme de blocs qui demandent une grande largeur d’affichage, on peut utiliser la `class: full` :

```md
(imagenote: url/de_limage.jpg class: full)
```

## Vidéos

Pour intégrer une vidéo Youtube ou Vimeo, utiliser le _shortcode_ `video` et l’URL de la page :
```
(video: https://www.youtube.com/watch?v=yfskVxCn_qo class: maclass caption: La légende de la vidéo)
(video: https://vimeo.com/708803521 class: maclass caption: La légende de la vidéo)
```

Pour la version imprimable, il est souhaitable de déterminer quelle image sera imprimée, grâce à l’attribut `poster`:
```
(video: https://www.youtube.com/watch?v=yfskVxCn_qo poster: images/videocover.jpg)
```

En version print, l’URL de la vidéo est affichée sous sa légende.
