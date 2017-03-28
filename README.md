# Cours de soutien WCS - Lyon PHP n°1 

<img src="https://wildcodeschool.fr/wp-content/uploads/2017/01/logo_orange_pastille.png" width="20"> Dans le cadre d'un cours de soutien entre Wilders (Elève de la Wild Code School), nous avons créer cet exercice à partir du Checkpoint (mise à niveau) réalisé afin de revoir certaines parties de cours/pratiques tout en s'entraidant.

Pour commencer, clône le projet :
```
git clone https://github.com/splyy/WCS-StarWars.git
```

Créer toi ta branch Jedi :
```
git branch NomDeMaBranch
```

Et c'est parti ! Un **Sith web** tu développera :)

## Les détails ci-dessous tu liras 

- Un site pour nous aider avec le CRUD mais d'une façon super fun
- Le site à été réalisé à l'aide du framework CSS/JS Bootstrap et l'architecture est déjà faite ;)

## A long time ago, in a galaxy far, far away ...

La planète WCS-Lyon est en pleine guerre galactique. Ses habitants, les wilders, doivent maintenant choisir entre 4 factions...
Quel camp choisirez-vous ? **Alliance**, **Empire**, **Jedi** ou **Sith** ?


## Épisode I. La menace du Sith Web

On sait que les développeurs **Sith** sont des flemmards alors on t'a beaucoup *(beaucoup, beaucoup, beaucoup ...)* aidé en t'avançant dans la structure du site *(et de tes dossiers)*, mais avant de devenir un Padawan, il va falloir finir la structure de ton Etoile Noir du Web ! Alors, rebrousse tes manches et finis moi tout ça.
	- Tes pages communiquent entre elles (comme avec proceduralForm)
	- Tu as créer ta base de données

Quelques Wookies ont essayé d'effacer le tableau qui devait t'aider, malheureusement on a pu récupérer qu'une partie :
```
CREATE DATABASE wcs-starwars;

CREATE TABLE jedi (
	id int AUTO_INCREMENT,
	...
	TODO
	...
	PRIMARY KEY(id)
);
```
A toi de trouver là suite ...

## Épisode II. L'Attaque des Formulaires

Afin de choisir ta faction il te sera demander de créer un formulaire. Et oui, la guerre est présente donc plus rien ne fonctionne. À toi de faire en sorte que tu puisses choisir ton camp *(quand même...)*

Plusieurs champs seront nécessaires afin de bien enregistrer tes informations et attention, **Dark Vador** et **Maître Yoda** *(ça leur arrive de chiller ensemble)* veille a ce que ça soit bien fait.

	1. Un champ pour enregistrer ton Nom
	2. Un champ pour enregistrer ton Prénom
	3. Un champ pour enregistrer ton Sexe
	4. Un champ pour enregistrer ta Faction

Vu qu'on est pas des méchants comme Boba Fett, on te file un coup de pouce pour les factions
```
<div class="form-group">
    <label for="faction">Faction</label>
    <select class="form-control" id="faction" name="faction">
        <option value="rebel">L'Alliance Rebelle</option>
        <option value="empire">L'Empire Galactique</option>
        <option value="jedi">L'Ordre des Jedi</option>
        <option value="sith">L'Ordre des Sith</option>
    </select>
</div>
```

On te dit pas tout mais il faudra pas que tu oublie de connecter son site à ta base de donnée pour pouvoir enregistrer les informations de ton formulaire !
	
## Épisode III. La Revanche des Listes

Et oui, on va quand même pas se taper les uns sur les autres. Du coup pour bien connaître tes alliés et tes ennemis, tu feras en sorte d'afficher chaque champ dans un tableau. En fonction de la faction choisis, une image différente sera présente (fournies dans le dossier img)

Aussi, afin de na pas toujours rester dans le même camp (bah les traîtres), il faudra que tu puisses modifier tes informations et voire les supprimer si tu veux déménager sur une autre planète.

Voici un petit visuel, pour te montrer ce qu'il faut faire

| Prénom     | Nom     | Sexe  |  Faction | Bouton |
|:----------:|:-------:|:-----:|:--------:|:------:|
| ton prénom | ton nom | H / F | Empire   | V / X  |

## Épisode IV. Un nouvel espoir (Bonus)

    1. Génération d'un pseudo à l'aide du nom ou du prénom : 
        * Deviens un Jedi ! Utilise "Obi-Prénom-Wan" (ex : Obi-Francois-wan)
        * Deviens un Sith ! Utilise "Dark Nom" (ex : Dark Gaub)
        * Deviens un Rebelle ! Utilise "Prénom Solo" (ex : Florence Solo)
        * Deviens un Stormtrooper ! Utilise "Prénom Fette" (ex : Amor Fett)

    2. Faire afficher l'icône de la Faction dans ta liste
       Tu as toutes les images nécessaires dans le dossier "public/img", à toi de te débrouiller pour que ça s'affiche en fonction de la        faction :D

    3. Faire afficher l'icône du Sexe
       Tu trouveras le code des icônes sur FontAwesome (FontAwesome est déjà présent dans ton Vendor, pas besoin de rajouter un link ou        autre !)
---

Et voilà !
N'hésite pas à profiter que ce soit un cours de soutien entre nous pour demander de l'aide à tes camarades Wilders, on organise ça exprès :)
**Un pour tous et tous pour un !** <img src="https://wildcodeschool.fr/wp-content/uploads/2017/01/logo_orange_pastille.png" width="20">
