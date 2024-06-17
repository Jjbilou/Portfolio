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

/* themes/custom/dark/templates/block/block--dark-memory.html.twig */
class __TwigTemplate_031ab1b429ac1832cf54ceeb2fa771c6 extends Template
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
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 1, $this->source), "html", null, true);
        echo ">
  ";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 2, $this->source), "html", null, true);
        echo "
  ";
        // line 3
        if (($context["label"] ?? null)) {
            // line 4
            echo "    <h3";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 4, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 4, $this->source), "html", null, true);
            echo "</h3>
  ";
        }
        // line 6
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 6, $this->source), "html", null, true);
        echo "
  
  ";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 21
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
    ";
        // line 11
        echo "    ";
        $context["content_without_taxonomy"] = $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 11, $this->source), "field_projectsskills");
        // line 12
        echo "    
    <div class=\"imgtxt\">
      ";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_without_taxonomy"] ?? null), 14, $this->source), "html", null, true);
        echo "
    </div>

    <div>
        ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_projectsskills", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
    </div>
  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/dark/templates/block/block--dark-memory.html.twig";
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
        return array (  94 => 18,  87 => 14,  83 => 12,  80 => 11,  77 => 9,  73 => 8,  67 => 21,  65 => 8,  59 => 6,  51 => 4,  49 => 3,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div{{ attributes }}>
  {{ title_prefix }}
  {% if label %}
    <h3{{ title_attributes }}>{{ label }}</h3>
  {% endif %}
  {{ title_suffix }}
  
  {% block content %}
  
    {# Exclure les termes de taxonomie du contenu #}
    {% set content_without_taxonomy = content|without('field_projectsskills') %}
    
    <div class=\"imgtxt\">
      {{ content_without_taxonomy }}
    </div>

    <div>
        {{ content.field_projectsskills }}
    </div>
  {% endblock %}
</div>
", "themes/custom/dark/templates/block/block--dark-memory.html.twig", "/var/www/project/my-project/web/themes/custom/dark/templates/block/block--dark-memory.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "block" => 8, "set" => 11);
        static $filters = array("escape" => 1, "without" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
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
