<?php

/* products_addedit.html.twig */
class __TwigTemplate_6437509f241a219f65690c03bc1fa763a32356539532112117509ab2d0275315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "products_addedit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
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

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "   
    <div class=\"content-block\"> 
        <div class=\"content-block-title\">Products</div>
        <form method=\"post\" enctype=\"multipart/form-data\" class=\"ajax-submit\">
            <div class=\"list-block\">
                <ul>
                    <!-- Text inputs -->
                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">person</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <input type=\"text\" placeholder=\"Name\" name=\"name\" value=\"";
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
                            <div class=\"item-media\"><i class=\"icon f7-icons\">camera</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <input type=\"file\" placeholder=\"Product Image\" name=\"productImage\">
                                </div>
                            </div>
                        </div>
                    </li>

                    ";
        // line 43
        echo "                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">compose</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <textarea name=\"comment\" class=\"resizable\">";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "comment", array()), "html", null, true);
        echo "</textarea>
                                </div>    
                            </div>
                        </div>
                    </li>
                </ul>
               <input type=\"submit\" class=\"button button-big button-fill\" value=\"";
        // line 54
        if (($context["isEditing"] ?? null)) {
            echo "Update";
        } else {
            echo "Add";
        }
        echo "Product\">
        </form>
    </div> 
</div>
";
    }

    public function getTemplateName()
    {
        return "products_addedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 54,  74 => 48,  67 => 43,  54 => 31,  45 => 24,  31 => 12,  28 => 11,  11 => 1,);
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


{# {% if errorList %}
    <ul>
        {% for error in errorList %}
            <li>{{error}}</li>
            {% endfor %}
    </ul>
{% endif %} #}
{% block content %}
   
    <div class=\"content-block\"> 
        <div class=\"content-block-title\">Products</div>
        <form method=\"post\" enctype=\"multipart/form-data\" class=\"ajax-submit\">
            <div class=\"list-block\">
                <ul>
                    <!-- Text inputs -->
                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">person</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <input type=\"text\" placeholder=\"Name\" name=\"name\" value=\"{{v.name}}\">
                                </div>
                            </div>
                        </div>
                    </li>

                    {# image path #}
                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">camera</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <input type=\"file\" placeholder=\"Product Image\" name=\"productImage\">
                                </div>
                            </div>
                        </div>
                    </li>

                    {# comment #}
                    <li>
                        <div class=\"item-content\">
                            <div class=\"item-media\"><i class=\"icon f7-icons\">compose</i></div>
                            <div class=\"item-inner\">
                                <div class=\"item-input\">
                                    <textarea name=\"comment\" class=\"resizable\">{{v.comment}}</textarea>
                                </div>    
                            </div>
                        </div>
                    </li>
                </ul>
               <input type=\"submit\" class=\"button button-big button-fill\" value=\"{% if isEditing %}Update{% else %}Add{% endif %}Product\">
        </form>
    </div> 
</div>
{% endblock %}

", "products_addedit.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\products_addedit.html.twig");
    }
}
