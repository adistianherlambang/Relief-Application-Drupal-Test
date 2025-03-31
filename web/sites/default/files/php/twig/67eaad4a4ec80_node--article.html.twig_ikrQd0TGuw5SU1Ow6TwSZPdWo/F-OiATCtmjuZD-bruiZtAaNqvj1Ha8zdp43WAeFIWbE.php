<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/mytheme/templates/node--article.html.twig */
class __TwigTemplate_b13b79d76b1dbed849c883ef8dba609c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\" class=\"article-card-link\">
  <article class=\"article-card\">
    ";
        // line 3
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 3) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, true, true, 3), 0, [], "array", false, true, true, 3), "#file", [], "array", true, true, true, 3))) {
            // line 4
            yield "      <p>Gambar path: ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, (($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 4)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 4), 0, [], "array", false, false, true, 4))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#file"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 4)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 4), 0, [], "array", false, false, true, 4)), "#file", [], "array", false, false, true, 4)), "uri", [], "any", false, false, true, 4)), "html", null, true);
            yield "</p>
      <img class=\"article-image\" src=\"";
            // line 5
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, (($_v3 = (($_v4 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 5)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 5), 0, [], "array", false, false, true, 5))) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#file"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 5)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 5), 0, [], "array", false, false, true, 5)), "#file", [], "array", false, false, true, 5)), "uri", [], "any", false, false, true, 5)), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "\">
    ";
        }
        // line 7
        yield "    
    <h2 class=\"article-title\">";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h2>

    ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 10)) {
            // line 11
            yield "      <div class=\"article-body\">
        ";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, true, true, 12), 0, [], "any", false, true, true, 12), "summary", [], "any", true, true, true, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12), "summary", [], "any", false, false, true, 12), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 12), 0, [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12))));
            yield "
      </div>
    ";
        }
        // line 15
        yield "
    ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 16)) {
            // line 17
            yield "      <div class=\"article-tags\">
        <strong>Tags:</strong>
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 20
                yield "          <span class=\"tag\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v6 = $context["tag"]) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#title"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "#title", [], "array", false, false, true, 20)), "html", null, true);
                yield "</span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "      </div>
    ";
        }
        // line 24
        yield "
    ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_author", [], "any", false, false, true, 25)) {
            // line 26
            yield "      <div class=\"article-author\">
        <strong>Author:</strong> ";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_author", [], "any", false, false, true, 27), 0, [], "any", false, false, true, 27), "entity", [], "any", false, false, true, 27), "label", [], "any", false, false, true, 27), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 30
        yield "  </article>
</a>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["url", "content", "label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/mytheme/templates/node--article.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  123 => 30,  117 => 27,  114 => 26,  112 => 25,  109 => 24,  105 => 22,  96 => 20,  92 => 19,  88 => 17,  86 => 16,  83 => 15,  77 => 12,  74 => 11,  72 => 10,  67 => 8,  64 => 7,  57 => 5,  52 => 4,  50 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/mytheme/templates/node--article.html.twig", "/opt/drupal/web/themes/custom/mytheme/templates/node--article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 3, "for" => 19];
        static $filters = ["escape" => 1, "raw" => 12, "default" => 12];
        static $functions = ["file_url" => 4];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'default'],
                ['file_url'],
                $this->source
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
