<?php

/* stores_view.html.twig */
class __TwigTemplate_a61888a9149862e8515898977ba16ccbc588cd85c91da2e2bccd6564472bb7a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "stores_view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'content' => array($this, 'block_content'),
            'scriptextra' => array($this, 'block_scriptextra'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "name", array()), "html", null, true);
        echo " Page";
    }

    // line 3
    public function block_headextra($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        #map{
            height: 12em;
        }
    </style>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "  ";
        // line 12
        echo "    <div class=\"content-block-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "name", array()), "html", null, true);
        echo "</div>
 
       
    
<div class=\"card\">
  <div style=\"background-image:url(";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "logoPath", array()), "html", null, true);
        echo ")\" valign=\"bottom\" class=\"card-header color-white no-border\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "name", array()), "html", null, true);
        echo "</div>
  <div class=\"card-content\">
    <div class=\"card-content-inner\">
      ";
        // line 21
        echo "      <p class=\"buttons-row\">
  <a href=\"#\" class=\"button button-big button-fill\">";
        // line 22
        echo twig_escape_filter($this->env, ($context["price"] ?? null), "html", null, true);
        echo " ";
        if ((($context["price"] ?? null) > 1)) {
            echo "Prices";
        } else {
            echo "Price";
        }
        echo "</a>
</p>
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"/stores/list\" class=\"link external\">Store list</a>
    <a href=\"/stores/edit/";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"link external\">Update</a>
    <a href=\"/stores/delete/";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"link  external\">Delete</a>
  </div>
</div>
  
   <div class=\"card\">
  <div class=\"card-content\">
      <div class=\"card-content-inner\"><div id=\"map\"></div></div>
  </div>
</div>  

    
   ";
        // line 41
        echo "    
    ";
    }

    // line 44
    public function block_scriptextra($context, array $blocks = array())
    {
        echo " 
        <script   async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxxl2OsLeKyA3upPOzMaPDpVUq6dNzR48&callback=initMap\">
    </script>
    <script>
          var map;
        //  var lat = ;
        //  var long = ;

          
        function initMap() {
        var uluru = ";
        // line 54
        echo "{lat: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "latitude", array()), "html", null, true);
        echo ", lng:";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? null), "longitude", array()), "html", null, true);
        echo "};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }

</script>

";
    }

    public function getTemplateName()
    {
        return "stores_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 54,  113 => 44,  108 => 41,  94 => 29,  90 => 28,  75 => 22,  72 => 21,  64 => 17,  55 => 12,  53 => 11,  50 => 10,  41 => 4,  38 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}
{% block title %}{{s.name}} Page{% endblock %}
{% block headextra %}
    <style>
        #map{
            height: 12em;
        }
    </style>
{% endblock %}
{% block content %}
  {#  {% for s in store %}  #}
    <div class=\"content-block-title\">{{s.name}}</div>
 
       
    
<div class=\"card\">
  <div style=\"background-image:url({{s.logoPath}})\" valign=\"bottom\" class=\"card-header color-white no-border\">{{s.name}}</div>
  <div class=\"card-content\">
    <div class=\"card-content-inner\">
      {# TODO ADD LINK to prices page WHERE storeId={{s.id}} #}
      <p class=\"buttons-row\">
  <a href=\"#\" class=\"button button-big button-fill\">{{price}} {% if price > 1 %}Prices{% else %}Price{% endif %}</a>
</p>
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"/stores/list\" class=\"link external\">Store list</a>
    <a href=\"/stores/edit/{{s.id}}\" class=\"link external\">Update</a>
    <a href=\"/stores/delete/{{s.id}}\" class=\"link  external\">Delete</a>
  </div>
</div>
  
   <div class=\"card\">
  <div class=\"card-content\">
      <div class=\"card-content-inner\"><div id=\"map\"></div></div>
  </div>
</div>  

    
   {# {% endfor %}  #}
    
    {% endblock %}

    {% block scriptextra %} 
        <script   async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxxl2OsLeKyA3upPOzMaPDpVUq6dNzR48&callback=initMap\">
    </script>
    <script>
          var map;
        //  var lat = ;
        //  var long = ;

          
        function initMap() {
        var uluru = {#new google.maps.LatLng({{s.latitude}}, {{s.longitude}}); #}{lat: {{s.latitude}}, lng:{{s.longitude}}};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }

</script>

{% endblock %}", "stores_view.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\stores_view.html.twig");
    }
}
