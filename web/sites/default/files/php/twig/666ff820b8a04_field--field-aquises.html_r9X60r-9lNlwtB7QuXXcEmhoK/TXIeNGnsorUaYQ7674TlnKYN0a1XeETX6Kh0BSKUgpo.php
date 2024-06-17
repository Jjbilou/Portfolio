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

/* themes/custom/dark/templates/field/field--field-aquises.html.twig */
class __TwigTemplate_1ba38853c6ee11254bb84248f1a260ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'img' => [$this, 'block_img'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["title_classes"] = [(((        // line 43
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 46
        echo "  <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["col-sm-6"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
        echo ">
    <h3";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [($context["title_classes"] ?? null)], "method", false, false, true, 47), 47, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 47, $this->source), "html", null, true);
        echo "</h3>
    ";
        // line 48
        if (($context["multiple"] ?? null)) {
            // line 49
            echo "      <ul class=\"list-unstyled column-2\">
    ";
        }
        // line 51
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "        <li class=\"mb-3\">
          ";
            // line 53
            $context["image"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 53)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#entity"] ?? null) : null), "field_image", [], "any", false, false, true, 53);
            // line 54
            echo "          <div class=\"row align-items-center\">
            <div class=\"col-auto pe-0\">";
            // line 55
            $this->displayBlock('img', $context, $blocks);
            echo "</div>
            <div class=\"col\" ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "</div>
          </div>
        </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "    ";
        if (($context["multiple"] ?? null)) {
            // line 61
            echo "      </ul>
    ";
        }
        // line 63
        echo "  </div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["label_display", "attributes", "title_attributes", "label", "multiple", "items"]);    }

    // line 55
    public function block_img($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "entity", [], "any", false, false, true, 55), "uri", [], "any", false, false, true, 55), "value", [], "any", false, false, true, 55), 55, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["image"] ?? null), "alt", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "\"/> ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/dark/templates/field/field--field-aquises.html.twig";
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
        return array (  122 => 55,  117 => 63,  113 => 61,  110 => 60,  90 => 56,  86 => 55,  83 => 54,  81 => 53,  78 => 52,  60 => 51,  56 => 49,  54 => 48,  48 => 47,  43 => 46,  41 => 43,  40 => 42,);
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
{%
  set title_classes = [
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}
  <div{{ attributes.addClass('col-sm-6') }}>
    <h3{{ title_attributes.addClass(title_classes) }}>{{ label }}</h3>
    {% if multiple %}
      <ul class=\"list-unstyled column-2\">
    {% endif %}
    {% for item in items %}
        <li class=\"mb-3\">
          {% set image =  item.content['#entity'].field_image %}
          <div class=\"row align-items-center\">
            <div class=\"col-auto pe-0\">{% block img %}<img src=\"{{ file_url(image.entity.uri.value) }}\" alt=\"{{ image.alt }}\"/> {% endblock %}</div>
            <div class=\"col\" {{ item.attributes }}>{{ item.content }}</div>
          </div>
        </li>
    {% endfor %}
    {% if multiple %}
      </ul>
    {% endif %}
  </div>", "themes/custom/dark/templates/field/field--field-aquises.html.twig", "/var/www/project/my-project/web/themes/custom/dark/templates/field/field--field-aquises.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 42, "if" => 48, "for" => 51, "block" => 55);
        static $filters = array("escape" => 46);
        static $functions = array("file_url" => 55);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for', 'block'],
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
