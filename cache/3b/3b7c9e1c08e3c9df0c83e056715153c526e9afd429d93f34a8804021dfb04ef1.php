<?php

/* stores_addedit.html.twig */
class __TwigTemplate_48562b532b27761969df24aa41647af5b78e78c707880162144f84271a0f74db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "stores_addedit.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_headextra($context, array $blocks = array())
    {
        echo " 
    <style>
        #map {
            height: 12em;            
        }
    </style>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        if (($context["errorList"] ?? null)) {
            // line 13
            echo "        <ul>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 15
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </ul>
    ";
        }
        // line 18
        echo " 
  
        <div class=\"content-block\"> 
            <div class=\"content-block-title\">Stores</div>
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"list-block\">
                    <ul>
                        <!-- Text inputs -->
                        <li>
                            <div class=\"item-content\">
                                <div class=\"item-media\"><i class=\"icon f7-icons\">info</i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-input\">
                                        <input type=\"text\" placeholder=\"Store Name\" name=\"name\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "name", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <input type=\"hidden\" name=\"longitude\" id=\"longitude\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "longitude", array()), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"latitude\" id=\"latitude\" ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "latitude", array()), "html", null, true);
        echo ">                                                     
                        
                        ";
        // line 40
        echo "                        <li>
                            <div class=\"item-content\">
                                <div class=\"item-media\"><i class=\"icon f7-icons\">photos</i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-input\">
                                        <input type=\"file\" name=\"storeImage\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "logoPath", array()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                            </div>
                        </li>


                        ";
        // line 53
        echo "                        <li>
                            <div class=\"item-content\">
                                <div class=\"item-inner\">
                                    <input type=\"submit\" class=\"button button-big button-fill\" value=\"";
        // line 56
        if (($context["isEditing"] ?? null)) {
            echo "Update";
        } else {
            echo "Add";
        }
        echo " Store\">
                                </div>
                            </div>
                        </li>
                    </ul>
            </form>
        </div> 
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"card-content-inner\"><div id=\"map\"></div></div>
                </div>
            </div>     
    </div>

";
    }

    // line 72
    public function block_scriptextra($context, array $blocks = array())
    {
        echo " 
    <script>
          var map, infoWindow;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 15
            });

            infoWindow = new google.maps.InfoWindow;
            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                        document.getElementById(\"longitude\").value = pos['lng'];
                        document.getElementById(\"latitude\").value = pos['lat'];
                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found!');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function () {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\\'t support geolocation.');
            infoWindow.open(map);
        }

</script>
<script   async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxxl2OsLeKyA3upPOzMaPDpVUq6dNzR48&callback=initMap\">
    </script>
";
    }

    public function getTemplateName()
    {
        return "stores_addedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 72,  122 => 56,  117 => 53,  107 => 45,  100 => 40,  95 => 37,  91 => 36,  83 => 31,  68 => 18,  64 => 17,  55 => 15,  51 => 14,  48 => 13,  45 => 12,  42 => 11,  30 => 3,  11 => 1,);
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

{% block headextra %} 
    <style>
        #map {
            height: 12em;            
        }
    </style>
{% endblock %}

{% block content %}
    {% if errorList %}
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
                {% endfor %}
        </ul>
    {% endif %} 
  
        <div class=\"content-block\"> 
            <div class=\"content-block-title\">Stores</div>
            <form method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"list-block\">
                    <ul>
                        <!-- Text inputs -->
                        <li>
                            <div class=\"item-content\">
                                <div class=\"item-media\"><i class=\"icon f7-icons\">info</i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-input\">
                                        <input type=\"text\" placeholder=\"Store Name\" name=\"name\" value=\"{{v.name}}\">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <input type=\"hidden\" name=\"longitude\" id=\"longitude\" value=\"{{v.longitude}}\">
                        <input type=\"hidden\" name=\"latitude\" id=\"latitude\" {{v.latitude}}>                                                     
                        
                        {# image path #}
                        <li>
                            <div class=\"item-content\">
                                <div class=\"item-media\"><i class=\"icon f7-icons\">photos</i></div>
                                <div class=\"item-inner\">
                                    <div class=\"item-input\">
                                        <input type=\"file\" name=\"storeImage\" value=\"{{v.logoPath}}\">
                                    </div>
                                </div>
                            </div>
                        </li>


                        {# submit #}
                        <li>
                            <div class=\"item-content\">
                                <div class=\"item-inner\">
                                    <input type=\"submit\" class=\"button button-big button-fill\" value=\"{% if isEditing %}Update{% else %}Add{% endif %} Store\">
                                </div>
                            </div>
                        </li>
                    </ul>
            </form>
        </div> 
            <div class=\"card\">
                <div class=\"card-content\">
                    <div class=\"card-content-inner\"><div id=\"map\"></div></div>
                </div>
            </div>     
    </div>

{% endblock %}

{% block scriptextra %} 
    <script>
          var map, infoWindow;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 15
            });

            infoWindow = new google.maps.InfoWindow;
            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                        document.getElementById(\"longitude\").value = pos['lng'];
                        document.getElementById(\"latitude\").value = pos['lat'];
                    infoWindow.setPosition(pos);
                    infoWindow.setContent('Location found!');
                    infoWindow.open(map);
                    map.setCenter(pos);
                }, function () {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                    'Error: The Geolocation service failed.' :
                    'Error: Your browser doesn\\'t support geolocation.');
            infoWindow.open(map);
        }

</script>
<script   async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBxxl2OsLeKyA3upPOzMaPDpVUq6dNzR48&callback=initMap\">
    </script>
{% endblock %}", "stores_addedit.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\stores_addedit.html.twig");
    }
}
