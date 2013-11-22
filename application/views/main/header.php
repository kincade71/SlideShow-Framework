<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Richard Robinson http://www.richardorobinson.com">

    <meta name="description" content="impress.js is a presentation tool based on the power of CSS3 transforms and transitions in modern browsers and inspired by the idea behind prezi.com." />
    <meta name="author" content="Bartek Szopka" />

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:regular,semibold,italic,italicsemibold|PT+Sans:400,700,400italic,700italic|PT+Serif:400,700,400italic,700italic" rel="stylesheet" />
    <link href="css/impress-demo.css" rel="stylesheet" />
   
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?= base_url()?>ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url()?>ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url()?>ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url()?>ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url()?>ico/apple-touch-icon-57-precomposed.png">
  </head>


<!--

    Welcome to the light side of the source, young padawan.

    One step closer to learn something interesting you are...

                               ____                  
                            _.' :  `._               
                        .-.'`.  ;   .'`.-.           
               __      / : ___\ ;  /___ ; \      __  
             ,'_ ""=-.:__;".-.";: :".-.":__;.-="" _`,
             :' `.t""=-.. '<@.`;_  ',@:` ..-=""j.' `;
                  `:-.._J '-.-'L__ `-.-' L_..-;'     
                    "-.__ ;  .-"  "-.  : __.-"       
                        L ' /.======.\ ' J           
                         "-.   "__"   .-"            
                        __.l"-:_JL_;-";.__           
                     .-j/'.;  ;""""  / .'\"-.        
                   .' /:`. "-.:     .-" .';  `.      
                .-"  / ;  "-. "-..-" .-"  :    "-.   
             .+"-.  : :      "-.__.-"      ;-._   \  
             ; \  `.; ;                    : : "+. ; 
             :  ;   ; ;                    : ;  : \: 
             ;  :   ; :                    ;:   ;  : 
            : \  ;  :  ;                  : ;  /  :: 
            ;  ; :   ; :                  ;   :   ;: 
            :  :  ;  :  ;                : :  ;  : ; 
            ;\    :   ; :                ; ;     ; ; 
            : `."-;   :  ;              :  ;    /  ; 
             ;    -:   ; :              ;  : .-"   : 
             :\     \  :  ;            : \.-"      : 
              ;`.    \  ; :            ;.'_..-=  / ; 
              :  "-.  "-:  ;          :/."      .'  :
               \         \ :          ;/  __        :
                \       .-`.\        /t-""  ":-+.   :
                 `.  .-"    `l    __/ /`. :  ; ; \  ;
                   \   .-" .-"-.-"  .' .'j \  /   ;/ 
                    \ / .-"   /.     .'.' ;_:'    ;  
                     :-""-.`./-.'     /    `.___.'   
                           \ `t  ._  /               
                            "-.t-._:'                

-->

<!--
    
    So you'd like to know how to use impress.js?
    
    You've made the first, very important step - you're reading the source code.
    And that's how impress.js presentations are built - with HTML and CSS code.
    
    Believe me, you need quite decent HTML and CSS skills to be able to use impress.js effectively.
    And what is even more important, you need to be a designer, too, because there are no default
    styles for impress.js presentations, there is no default or automatic layout for them.
    
    You need to design and build it by hand.
    
    So...
    
    Would you still like to know how to use impress.js?
    
-->

    <!--
        
        Impress.js doesn't depend on any external stylesheet. Script adds all styles it needs for
        presentation to work.
        
        This style below contains styles only for demo presentation. Browse it to see how impress.js
        classes are used to style presentation steps, or how to apply fallback styles, but I don't want
        you to use them directly in your presentation.
        
        Be creative, build your own. We don't really want all impress.js presentations to look the same,
        do we?
        
        When creating your own presentation get rid of this file. Start from scratch, it's fun!
        
    -->

</head>

<!--
    
    Body element is used by impress.js to set some useful class names, that will allow you to detect
    the support and state of the presentation in CSS or other scripts.
    
    First very useful class name is `impress-not-supported`. This class means, that browser doesn't
    support features required by impress.js, so you should apply some fallback styles in your CSS.
    It's not necessary to add it manually on this element. If the script detects that browser is not
    good enough it will add this class, but keeping it in HTML means that users without JavaScript
    will also get fallback styles.
    
    When impress.js script detects that browser supports all required features, this class name will
    be removed.
    
    The class name on body element also depends on currently active presentation step. More details about
    it can be found later, when `hint` element is being described.
    
-->
<body class="impress-not-supported">
  