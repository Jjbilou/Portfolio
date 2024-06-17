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

/* themes/custom/dark/templates/field/field--field-projectsskills.html.twig */
class __TwigTemplate_27d0a0bb4aa952a4269abb1024ba4848 extends Template
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
        // line 41
        $context["title_classes"] = [(((        // line 42
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 44
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 44, $this->source), "html", null, true);
        echo " class=\"tata\">
  ";
        // line 45
        if (($context["multiple"] ?? null)) {
            // line 46
            echo "    <div>
  ";
        }
        // line 48
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            echo "    ";
            $context["image"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 49)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#entity"] ?? null) : null), "field_image", [], "any", false, false, true, 49);
            // line 50
            echo "    <img src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "entity", [], "any", false, false, true, 50), "uri", [], "any", false, false, true, 50), "value", [], "any", false, false, true, 50), 50, $this->source)), "html", null, true);
            echo "\" alt=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "alt", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "\" class=\"competences\"/> 
    <div";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "></div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "  ";
        if (($context["multiple"] ?? null)) {
            // line 54
            echo "    </div>
  ";
        }
        // line 56
        echo "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label_display", "attributes", "multiple", "items"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/dark/templates/field/field--field-projectsskills.html.twig";
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
        return array (  83 => 56,  79 => 54,  76 => 53,  68 => 51,  61 => 50,  58 => 49,  53 => 48,  49 => 46,  47 => 45,  42 => 44,  40 => 42,  39 => 41,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a field.
 *
 * To override output, copy the \"field.html.twig\" from the templates directory
 * to your theme's directory and customize it, just like customizing other
 * Drupal templates such as page.html.twig or node.html.twig.
 *
 * Instead of overriding the theming for all fields, you can also just override
 * theming for a subset of fields using
 * @link themeable Theme hook suggestions. @endlink For example,
 * here are some theme hook suggestions that can be used for a field_foo field
 * on an article node type:
 * - field--node--field-foo--article.html.twig
 * - field--node--field-foo.html.twig
 * - field--node--article.html.twig
 * - field--field-foo.html.twig
 * - field--text-with-summary.html.twig
 * - field.html.twig
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - label_hidden: Whether to show the field label or not.
 * - title_attributes: HTML attributes for the title.
 * - label: The label for the field.
 * - multiple: TRUE if a field can contain multiple items.
 * - items: List of all the field items. Each item contains:
 *   - attributes: List of HTML attributes for each item.
 *   - content: The field item's content.
 * - entity_type: The entity type to which the field belongs.
 * - field_name: The name of the field.
 * - field_type: The type of the field.
 * - label_display: The display settings for the label.
 *
 * @see template_preprocess_field()
 *
 * @ingroup themeable
 */
#}
{% set title_classes = [
  label_display == 'visually_hidden' ? 'visually-hidden',
] %}
<div{{ attributes }} class=\"tata\">
  {% if multiple %}
    <div>
  {% endif %}
  {% for item in items %}
    {% set image =  item.content['#entity'].field_image %}
    <img src=\"{{ file_url(image.entity.uri.value) }}\" alt=\"{{ image.alt }}\" class=\"competences\"/> 
    <div{{ item.attributes }}></div>
  {% endfor %}
  {% if multiple %}
    </div>
  {% endif %}
</div>
", "themes/custom/dark/templates/field/field--field-projectsskills.html.twig", "/var/www/project/my-project/web/themes/custom/dark/templates/field/field--field-projectsskills.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 41, "if" => 45, "for" => 48);
        static $filters = array("escape" => 44);
        static $functions = array("file_url" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                ['file_url']
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
