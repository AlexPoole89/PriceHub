<?php

/* products_list.html.twig */
class __TwigTemplate_56b5ec46e301ea571cf7d71ae583dbc89af276242749912214a6fb7c18ef21ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "products_list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'searchbar' => array($this, 'block_searchbar'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Product List";
    }

    // line 4
    public function block_searchbar($context, array $blocks = array())
    {
        // line 5
        echo "    <!-- Search Bar with \"searchbar-init\" class for auto initialization -->
    <form class=\"searchbar searchbar-init\" data-search-list=\".list-block-search\" data-search-in=\".item-title\" data-found=\".searchbar-found\" data-not-found=\".searchbar-not-found\">
        <div class=\"searchbar-input\">
            <input type=\"search\" placeholder=\"Search\">
            <a href=\"#\" class=\"searchbar-clear\"></a>
        </div>
        <a href=\"#\" class=\"searchbar-cancel\">Cancel</a>
    </form>
    
    <div class=\"searchbar-overlay\"></div>
    <div class=\"page-content\">
        <div class=\"content-block searchbar-not-found\">
                Nothing found
        </div>
 
        <div class=\"list-block list-block-search searchbar-found\">
            <ul>
                <!-- List View -->
    <div class=\"content-block-title\">Product List</div>
    <div class=\"list-block accordion-list\">
        <ul>
            <div id=\"searchList\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 28
            echo "                <li class=\"accordion-item\"><a href=\"#\" class=\"item-content item-link\">
                        <div class=\"item-inner\">
                            <div class=\"item-title\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "name", array()), "html", null, true);
            echo "</div>
                        </div></a>
                    <div class=\"accordion-item-content\">
                        <div class=\"content-block\">    
                            <div class=\"row\">
                                <div class=\"col-33\">
                                    <a href=\"/products/view/";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" class=\"external button button-big button-fill button-raised color-cyan\">View</a>
                                </div>
                                <div class=\"col-33\">
                                    <a href=\"/products/edit/";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" class=\"external button button-big button-fill button-raised color-cyan\">Update</a>
                                </div>
                                <div class=\"col-33\"> 
                                    <a href=\"/products/delete/";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["l"], "id", array()), "html", null, true);
            echo "\" class=\"button button-big button-fill button-raised color-pink external\">Delete</a>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </div>
        </ul>
    </div>
            </ul>
        </div>
    </div>

";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 62
        echo "

";
    }

    public function getTemplateName()
    {
        return "products_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 62,  123 => 61,  112 => 51,  105 => 49,  93 => 42,  87 => 39,  81 => 36,  72 => 30,  68 => 28,  63 => 27,  39 => 5,  36 => 4,  30 => 2,  11 => 1,);
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
{% block title %}Product List{% endblock %}

{% block searchbar %}
    <!-- Search Bar with \"searchbar-init\" class for auto initialization -->
    <form class=\"searchbar searchbar-init\" data-search-list=\".list-block-search\" data-search-in=\".item-title\" data-found=\".searchbar-found\" data-not-found=\".searchbar-not-found\">
        <div class=\"searchbar-input\">
            <input type=\"search\" placeholder=\"Search\">
            <a href=\"#\" class=\"searchbar-clear\"></a>
        </div>
        <a href=\"#\" class=\"searchbar-cancel\">Cancel</a>
    </form>
    
    <div class=\"searchbar-overlay\"></div>
    <div class=\"page-content\">
        <div class=\"content-block searchbar-not-found\">
                Nothing found
        </div>
 
        <div class=\"list-block list-block-search searchbar-found\">
            <ul>
                <!-- List View -->
    <div class=\"content-block-title\">Product List</div>
    <div class=\"list-block accordion-list\">
        <ul>
            <div id=\"searchList\">
            {% for l in list %}
                <li class=\"accordion-item\"><a href=\"#\" class=\"item-content item-link\">
                        <div class=\"item-inner\">
                            <div class=\"item-title\">{{l.name}}</div>
                        </div></a>
                    <div class=\"accordion-item-content\">
                        <div class=\"content-block\">    
                            <div class=\"row\">
                                <div class=\"col-33\">
                                    <a href=\"/products/view/{{l.id}}\" class=\"external button button-big button-fill button-raised color-cyan\">View</a>
                                </div>
                                <div class=\"col-33\">
                                    <a href=\"/products/edit/{{l.id}}\" class=\"external button button-big button-fill button-raised color-cyan\">Update</a>
                                </div>
                                <div class=\"col-33\"> 
                                    <a href=\"/products/delete/{{l.id}}\" class=\"button button-big button-fill button-raised color-pink external\">Delete</a>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </li>
            {% else %}

            {% endfor %}
            </div>
        </ul>
    </div>
            </ul>
        </div>
    </div>

{% endblock %}


{% block content %}


{% endblock %}", "products_list.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\products_list.html.twig");
    }
}
