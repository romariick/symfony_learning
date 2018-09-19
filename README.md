                    Entrainemet pour la préparation au certification SF3
                        ------------------------------------
                        |    Principes de base de symfony   |
                        ------------------------------------ 
1. Le visiteur demande la page /admin
2. Le contrôleur frontal (app_dev.php ou app.php) reçoit la requête. Charge la
requête et puis il le transmet.
3. Le kernel (new AppKernel()) demande au routeur quel controleur executer pour 
l'URL /admin
4. Le kernel execute donc ce controlleur et et renvoi la réponse.

A. Routing 
Methode dans le controlleur pour le template :

  - $this->get('router')->generate('nom du route', ['id'=>5]
  - $this->generateUrl('nom de la route');
NB : paramètre du système ave _format, _locale, _controller
Dans le fichier de configuration du controlleur :
 
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
  IF
  {% if pseudo < 20 %}
    Inférieur à 20
    {%elseif pseuod < 10 %}
    Inférieur à 10
    {%else%}
  {%endif%}

  FOR:
  {% for variable_pour_recuperer_les_valeurs in variable_venant_du_controlleur%}
    {{variable_pour_recuperer_les_valeurs.nom}} - Index {{loop.index}}
  {% endfor %}
Notes : {{loop}} : variable au sein d'une boucle for 
Heritage avec twig :

- utiliser le {% block nom_block %} pour le template père ; à l'intérieur de 
block les templates fils include sont contenues

Exemple : 

1. Créer un template layout.html.twig dans le Bundle

- MonBundle/Resources/view
{% block title %} {% endblock %}
{% block body %}  {% endblock% }

2. Pour les fils
 {% extends "MonBundle::layout.html.twig" %} # Notes : pour accèder au template
dans le MonBundle/Resources/view il faut juste enlever MonController et changer
avec :: doù => MonBundle::layout.html.twig

3. Ajouter :
{% block title %}
 {{parent()}} # afficher la valeur du parent
{% endblock %}

--- Compiler Pass ----------------

But: Injecter dans un service A tous ce qui contient un tag appelé a.x

Etapes : 
 1. creér un Service A
    somme:
        class: OC\PlatformBundle\Services\Somme
    
    somme.rule:
        class: OC\PlatformBundle\Services\SommeRules
        tags:
            - {name: somme.ex}

 2. Créer un compiler Pass qui implémente CompilerPassInterface dans le dossier InjectionIndependance
   process(Container $container)
   findDefinitions('nomServie');
   findTagsId('id')
   injecter dans methode dans le service A tous ce qui est tagé par a.x

     $definition =  $container->getDefinition('somme');        
      $taggedServices = $container->findTaggedServiceIds('somme.ex');
 
      foreach ($taggedServices as $serviceName => $service) {
            $definition->addMethodCall('addMultiplication', array(new Reference($serviceName)));
        }  
    }
 3. Service Somme 

class Somme {

    private $sommRules;

    public function __construct() {
        
    }
    public function addMultiplication(SommeRules $sommeRules) {        
        return $this->sommRules = $sommeRules->addMultiplication();
    }
    
    public function getValue(){
        return $this->sommRules;
    }
}
4. class OCPlatformBundle extends Bundle
{
    public function build(ContainerBuilder $container) 
    { 
        parent::build($container);
        $container->addCompilerPass(new RegisterListenersPass());
        
    }
}

AJOUT ECOUTEUR D'EVENEMENT
 - Methode 1

1. Creér service Listener 

    tags.exmple:
        class: OC\PlatformBundle\Services\Tags
            
    tags.exemple:
        class: OC\PlatformBundle\Listener\TagsListener
        arguments:
            - "@tags.exmple"
        tags:
            - {name: kernel.event_listener, event: kernel.response, method: executeTags}     

    class TagsListener {

    public function __construct(Tags $tags) {
        $this->tags = $tags;
    }

    public function executeTags() {
        
        die('ic tags');
        return "Tags listner";
    }
}
2 - Méthode 2
    $tags = new Tags();
    $dispatcher = $this->get('event_dispatcher');
    $dispatcher->addListener('kernel.response', array($tags, 'executeTags'));

Commande

- composer dump-autoload
-  php bin/console debug:container --parameters
