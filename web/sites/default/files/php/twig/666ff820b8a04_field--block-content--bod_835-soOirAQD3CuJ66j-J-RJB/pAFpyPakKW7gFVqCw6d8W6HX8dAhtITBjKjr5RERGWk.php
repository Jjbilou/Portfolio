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

/* themes/custom/dark/templates/field/field--block-content--body--titre.html.twig */
class __TwigTemplate_11545149cc9df597be3c8d7781568840 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if (($context["label_hidden"] ?? null)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 3
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 3, $this->source), "html", null, true);
                echo " id=\"projets\">
        ";
                // line 4
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 4), 4, $this->source), ["<h2>" => "<h2 id=\"projet\">", "<h2 " => "<h2 id=\"projet\" "]));
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label_hidden", "items", "attributes"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/dark/templates/field/field--block-content--body--titre.html.twig";
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
        return array (  51 => 4,  46 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if label_hidden %}
    {% for item in items %}
      <div{{ attributes }} id=\"projets\">
        {{ item.content|replace({'<h2>': '<h2 id=\"projet\">', '<h2 ': '<h2 id=\"projet\" '})|raw }}
      </div>
    {% endfor %}
{% endif %}
", "themes/custom/dark/templates/field/field--block-content--body--titre.html.twig", "/var/www/project/my-project/web/themes/custom/dark/templates/field/field--block-content--body--titre.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 2);
        static $filters = array("escape" => 3, "raw" => 4, "replace" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'replace'],
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
