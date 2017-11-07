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
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>  
        <link rel=\"stylesheet\" href=\"/css/framework7.ios.min.css\">
        <link rel=\"stylesheet\" href=\"/css/framework7.ios.colors.min.css\">
 <link rel=\"stylesheet\" href=\"/css/framework7-icons.css\">
        <link rel=\"stylesheet\" href=\"/css/my-app.css\">
        ";
        // line 15
        $this->displayBlock('headextra', $context, $blocks);
        // line 16
        echo "    </head>
    <body>

        <div class=\"statusbar-overlay\"></div>

        <div class=\"panel-overlay\"></div>

        <div class=\"panel panel-left panel-reveal\">
            <div class=\"content-block\">
                <p>Left panel content goes here</p>
            </div>
        </div>

        <div class=\"panel panel-right panel-cover\">
            <div class=\"content-block\">
                <p>Right panel content goes here</p>
            </div>
        </div>


        <div class=\"views tabs toolbar-through\">

            <div id=\"view-1\" class=\"view view-main tab active\">

                <div class=\"pages\">

                    <div data-page=\"index-1\" class=\"page\">

                        <div class=\"page-content\">

                           
                            ";
        // line 47
        $this->displayBlock('content', $context, $blocks);
        // line 48
        echo "
                      
                    </div>
                </div>
            </div>
        </div>

        <div id=\"view-2\" class=\"view tab\">

            <div class=\"navbar\">
                <div class=\"navbar-inner\">
                    <div class=\"center sliding\">Second View</div>
                </div>
            </div>
            <div class=\"pages navbar-through\">
                <div data-page=\"index-2\" class=\"page\">
                    <div class=\"page-content\">
                        <div class=\"content-block\">
                            <p>This is a second view. Lets, for example, have here some internal pages with navbar navigation</p>
                        </div>
                        <div class=\"list-block\">
                            <ul>
                                <li><a href=\"about.html\" class=\"item-link\">
                                        <div class=\"item-content\">
                                            <div class=\"item-inner\">
                                                <div class=\"item-title\">About Us</div>
                                            </div>
                                        </div></a></li>
                                <li><a href=\"services.html\" class=\"item-link\">
                                        <div class=\"item-content\">
                                            <div class=\"item-inner\">
                                                <div class=\"item-title\">Services</div>
                                            </div>
                                        </div></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"view-3\" class=\"view tab\">
            <div class=\"pages\">
                <div data-page=\"index-3\" class=\"page\">
                    <div class=\"page-content\">
                        <div class=\"content-block-title\">Another plain static view</div>
                        <div class=\"content-block\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel commodo massa, eu adipiscing mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus ultricies dictum neque, non varius tortor fermentum at. Curabitur auctor cursus imperdiet. Nam molestie nisi nec est lacinia volutpat in a purus. Maecenas consectetur condimentum viverra. Donec ultricies nec sem vel condimentum. Phasellus eu tincidunt enim, sit amet convallis orci. Vestibulum quis fringilla dolor. </p>
                            <p>Mauris commodo lacus at nisl lacinia, nec facilisis erat rhoncus. Sed eget pharetra nunc. Aenean vitae vehicula massa, sed sagittis ante. Quisque luctus nec velit dictum convallis. Nulla facilisi. Ut sed erat nisi. Donec non dolor massa. Mauris malesuada dolor velit, in suscipit leo consectetur vitae. Duis tempus ligula non eros pretium condimentum. Cras sed dolor odio.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel commodo massa, eu adipiscing mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus ultricies dictum neque, non varius tortor fermentum at. Curabitur auctor cursus imperdiet. Nam molestie nisi nec est lacinia volutpat in a purus. Maecenas consectetur condimentum viverra. Donec ultricies nec sem vel condimentum. Phasellus eu tincidunt enim, sit amet convallis orci. Vestibulum quis fringilla dolor. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"view-4\" class=\"view tab\">
            <div class=\"pages navbar-fixed\">
                <div data-page=\"index-4\" class=\"page\">
                    <div class=\"navbar\">
                        <div class=\"navbar-inner\">
                            <div class=\"center\">Settings</div>
                        </div>
                    </div>
                    <div class=\"page-content\">
                        <div class=\"list-block\">
                            <ul>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-name\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Name</div>
                                            <div class=\"item-input\">
                                                <input type=\"text\" placeholder=\"Your name\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-email\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">E-mail</div>
                                            <div class=\"item-input\">
                                                <input type=\"email\" placeholder=\"E-mail\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-url\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">URL</div>
                                            <div class=\"item-input\">
                                                <input type=\"url\" placeholder=\"URL\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-password\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Password</div>
                                            <div class=\"item-input\">
                                                <input type=\"password\" placeholder=\"Password\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-tel\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Phone</div>
                                            <div class=\"item-input\">
                                                <input type=\"tel\" placeholder=\"Phone\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-gender\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Gender</div>
                                            <div class=\"item-input\">
                                                <select>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-calendar\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Birth date</div>
                                            <div class=\"item-input\">
                                                <input type=\"date\" placeholder=\"Birth day\" value=\"2014-04-30\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-toggle\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Switch</div>
                                            <div class=\"item-input\">
                                                <label class=\"label-switch\">
                                                    <input type=\"checkbox\">
                                                    <div class=\"checkbox\"></div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-settings\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Slider</div>
                                            <div class=\"item-input\">
                                                <div class=\"range-slider\">
                                                    <input type=\"range\" min=\"0\" max=\"100\" value=\"50\" step=\"0.1\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"content-block\">
                            <p>Mauris commodo lacus at nisl lacinia, nec facilisis erat rhoncus. Sed eget pharetra nunc. Aenean vitae vehicula massa, sed sagittis ante. Quisque luctus nec velit dictum convallis. Nulla facilisi. Ut sed erat nisi. Donec non dolor massa. Mauris malesuada dolor velit, in suscipit leo consectetur vitae. Duis tempus ligula non eros pretium condimentum. Cras sed dolor odio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"toolbar tabbar tabbar-labels\">
            <div class=\"toolbar-inner\"><a href=\"#view-1\" class=\"tab-link active\"> <i class=\"icon tabbar-demo-icon-1\"></i><span class=\"tabbar-label\">Information</span></a><a href=\"#view-2\" class=\"tab-link\"><i class=\"icon tabbar-demo-icon-2\"></i><span class=\"tabbar-label\">Inbox</span></a><a href=\"#view-3\" class=\"tab-link\"> <i class=\"icon tabbar-demo-icon-3\"><span class=\"badge bg-red\">4</span></i><span class=\"tabbar-label\">Upload</span></a><a href=\"#view-4\" class=\"tab-link\"> <i class=\"icon tabbar-demo-icon-4\"></i><span class=\"tabbar-label\">Photos</span></a></div>
        </div>
    </div>

    <script type=\"text/javascript\" src=\"/js/framework7.min.js\"></script>

    <script type=\"text/javascript\" src=\"/js/my-app.js\"></script>
    ";
        // line 238
        $this->displayBlock('scriptextra', $context, $blocks);
        // line 239
        echo "</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 15
    public function block_headextra($context, array $blocks = array())
    {
        echo " ";
    }

    // line 47
    public function block_content($context, array $blocks = array())
    {
    }

    // line 238
    public function block_scriptextra($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  295 => 238,  290 => 47,  284 => 15,  279 => 8,  273 => 239,  271 => 238,  79 => 48,  77 => 47,  44 => 16,  42 => 15,  32 => 8,  23 => 1,);
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
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui\">
        <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
        <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
        <title>{% block title %}{% endblock %}</title>

         <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>  
        <link rel=\"stylesheet\" href=\"/css/framework7.ios.min.css\">
        <link rel=\"stylesheet\" href=\"/css/framework7.ios.colors.min.css\">
 <link rel=\"stylesheet\" href=\"/css/framework7-icons.css\">
        <link rel=\"stylesheet\" href=\"/css/my-app.css\">
        {% block headextra %} {% endblock %}
    </head>
    <body>

        <div class=\"statusbar-overlay\"></div>

        <div class=\"panel-overlay\"></div>

        <div class=\"panel panel-left panel-reveal\">
            <div class=\"content-block\">
                <p>Left panel content goes here</p>
            </div>
        </div>

        <div class=\"panel panel-right panel-cover\">
            <div class=\"content-block\">
                <p>Right panel content goes here</p>
            </div>
        </div>


        <div class=\"views tabs toolbar-through\">

            <div id=\"view-1\" class=\"view view-main tab active\">

                <div class=\"pages\">

                    <div data-page=\"index-1\" class=\"page\">

                        <div class=\"page-content\">

                           
                            {% block content %}{% endblock %}

                      
                    </div>
                </div>
            </div>
        </div>

        <div id=\"view-2\" class=\"view tab\">

            <div class=\"navbar\">
                <div class=\"navbar-inner\">
                    <div class=\"center sliding\">Second View</div>
                </div>
            </div>
            <div class=\"pages navbar-through\">
                <div data-page=\"index-2\" class=\"page\">
                    <div class=\"page-content\">
                        <div class=\"content-block\">
                            <p>This is a second view. Lets, for example, have here some internal pages with navbar navigation</p>
                        </div>
                        <div class=\"list-block\">
                            <ul>
                                <li><a href=\"about.html\" class=\"item-link\">
                                        <div class=\"item-content\">
                                            <div class=\"item-inner\">
                                                <div class=\"item-title\">About Us</div>
                                            </div>
                                        </div></a></li>
                                <li><a href=\"services.html\" class=\"item-link\">
                                        <div class=\"item-content\">
                                            <div class=\"item-inner\">
                                                <div class=\"item-title\">Services</div>
                                            </div>
                                        </div></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"view-3\" class=\"view tab\">
            <div class=\"pages\">
                <div data-page=\"index-3\" class=\"page\">
                    <div class=\"page-content\">
                        <div class=\"content-block-title\">Another plain static view</div>
                        <div class=\"content-block\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel commodo massa, eu adipiscing mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus ultricies dictum neque, non varius tortor fermentum at. Curabitur auctor cursus imperdiet. Nam molestie nisi nec est lacinia volutpat in a purus. Maecenas consectetur condimentum viverra. Donec ultricies nec sem vel condimentum. Phasellus eu tincidunt enim, sit amet convallis orci. Vestibulum quis fringilla dolor. </p>
                            <p>Mauris commodo lacus at nisl lacinia, nec facilisis erat rhoncus. Sed eget pharetra nunc. Aenean vitae vehicula massa, sed sagittis ante. Quisque luctus nec velit dictum convallis. Nulla facilisi. Ut sed erat nisi. Donec non dolor massa. Mauris malesuada dolor velit, in suscipit leo consectetur vitae. Duis tempus ligula non eros pretium condimentum. Cras sed dolor odio.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel commodo massa, eu adipiscing mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus ultricies dictum neque, non varius tortor fermentum at. Curabitur auctor cursus imperdiet. Nam molestie nisi nec est lacinia volutpat in a purus. Maecenas consectetur condimentum viverra. Donec ultricies nec sem vel condimentum. Phasellus eu tincidunt enim, sit amet convallis orci. Vestibulum quis fringilla dolor. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"view-4\" class=\"view tab\">
            <div class=\"pages navbar-fixed\">
                <div data-page=\"index-4\" class=\"page\">
                    <div class=\"navbar\">
                        <div class=\"navbar-inner\">
                            <div class=\"center\">Settings</div>
                        </div>
                    </div>
                    <div class=\"page-content\">
                        <div class=\"list-block\">
                            <ul>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-name\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Name</div>
                                            <div class=\"item-input\">
                                                <input type=\"text\" placeholder=\"Your name\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-email\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">E-mail</div>
                                            <div class=\"item-input\">
                                                <input type=\"email\" placeholder=\"E-mail\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-url\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">URL</div>
                                            <div class=\"item-input\">
                                                <input type=\"url\" placeholder=\"URL\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-password\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Password</div>
                                            <div class=\"item-input\">
                                                <input type=\"password\" placeholder=\"Password\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-tel\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Phone</div>
                                            <div class=\"item-input\">
                                                <input type=\"tel\" placeholder=\"Phone\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-gender\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Gender</div>
                                            <div class=\"item-input\">
                                                <select>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-calendar\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Birth date</div>
                                            <div class=\"item-input\">
                                                <input type=\"date\" placeholder=\"Birth day\" value=\"2014-04-30\">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-toggle\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Switch</div>
                                            <div class=\"item-input\">
                                                <label class=\"label-switch\">
                                                    <input type=\"checkbox\">
                                                    <div class=\"checkbox\"></div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"item-content\">
                                        <div class=\"item-media\"><i class=\"icon icon-form-settings\"></i></div>
                                        <div class=\"item-inner\">
                                            <div class=\"item-title label\">Slider</div>
                                            <div class=\"item-input\">
                                                <div class=\"range-slider\">
                                                    <input type=\"range\" min=\"0\" max=\"100\" value=\"50\" step=\"0.1\">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class=\"content-block\">
                            <p>Mauris commodo lacus at nisl lacinia, nec facilisis erat rhoncus. Sed eget pharetra nunc. Aenean vitae vehicula massa, sed sagittis ante. Quisque luctus nec velit dictum convallis. Nulla facilisi. Ut sed erat nisi. Donec non dolor massa. Mauris malesuada dolor velit, in suscipit leo consectetur vitae. Duis tempus ligula non eros pretium condimentum. Cras sed dolor odio.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"toolbar tabbar tabbar-labels\">
            <div class=\"toolbar-inner\"><a href=\"#view-1\" class=\"tab-link active\"> <i class=\"icon tabbar-demo-icon-1\"></i><span class=\"tabbar-label\">Information</span></a><a href=\"#view-2\" class=\"tab-link\"><i class=\"icon tabbar-demo-icon-2\"></i><span class=\"tabbar-label\">Inbox</span></a><a href=\"#view-3\" class=\"tab-link\"> <i class=\"icon tabbar-demo-icon-3\"><span class=\"badge bg-red\">4</span></i><span class=\"tabbar-label\">Upload</span></a><a href=\"#view-4\" class=\"tab-link\"> <i class=\"icon tabbar-demo-icon-4\"></i><span class=\"tabbar-label\">Photos</span></a></div>
        </div>
    </div>

    <script type=\"text/javascript\" src=\"/js/framework7.min.js\"></script>

    <script type=\"text/javascript\" src=\"/js/my-app.js\"></script>
    {% block scriptextra %}{% endblock %}
</body>
</html>
", "master.html.twig", "D:\\XAMPP\\htdocs\\php-project\\templates\\master.html.twig");
    }
}
