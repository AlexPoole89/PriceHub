<?php

/* master.html.twig */
class __TwigTemplate_00c8b13873e5ffcab63f19c339c6109e5a631d51d6c5ae928fb64f80e6565d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'floater' => array($this, 'block_floater'),
            'overlayTitle' => array($this, 'block_overlayTitle'),
            'searchbar' => array($this, 'block_searchbar'),
            'content' => array($this, 'block_content'),
            'scriptextra' => array($this, 'block_scriptextra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags-->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
     
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <!-- Your app title -->
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Path to Framework7 iOS CSS theme styles-->
    
    <!-- Path to Framework7 iOS related color styles -->
    <link rel=\"stylesheet\" href=\"/css/framework7.material.min.css\">
    <link rel=\"stylesheet\" href=\"/css/framework7.material.colors.min.css\">
    
    <link rel=\"stylesheet\" href=\"/css/framework7-icons.css\">
    <!-- Path to your custom app styles-->
    <link rel=\"stylesheet\" href=\"/css/my-app.css\">   
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    ";
        // line 23
        $this->displayBlock('headextra', $context, $blocks);
        // line 24
        echo "  </head>
  <body>
    <!-- Status bar overlay for full screen mode (PhoneGap) -->
    <div class=\"statusbar-overlay\"></div>
    <!-- Panels overlay-->
    <div class=\"panel-overlay\"></div>
    <!-- Left panel with reveal effect-->
    <div class=\"panel panel-left panel-reveal\">
      <div class=\"content-block\">
         
          ";
        // line 34
        if (($context["userSession"] ?? null)) {
            // line 35
            echo "              
               <div class=\"content-block\">      
      <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-input\">
            Signed in as ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute(($context["userSession"] ?? null), "email", array()), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
            <div class=\"content-block\">   
      <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-input\">
            <a class=\"button button-fill external\" href='/logout'>Log Out</a>
          </div>
        </div>
      </div>
    </div>
            
            ";
        } else {
            // line 56
            echo "               
             <div class=\"content-block\">
                    <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-input\">
             <a class=\"button button-fill external\" href='/login'>Sign in</a>
          </div>
        </div>
      </div>
                 </div>
    <div class=\"content-block\">
                   <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-input\">
             <a class=\"button button-fill external\" href='/register'>Register</a>
          </div>
        </div>
      </div>
    </div>
   
           
        ";
        }
        // line 78
        echo "        
        <!--NAV AREA -->
        <div class=\"list-block\">
  <ul>
    <li>
      <a href=\"#\" class=\"item-link item-content\">
        <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
        <div class=\"item-inner\">
          <div class=\"item-title\">Products</div>
          
        </div>
      </a>
    </li>
    <li>
      <a href=\"#\" class=\"item-link item-content\">
        <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
        <div class=\"item-inner\">
          <div class=\"item-title\">Stores</div>
          
        </div>
      </a>
    </li>
     <li>
      <a href=\"#\" class=\"item-link item-content\">
        <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
        <div class=\"item-inner\">
          <div class=\"item-title\">Prices</div>
          
        </div>
      </a>
    </li>
  </ul>
  
</div>
         
      </div>
    </div>
    <!-- Views -->
 
    <div class=\"views  layout-white\">
      <!-- Your main view, should have \"view-main\" class -->
      <div class=\"view view-main\">
          ";
        // line 120
        $this->displayBlock('floater', $context, $blocks);
        // line 125
        echo "        <!-- Top Navbar-->
        <div class=\"navbar\">
          <div class=\"navbar-inner\">
            <!-- We need cool sliding animation on title element, so we have additional \"sliding\" class -->
            
            <div class=\"center sliding\">";
        // line 130
        $this->displayBlock('overlayTitle', $context, $blocks);
        echo "</div>
            
            <div class=\"right\">
              <!-- 
                Right link contains only icon - additional \"icon-only\" class
                Additional \"open-panel\" class tells app to open panel when we click on this link
              -->
              <a href=\"#\" class=\"link icon-only open-panel\"><i class=\"icon icon-bars\"></i></a>
            </div>
          </div>
        </div>
        <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class=\"pages navbar-through toolbar-through\">
          <!-- Page, \"data-page\" contains page name -->
          <div data-page=\"index\" class=\"page\">
            <!-- Scrollable page content -->
            ";
        // line 146
        $this->displayBlock('searchbar', $context, $blocks);
        // line 147
        echo "           <div class=\"page-content  layout-white\"> 
            ";
        // line 148
        $this->displayBlock('content', $context, $blocks);
        // line 157
        echo "           </div> 
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class=\"toolbar\">
          <div class=\"toolbar-inner\">
            <!-- Toolbar links -->
             <!-- <a href=\"#\" class=\"link\">Link 1</a>
          <a href=\"#\" class=\"link\">Link 2</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type=\"text/javascript\" src=\"/js/framework7.min.js\"></script>
    <!-- barcode -->
    <script type=\"text/javascript\" src=\"/js/quagga.min.js\"></script>
    <!-- Path to your app js-->
    <script type=\"text/javascript\" src=\"/js/my-app.js\"></script>
   
    ";
        // line 177
        $this->displayBlock('scriptextra', $context, $blocks);
        // line 178
        echo "  </body>
</html>              ";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo "Index";
    }

    // line 23
    public function block_headextra($context, array $blocks = array())
    {
        echo " ";
    }

    // line 120
    public function block_floater($context, array $blocks = array())
    {
        // line 121
        echo "              <a href=\"/price/add\" class=\"floating-button external\">
    <i class=\"f7-icons\">add</i>
  </a>
              ";
    }

    // line 130
    public function block_overlayTitle($context, array $blocks = array())
    {
        echo "PriceTrack";
    }

    // line 146
    public function block_searchbar($context, array $blocks = array())
    {
    }

    // line 148
    public function block_content($context, array $blocks = array())
    {
        // line 149
        echo "                
            
              <p>Page content goes here</p>
              <!-- Link to another page -->
              <a href=\"about.html\">About app</a>
            
                
            ";
    }

    // line 177
    public function block_scriptextra($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 177,  263 => 149,  260 => 148,  255 => 146,  249 => 130,  242 => 121,  239 => 120,  233 => 23,  227 => 12,  222 => 178,  220 => 177,  198 => 157,  196 => 148,  193 => 147,  191 => 146,  172 => 130,  165 => 125,  163 => 120,  119 => 78,  95 => 56,  76 => 40,  69 => 35,  67 => 34,  55 => 24,  53 => 23,  39 => 12,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags-->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"mobile-web-app-capable\" content=\"yes\">
     
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <!-- Your app title -->
    <title>{% block title %}Index{% endblock %}</title>
    <!-- Path to Framework7 iOS CSS theme styles-->
    
    <!-- Path to Framework7 iOS related color styles -->
    <link rel=\"stylesheet\" href=\"/css/framework7.material.min.css\">
    <link rel=\"stylesheet\" href=\"/css/framework7.material.colors.min.css\">
    
    <link rel=\"stylesheet\" href=\"/css/framework7-icons.css\">
    <!-- Path to your custom app styles-->
    <link rel=\"stylesheet\" href=\"/css/my-app.css\">   
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    {% block headextra %} {% endblock %}
  </head>
  <body>
    <!-- Status bar overlay for full screen mode (PhoneGap) -->
    <div class=\"statusbar-overlay\"></div>
    <!-- Panels overlay-->
    <div class=\"panel-overlay\"></div>
    <!-- Left panel with reveal effect-->
    <div class=\"panel panel-left panel-reveal\">
      <div class=\"content-block\">
         
          {% if userSession %}
              
               <div class=\"content-block\">      
      <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-input\">
            Signed in as {{userSession.email}}
          </div>
        </div>
      </div>
    </div>
            <div class=\"content-block\">   
      <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-input\">
            <a class=\"button button-fill external\" href='/logout'>Log Out</a>
          </div>
        </div>
      </div>
    </div>
            
            {% else %}
               
             <div class=\"content-block\">
                    <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-input\">
             <a class=\"button button-fill external\" href='/login'>Sign in</a>
          </div>
        </div>
      </div>
                 </div>
    <div class=\"content-block\">
                   <div class=\"item-content\">
        <div class=\"item-inner\">
          <div class=\"item-input\">
             <a class=\"button button-fill external\" href='/register'>Register</a>
          </div>
        </div>
      </div>
    </div>
   
           
        {% endif %}
        
        <!--NAV AREA -->
        <div class=\"list-block\">
  <ul>
    <li>
      <a href=\"#\" class=\"item-link item-content\">
        <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
        <div class=\"item-inner\">
          <div class=\"item-title\">Products</div>
          
        </div>
      </a>
    </li>
    <li>
      <a href=\"#\" class=\"item-link item-content\">
        <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
        <div class=\"item-inner\">
          <div class=\"item-title\">Stores</div>
          
        </div>
      </a>
    </li>
     <li>
      <a href=\"#\" class=\"item-link item-content\">
        <div class=\"item-media\"><i class=\"icon icon-f7\"></i></div>
        <div class=\"item-inner\">
          <div class=\"item-title\">Prices</div>
          
        </div>
      </a>
    </li>
  </ul>
  
</div>
         
      </div>
    </div>
    <!-- Views -->
 
    <div class=\"views  layout-white\">
      <!-- Your main view, should have \"view-main\" class -->
      <div class=\"view view-main\">
          {% block floater %}
              <a href=\"/price/add\" class=\"floating-button external\">
    <i class=\"f7-icons\">add</i>
  </a>
              {% endblock %}
        <!-- Top Navbar-->
        <div class=\"navbar\">
          <div class=\"navbar-inner\">
            <!-- We need cool sliding animation on title element, so we have additional \"sliding\" class -->
            
            <div class=\"center sliding\">{% block overlayTitle %}PriceTrack{% endblock %}</div>
            
            <div class=\"right\">
              <!-- 
                Right link contains only icon - additional \"icon-only\" class
                Additional \"open-panel\" class tells app to open panel when we click on this link
              -->
              <a href=\"#\" class=\"link icon-only open-panel\"><i class=\"icon icon-bars\"></i></a>
            </div>
          </div>
        </div>
        <!-- Pages container, because we use fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class=\"pages navbar-through toolbar-through\">
          <!-- Page, \"data-page\" contains page name -->
          <div data-page=\"index\" class=\"page\">
            <!-- Scrollable page content -->
            {% block searchbar %}{% endblock %}
           <div class=\"page-content  layout-white\"> 
            {% block content %}
                
            
              <p>Page content goes here</p>
              <!-- Link to another page -->
              <a href=\"about.html\">About app</a>
            
                
            {% endblock %}
           </div> 
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class=\"toolbar\">
          <div class=\"toolbar-inner\">
            <!-- Toolbar links -->
             <!-- <a href=\"#\" class=\"link\">Link 1</a>
          <a href=\"#\" class=\"link\">Link 2</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type=\"text/javascript\" src=\"/js/framework7.min.js\"></script>
    <!-- barcode -->
    <script type=\"text/javascript\" src=\"/js/quagga.min.js\"></script>
    <!-- Path to your app js-->
    <script type=\"text/javascript\" src=\"/js/my-app.js\"></script>
   
    {% block scriptextra %}{% endblock %}
  </body>
</html>              ", "master.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\master.html.twig");
    }
}
