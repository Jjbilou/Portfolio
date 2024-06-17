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

/* themes/custom/dark/templates/field/field--field-a-venirs.html.twig */
class __TwigTemplate_99d51852872d95352c65922c151f349f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 66
        return "field--field-aquises.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("field--field-aquises.html.twig", "themes/custom/dark/templates/field/field--field-a-venirs.html.twig", 66);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/dark/templates/field/field--field-a-venirs.html.twig";
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
        return array (  36 => 66,);
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
 {% extends \"field--field-aquises.html.twig\" %}

 {%
  set title_classes = [
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}
  <div{{ attributes.addClass('col-sm-6') }}>
    <h3{{ title_attributes.addClass(title_classes) }}>{{ label }}</h3>
    {% if multiple %}
      <ul>
    {% endif %}
    {% for item in items %}
        <li class=\"mb-3\">
          {% set image =  item.content['#entity'].field_image %}
          <div class=\"row align-items-center\">
            <div class=\"col-auto pe-0\"><img src=\"{{ file_url(image.entity.uri.value) }}\" alt=\"{{ image.alt }}\"/></div>
            <div class=\"col\" {{ item.attributes }}>{{ item.content }}</div>
          </div>
        </li>
    {% endfor %}
    {% if multiple %}
      </ul>
    {% endif %}
  </div>
#}
{% extends \"field--field-aquises.html.twig\" %}", "themes/custom/dark/templates/field/field--field-a-venirs.html.twig", "/var/www/project/my-project/web/themes/custom/dark/templates/field/field--field-a-venirs.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
