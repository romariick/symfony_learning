A. Routing

  - $this->get('router')->generate('nom du route', ['id'=>5])
  - $this->generateUrl('nom de la route');

NB : Guessing variable : _format, _locale, _controller

Exemple :
mon_controlleur:
   path: /admin/{id}.{_format}
   defaults:
        _controller:  MonBundle:Controller:Action
        id: 5 # valeur par défaut
       _format; xml|json
    requirements:
       id: \d+ #valeur required

B. Controller :

    - $this->container->get('service_name');

B.1 Objet Resquest :
   * Les paramètres contenue dans la route comme {id}
      Exemple : viewAction($id)
   * Les paramètres hors routes :
    Le kernel il met directement dans l'argument du controlleur avant de l'executer

     Exemple : viewAction(Request $request)
     - Si method GET : $request->query ; $requet->query->get('tag')
     - Si method POST : $request->request ; $request->request->get('tag');
     - Si cookies : $request->cookies

    * Methode :
    - $request->isMethod('POST'); # pour récupérer la méthode de la requête
    - $request->isXmlHttpRequest() ; # si un requête AJAX

B.2 Objet Response :
   -  $this->get('templating')->render('MonBundle:Controller:view');
   -  $this->get('templating')->renderResponse('MonBundle:Controller:view');

B.3 Les redirections HTTP : En tête Location necessaire pour que notre navigateur
comprenne qu'il s'agit d'une redirection
  - $url = $this->get('router')->generate('ma route'); return new RedirectResponse($url);
  - new RedirectToRoute('ma_route');
  - $this->redirect($url);

B.4 : Génerer des pages 404

B.5 : Les messages « flash »

     - $request->getSession()->getFlashBag()->add('info', 'ajout avec succès');

 C. Twig

C.1 : Afficher des variables

Pour afficher des variables il faut utiliser le syntaxe : {{variable}}
  - Afficher une variable : {{...}}
  - Afficher l'index d'un tableau : {{var['id']}}
  - Affichier l'attribut d'objet : {{var.id}}
  - Executer une instruction {% ... %}

Appliquer une filter
  - {{pseudo|upper}}
  - {{pseudo|upper|title}} # combinaison d'une filter
  - {{pseudo|date('Y/m/d')}} # avec des arguments
  - {{nom~ " " ~prenom}}

Les filtres utiles :
  - raw : twig desactive localement la protection HTML et affiche la variable en brut
  - date('d/m/y')
  - format : {{"Afficher un texte %" |format(156))}} comme sprintf('Afficher une text %s');

C.2 :
Les variables globales :

Les variables globals sont enregister par défaut dans {{app}} donc on peut faire

- {{app.request}} ; {{app.user}} # utilisateur courant
- {{app.session}}
- {{app.debug}}
- {{app.environnement}}

On peut aussi le mettre dans le fichier de config.

 twig:
  globals:
      webmaster: '%app_webmaster%'

Instruction
  if
  {% if pseudo < 20 %}
    Inférieur à 20
    {%elseif pseuod < 10 %}
    Inférieur à 10
    {%else%}
  {%endif%}

  for:

  {% for variable_pour_recuperer_les_valeurs in variable_venant_du_controlleur%}
    {{variable_pour_recuperer_les_valeurs.nom}} - Index {{loop.index}}
  {% endfor %}

Notes : {{loop}} : variable au sein d'une boucle for
Heritage avec twig :

- utiliser le {% block nom_block %} pour le template père ; à l'intérieur de
block les templates fils include sont contenues
