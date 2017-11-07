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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (($context["errorList"] ?? null)) {
            // line 5
            echo "        <ul>
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 7
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </ul>
    ";
        }
        // line 10
        echo " 


    <div class=\"content-block\"> 
        <div class=\"content-block-title\">Products</div>
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
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "name", array()), "html", null, true);
        echo "\">
                                </div>
                            </div>
                        </div>
                    </li>

                    ";
        // line 31
        echo "                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">world-fill</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-title label\">Get location</div>
                                <div class=\"item-input\">
                                    <label class=\"label-switch\">
                                        <input type=\"checkbox\" id=\"getLocation\" > ";
        // line 39
        echo "                                        <div class=\"checkbox\"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <input type=\"hidden\" name=\"longitude\" id=\"longitude\">
                    <input type=\"hidden\" name=\"latitude\" id=\"latitude\">
                    ";
        // line 48
        echo "                    ";
        // line 55
        echo "                    ";
        // line 58
        echo "                    
                    <div class=\"list-block-label\"><p id=\"noGeo\"></p></div>                                                     
                        ";
        // line 62
        echo "
                    ";
        // line 64
        echo "                    ";
        // line 72
        echo "                    ";
        // line 73
        echo "                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">camera</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <input type=\"file\" name=\"storeImage\">
                                </div>
                            </div>
                        </div>
                    </li>

                    ";
        // line 85
        echo "                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-inner\">
                                <input type=\"submit\" class=\"button button-big button-fill\" value=\"";
        // line 88
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
</div>
";
    }

    // line 99
    public function block_scriptextra($context, array $blocks = array())
    {
        // line 100
        echo "    <script>
        var x = document.getElementById(\"noGeo\");
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                x.innerHTML = \"Geolocation is not supported by this browser\";
            }
        }
        function showPosition(position) {
            var long = position.coords.latitude;
            var lat = position.coords.longitude;

            document.getElementById(\"longitude\").value = long;
            document.getElementById(\"latitude\").value = lat;
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    x.innerHTML = \"User denied the request for Geolocation.\";
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML = \"Location information is unavailable.\";
                    break;
                case error.TIMEOUT:
                    x.innerHTML = \"The request to get user location timed out.\";
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML = \"An unknown error occurred.\";
                    break;
            }
        }
        \$(\"#getLocation\").change(function () {
            if (this.checked) {
                getLocation();
            }
        });
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
        return array (  153 => 100,  150 => 99,  132 => 88,  127 => 85,  114 => 73,  112 => 72,  110 => 64,  107 => 62,  103 => 58,  101 => 55,  99 => 48,  89 => 39,  80 => 31,  71 => 24,  55 => 10,  51 => 9,  42 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
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

{% block content %}
    {% if errorList %}
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
                {% endfor %}
        </ul>
    {% endif %} 


    <div class=\"content-block\"> 
        <div class=\"content-block-title\">Products</div>
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

                    {# get current location #}
                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">world-fill</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-title label\">Get location</div>
                                <div class=\"item-input\">
                                    <label class=\"label-switch\">
                                        <input type=\"checkbox\" id=\"getLocation\" > {# TODO: write javascript function to get current location #}
                                        <div class=\"checkbox\"></div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <input type=\"hidden\" name=\"longitude\" id=\"longitude\">
                    <input type=\"hidden\" name=\"latitude\" id=\"latitude\">
                    {# display longitude #}
                    {#  <li>
                         <div class=\"item-content\">
                             
                             <div class=\"item-inner\">                            
                                     <div id=\"longitude\" class=\"list-block-label\"></div>                                                     
                         </div>
                     </li> #}
                    {# <li>
                         <div class=\"item-content\">
 
                             <div class=\"item-inner\">        #}                    
                    <div class=\"list-block-label\"><p id=\"noGeo\"></p></div>                                                     
                        {#        </div>
                        </li>  #}

                    {#display latitude #}
                    {#      <li>
                             <div class=\"item-content\">
                                 
                                 <div class=\"item-inner\">                            
                                     <div class=\"list-block-label\"><p id=\"latitude\"></p></div>    
                                     <input type=\"hidden\" name=\"latitude\">
                             </div>
                         </li> #}
                    {# image path #}
                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">camera</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <input type=\"file\" name=\"storeImage\">
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
</div>
{% endblock %}

{% block scriptextra %}
    <script>
        var x = document.getElementById(\"noGeo\");
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                x.innerHTML = \"Geolocation is not supported by this browser\";
            }
        }
        function showPosition(position) {
            var long = position.coords.latitude;
            var lat = position.coords.longitude;

            document.getElementById(\"longitude\").value = long;
            document.getElementById(\"latitude\").value = lat;
        }

        function showError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    x.innerHTML = \"User denied the request for Geolocation.\";
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML = \"Location information is unavailable.\";
                    break;
                case error.TIMEOUT:
                    x.innerHTML = \"The request to get user location timed out.\";
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML = \"An unknown error occurred.\";
                    break;
            }
        }
        \$(\"#getLocation\").change(function () {
            if (this.checked) {
                getLocation();
            }
        });
    </script>
{% endblock %}", "stores_addedit.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\stores_addedit.html.twig");
    }
}
