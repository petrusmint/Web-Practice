<?php

/* update.html */
class __TwigTemplate_0868c4f2350dbd97883857d4939e8288697bfc40262f7d381e0604b5ea4c992e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "update.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"wrap mailpoet-about-wrap\">
  <h1>";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Greetings, humans.");
        echo "</h1>

  <p class=\"about-text\">";
        // line 8
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Thanks for using MailPoet! We really appreciate all of your love, affection, [link]and (good) plugin reviews.[/link]"), "https://wordpress.org/support/plugin/mailpoet/reviews/", array("target" => "_blank"));
        // line 11
        echo "
  </p>
  <div class=\"mailpoet-logo\"><img src=\"";
        // line 13
        echo $this->env->getExtension('MailPoet\Twig\Assets')->generateImageUrl("welcome_template/mailpoet-logo.png");
        echo "\" alt=\"MailPoet Logo\" /></div>

  <h2 class=\"nav-tab-wrapper wp-clearfix\">
    <a href=\"admin.php?page=mailpoet-welcome\" class=\"nav-tab\">";
        // line 16
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Welcome");
        echo "</a>
    <a href=\"admin.php?page=mailpoet-update\" class=\"nav-tab nav-tab-active\">";
        // line 17
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("What's New");
        echo "</a>
  </h2>

  <div id=\"mailpoet-changelog\" class=\"feature-section one-col\">
    <h2 class=\"mailpoet-feature-top\">";
        // line 21
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("List of Changes");
        echo "</h2>
    ";
        // line 22
        if ((isset($context["changelog"]) ? $context["changelog"] : null)) {
            // line 23
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["changelog"]) ? $context["changelog"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "        <h3>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "version", array()), "html", null, true);
                echo "</h3>
        <ul>
          ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "changes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["change"]) {
                    // line 27
                    echo "            <li>";
                    echo twig_escape_filter($this->env, $context["change"], "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['change'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "        </ul>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    ";
        } else {
            // line 32
            echo "      <p style=\"text-align: center\">";
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("See readme.txt for a changelog.");
            echo "</p>
    ";
        }
        // line 34
        echo "    <a class=\"button button-secondary\" href=\"https://wordpress.org/plugins/mailpoet/#developers\" target=\"_blank\">";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("View all changes");
        echo " &rarr;</a>
  </div>

  <hr>
  <div id=\"mailpoet_random_order\">
    <div>
      ";
        // line 40
        if ( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "analytics", array()), "enabled", array())) {
            // line 41
            echo "        <div class=\"feature-section one-col mailpoet_centered\">
          <h2>";
            // line 42
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Do Your Part to Make MailPoet Better");
            echo "</h2>
          <div class=\"lead-description\">

            <label>
              <input type=\"checkbox\" id=\"mailpoet_analytics_enabled\" value=\"1\">&nbsp;
              ";
            // line 47
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes, share my data anonymously.");
            echo "
            </label>
          </div>
          <p class=\"top-space-triple\">";
            // line 50
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("By sharing your data with us, you can help us understand what our users like (and don't like).");
            echo "
            ";
            // line 51
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("We use it to prioritize and develop new plugin features.");
            echo "<br>
            ";
            // line 52
            echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Share your data to help shape the future of MailPoet! [link]Read more.[/link]"), "http://beta.docs.mailpoet.com/article/130-sharing-your-data-with-us", array("target" => "_blank"));
            // line 55
            echo "
          </p>
        </div>
        <hr>
      ";
        }
        // line 60
        echo "    </div>

    <div>
      <div class=\"feature-section one-col mailpoet_centered\">
        <h2>";
        // line 64
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe To Our Newsletter");
        echo "</h2>
        <p>";
        // line 65
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("About once a month, we send out a pretty cool newsletter ourselves.");
        echo "</p>
        <p>";
        // line 66
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sign up to get a curated selection of awesome links, tips and tricks for using MailPoet, special offers, and important plugin updates!");
        echo "</p>
        <iframe width=\"380\" scrolling=\"no\" frameborder=\"0\" src=\"http://www.mailpoet.com/?wysija-page=1&controller=subscribers&action=wysija_outter&wysija_form=5&external_site=1&wysijap=subscriptions-3\" class=\"iframe-wysija\" vspace=\"0\" tabindex=\"0\" style=\"border-style: none; visibility: visible; background-color: #f1f1f1!important;\" marginwidth=\"0\" marginheight=\"0\" hspace=\"0\" allowtransparency=\"true\" title=\"";
        // line 67
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe To Our Newsletter");
        echo "\"></iframe>
      </div>
      <hr>
    </div>

    <div>
      <div class=\"feature-section one-col mailpoet_centered\">
        <h2>";
        // line 74
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Learn the Ropes");
        echo "</h2>
        <p>";
        // line 75
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("New to MailPoet? Check out our brand new email course. Over the course of a week, we'll teach you how to create and send your first MailPoet email newsletter. Sign up below!");
        echo "</p>
        <iframe width=\"380\" height=\"100%\" scrolling=\"no\" frameborder=\"0\" src=\"http://newsletters.mailpoet.com?mailpoet_form_iframe=4\" class=\"mailpoet_form_iframe\" vspace=\"0\" tabindex=\"0\" onload=\"if(window['MailPoet']) MailPoet.Iframe.autoSize(this);\" marginwidth=\"0\" marginheight=\"0\" hspace=\"0\" allowtransparency=\"true\"></iframe>
      </div>
      <hr>
    </div>

    <div>
      <div class=\"feature-section one-col mailpoet_centered\">
        <h2>";
        // line 83
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave a Review, Make Us Happy");
        echo "</h2>
        <p>";
        // line 84
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("We love to read reviews, either critical or positive. Take 3 minutes and make our day. [link]Write a review[/link]. :)"), "https://wordpress.org/support/plugin/mailpoet/reviews/", array("target" => "_blank"));
        // line 87
        echo "
        </p>
      </div>
      <hr>
    </div>
  </div>

  <div class=\"feature-section one-col mailpoet_centered\">
    <h2>";
        // line 95
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Care to Give Your Opinion?");
        echo "</h2>

    <div class=\"pd-embed\" id=\"pd_1510025011\"></div>
    <script type=\"text/javascript\">
      var _polldaddy = [] || _polldaddy;

      _polldaddy.push( {
        type: \"iframe\",
        auto: \"1\",
        domain: \"mailpoet.polldaddy.com/s/\",
        id: \"mailpoet-interview-sign-up-form\",
        placeholder: \"pd_1510025011\"
      } );

      (function(d,c,j){if(!document.getElementById(j)){var pd=d.createElement(c),s;pd.id=j;pd.src=('https:'==document.location.protocol)?'https://polldaddy.com/survey.js':'http://i0.poll.fm/survey.js';s=document.getElementsByTagName(c)[0];s.parentNode.insertBefore(pd,s);}}(document,'script','pd-embed'));
    </script>
  </div>

  <hr>

  <div class=\"feature-section one-col mailpoet_centered\">
    <a class=\"button button-primary go-to-plugin\" href=\"admin.php?page=mailpoet-newsletters\">";
        // line 116
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Awesome! Now, take me to MailPoet");
        echo " &rarr;</a>
  </div>

</div>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    \$(function() {
      MailPoet.trackEvent(
        'User has updated MailPoet',
        {'MailPoet Free version': window.mailpoet_version}
      );
    });
    \$('#mailpoet_analytics_enabled').on('click', function() {
      var is_enabled = \$(this).is(':checked') ? true : '';
      MailPoet.Ajax.post({
        api_version: window.mailpoet_api_version,
        endpoint: 'settings',
        action: 'set',
        data: {
          analytics: { enabled: (is_enabled)}
        }
      }).fail(function(response) {
        if (response.errors.length > 0) {
          MailPoet.Notice.error(
            response.errors.map(function(error) { return error.message; }),
            { scroll: true }
          );
        }
      });
    });

    var \$random = \$('#mailpoet_random_order');
    var divs = \$random.children().toArray();
    \$random.empty();
    _.shuffle(divs).forEach(function(div) {
      \$random.append(div)
    });

  });

</script>
";
    }

    public function getTemplateName()
    {
        return "update.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 116,  214 => 95,  204 => 87,  202 => 84,  198 => 83,  187 => 75,  183 => 74,  173 => 67,  169 => 66,  165 => 65,  161 => 64,  155 => 60,  148 => 55,  146 => 52,  142 => 51,  138 => 50,  132 => 47,  124 => 42,  121 => 41,  119 => 40,  109 => 34,  103 => 32,  100 => 31,  93 => 29,  84 => 27,  80 => 26,  74 => 24,  69 => 23,  67 => 22,  63 => 21,  56 => 17,  52 => 16,  46 => 13,  42 => 11,  40 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "update.html", "D:\\xampp\\htdocs\\master-dev\\wp-content\\plugins\\mailpoet\\views\\update.html");
    }
}
