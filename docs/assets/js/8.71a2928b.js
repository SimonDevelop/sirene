(window.webpackJsonp=window.webpackJsonp||[]).push([[8],{276:function(t,s,a){"use strict";a.r(s);var e=a(10),n=Object(e.a)({},(function(){var t=this,s=t._self._c;return s("ContentSlotsDistributor",{attrs:{"slot-key":t.$parent.slotKey}},[s("h1",{attrs:{id:"fonctions"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#fonctions"}},[t._v("#")]),t._v(" Fonctions")]),t._v(" "),s("p",[t._v("Liste des divers fonctionnalités de l'objet "),s("code",[t._v("Sirene")]),t._v(".")]),t._v(" "),s("h2",{attrs:{id:"informations"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#informations"}},[t._v("#")]),t._v(" Informations")]),t._v(" "),s("p",[t._v("La fonction "),s("code",[t._v("informations()")]),t._v(" vous permet de connaître l'état du service de l'API.")]),t._v(" "),s("div",{staticClass:"language-php extra-class"},[s("pre",{pre:!0,attrs:{class:"language-php"}},[s("code",[s("span",{pre:!0,attrs:{class:"token php language-php"}},[s("span",{pre:!0,attrs:{class:"token delimiter important"}},[t._v("<?php")]),t._v("\n"),s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$result")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$sirene")]),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("->")]),s("span",{pre:!0,attrs:{class:"token function"}},[t._v("informations")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])])]),s("p",[t._v("Le resultat retourne un tableau comme ceci :")]),t._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[t._v("array(5) {\n  'etatService' =>\n  string(2) \"UP\"\n  'etatsDesServices' =>\n  array(2) {\n    'Collection' =>\n    string(6) \"string\"\n    'etatCollection' =>\n    string(2) \"UP\"\n  }\n    ...\n}\n")])])]),s("h2",{attrs:{id:"siren"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#siren"}},[t._v("#")]),t._v(" Siren")]),t._v(" "),s("p",[t._v("La fonction "),s("code",[t._v("siren(string $siren)")]),t._v(" vous permet de faire une recherche depuis un siren donné, les informations d'un ou plusieurs établissements vous seront donnez dans le tableau "),s("code",[t._v("uniteLegale")]),t._v(".")]),t._v(" "),s("div",{staticClass:"language-php extra-class"},[s("pre",{pre:!0,attrs:{class:"language-php"}},[s("code",[s("span",{pre:!0,attrs:{class:"token php language-php"}},[s("span",{pre:!0,attrs:{class:"token delimiter important"}},[t._v("<?php")]),t._v("\n"),s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$result")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$sirene")]),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("->")]),s("span",{pre:!0,attrs:{class:"token function"}},[t._v("siren")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"<siren>"')]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])])]),s("p",[t._v("Le resultat retourne un tableau comme ceci :")]),t._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[t._v("array(2) {\n  'header' =>\n  array(2) {\n    'statut' =>\n    int(200)\n    'message' =>\n    string(2) \"OK\"\n  }\n  'uniteLegale' =>\n  array(x) {\n    ...\n  }\n}\n")])])]),s("h2",{attrs:{id:"siret"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#siret"}},[t._v("#")]),t._v(" Siret")]),t._v(" "),s("p",[t._v("La fonction "),s("code",[t._v("siret(string $siren)")]),t._v(" vous permet de faire une recherche depuis un siret donné, les informations de l'établissement vous seront donnez dans le tableau "),s("code",[t._v("etablissement")]),t._v(".")]),t._v(" "),s("div",{staticClass:"language-php extra-class"},[s("pre",{pre:!0,attrs:{class:"language-php"}},[s("code",[s("span",{pre:!0,attrs:{class:"token php language-php"}},[s("span",{pre:!0,attrs:{class:"token delimiter important"}},[t._v("<?php")]),t._v("\n"),s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$result")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$sirene")]),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("->")]),s("span",{pre:!0,attrs:{class:"token function"}},[t._v("siret")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"<siret>"')]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])])]),s("p",[t._v("Le resultat retourne un tableau comme ceci si résultat trouvé:")]),t._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[t._v("array(2) {\n  'header' =>\n  array(2) {\n    'statut' =>\n    int(200)\n    'message' =>\n    string(2) \"ok\"\n  }\n  'etablissement' =>\n  array(x) {\n    ...\n  }\n}\n")])])]),s("h2",{attrs:{id:"searchetablissement"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#searchetablissement"}},[t._v("#")]),t._v(" SearchEtablissement")]),t._v(" "),s("p",[t._v("La fonction "),s("code",[t._v("searchEtablissement(array $params)")]),t._v(" vous permet de faire des recherches d'établissements avec des paramètres, les informations des établissements vous seront donnez dans le tableau "),s("code",[t._v("etablissements")]),t._v(", vous disposez aussi du nombre de résultat dans le tableau "),s("code",[t._v("header")]),t._v(".")]),t._v(" "),s("div",{staticClass:"language-php extra-class"},[s("pre",{pre:!0,attrs:{class:"language-php"}},[s("code",[s("span",{pre:!0,attrs:{class:"token php language-php"}},[s("span",{pre:!0,attrs:{class:"token delimiter important"}},[t._v("<?php")]),t._v("\n"),s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$params")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),t._v("\n    "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"city"')]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=>")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"Bordeaux"')]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"cp"')]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=>")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"33000"')]),t._v("\n"),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n"),s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$result")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$sirene")]),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("->")]),s("span",{pre:!0,attrs:{class:"token function"}},[t._v("searchEtablissement")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$params")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])])]),s("p",[t._v("Le resultat retourne un tableau comme ceci si résultat trouvé:")]),t._v(" "),s("div",{staticClass:"language- extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[t._v("array(2) {\n  'header' =>\n  array(5) {\n    'statut' =>\n    int(200)\n    'message' =>\n    string(2) \"OK\"\n    'total' =>\n    int(111937)\n    'debut' =>\n    int(0)\n    'nombre' =>\n    int(20)\n  }\n  'etablissements' =>\n  array(20) {\n    ...\n  }\n}\n")])])]),s("p",[t._v("Voici les différents paramètres disponibles, chaque clé a une référence dans l'API sirene:")]),t._v(" "),s("div",{staticClass:"language-php extra-class"},[s("pre",{pre:!0,attrs:{class:"language-php"}},[s("code",[s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$list")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),t._v("\n    "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"city"')]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=>")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"libelleCommuneEtablissement"')]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"cp"')]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=>")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"codePostalEtablissement"')]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"company"')]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=>")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"denominationUniteLegale"')]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"sigle"')]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=>")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"sigleUniteLegale"')]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"ape"')]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=>")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"activitePrincipaleUniteLegale"')]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"cj"')]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=>")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"categorieJuridiqueUniteLegale"')]),t._v("\n"),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])]),s("h2",{attrs:{id:"pagination"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#pagination"}},[t._v("#")]),t._v(" Pagination")]),t._v(" "),s("p",[t._v("Avec cette même fonction "),s("code",[t._v('searchEtablissement(array $params, string $tri = "siren", int $page = 0, int $nombre = 20)')]),t._v(", vous pouvez définir le nombre de résultat par page et l'ordre de tri par champ:")]),t._v(" "),s("div",{staticClass:"language-php extra-class"},[s("pre",{pre:!0,attrs:{class:"language-php"}},[s("code",[s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$result")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$Sirene")]),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("->")]),s("span",{pre:!0,attrs:{class:"token function"}},[t._v("searchEtablissement")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("[")]),t._v("\n    "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"city"')]),t._v(" "),s("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=>")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"BORDEAUX"')]),t._v("\n"),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("]")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token string double-quoted-string"}},[t._v('"siret"')]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token number"}},[t._v("0")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token number"}},[t._v("5")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])]),s("p",[t._v("Ici je tri par "),s("code",[t._v("siret")]),t._v(", affichage de la page "),s("code",[t._v("0")]),t._v(" pour "),s("code",[t._v("5")]),t._v(" résultats par page.")])])}),[],!1,null,null,null);s.default=n.exports}}]);