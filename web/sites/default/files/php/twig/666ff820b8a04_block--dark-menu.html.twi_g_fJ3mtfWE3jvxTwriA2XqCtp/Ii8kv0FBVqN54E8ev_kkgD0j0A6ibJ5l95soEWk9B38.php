<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/dark/templates/block/block--dark-menu.html.twig */
class __TwigTemplate_2064c0c0e602dbc49aa93101bf2514df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--  -->
<div";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["toto"], "method", false, false, true, 2), 2, $this->source), "html", null, true);
        echo ">
  ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 3, $this->source), "html", null, true);
        echo "
  ";
        // line 4
        if (($context["label"] ?? null)) {
            // line 5
            echo "    <h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 5, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 5, $this->source), "html", null, true);
            echo "</h2>
  ";
        }
        // line 7
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 7, $this->source), "html", null, true);
        echo "
  ";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "title_prefix", "label", "title_attributes", "title_suffix", "content"]);    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
    <div class=\"row titi\">
        <h1 class=\"tata\">
          <a href=\"#top\">
            <img src=\"";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 13)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null), 13, $this->source), "html", null, true);
        echo "\" alt=\"Nicolas Dobosz - ND - mon site\" class=\"img-fluid img-logo\" loading=\"lazy\">
          </a>
        </h1>
        <nav class=\"tata\">
            ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_body", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
        </nav>

    ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 20, $this->source), "field_image", "field_body"), "html", null, true);
        echo "
    
    </div>
  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/dark/templates/block/block--dark-menu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  98 => 20,  92 => 17,  85 => 13,  79 => 9,  75 => 8,  68 => 24,  66 => 8,  61 => 7,  53 => 5,  51 => 4,  47 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--  -->
<div{{ attributes.addClass(\"toto\") }}>
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}
  {% block content %}

    <div class=\"row titi\">
        <h1 class=\"tata\">
          <a href=\"#top\">
            <img src=\"{{content.field_image[0]['#markup']}}\" alt=\"Nicolas Dobosz - ND - mon site\" class=\"img-fluid img-logo\" loading=\"lazy\">
          </a>
        </h1>
        <nav class=\"tata\">
            {{ content.field_body }}
        </nav>

    {{ content|without('field_image', 'field_body') }}
    
    </div>
  {% endblock %}
</div>

", "themes/custom/dark/templates/block/block--dark-menu.html.twig", "/var/www/project/my-project/web/themes/custom/dark/templates/block/block--dark-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "block" => 8);
        static $filters = array("escape" => 2, "without" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape', 'without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
