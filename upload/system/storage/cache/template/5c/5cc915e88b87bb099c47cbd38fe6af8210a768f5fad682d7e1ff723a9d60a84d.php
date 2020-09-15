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

/* extension/payment/amazon_login_pay.twig */
class __TwigTemplate_e5342625ed335fff68dda8bea21700c5ced73b46873de5ff947178c17dc39008 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
\t<div class=\"container-fluid\">
\t  <div class=\"pull-right\">
\t\t<button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t<a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
\t  <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>      <ul class=\"breadcrumb\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </ul>
\t</div>
  </div>
  <div class=\"container-fluid\">
\t";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t</div>
\t";
        }
        // line 20
        echo "\t<div class=\"alert alert-";
        echo ((($context["has_ssl"] ?? null)) ? ("info") : ("danger"));
        echo "\">
\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
        // line 21
        echo ($context["text_info_ssl"] ?? null);
        echo "
\t</div>
\t<div class=\"alert alert-info\">
\t  <form method=\"POST\" target=\"_blank\" action=\"";
        // line 24
        echo ($context["registration_url"] ?? null);
        echo "\" class=\"form-horizontal\" id=\"registration-form\">
\t\t<input type=\"hidden\" value=\"";
        // line 25
        echo ($context["locale"] ?? null);
        echo "\" name=\"locale\">
\t\t<input type=\"hidden\" value=\"";
        // line 26
        echo ($context["sp_id"] ?? null);
        echo "\" name=\"spId\">
\t\t<input type=\"hidden\" value=\"";
        // line 27
        echo ($context["unique_id"] ?? null);
        echo "\" name=\"uniqueId\">
\t\t<input type=\"hidden\" value=\"";
        // line 28
        echo ($context["allowed_login_domain"] ?? null);
        echo "\" name=\"allowedLoginDomains[]\">
\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["login_redirect_urls"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["login_redirect_url"]) {
            // line 30
            echo "\t\t\t<input type=\"hidden\" value=\"";
            echo $context["login_redirect_url"];
            echo "\" name=\"loginRedirectURLs[]\">
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['login_redirect_url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t<input type=\"hidden\" value=\"";
        echo ($context["store_name"] ?? null);
        echo "\" name=\"storeDescription\">
\t\t<input type=\"hidden\" value=\"";
        // line 33
        echo ($context["simple_path_language"] ?? null);
        echo "\" name=\"language\">
\t\t<input type=\"hidden\" value=\"";
        // line 34
        echo ($context["ipn_url"] ?? null);
        echo "\" name=\"sandboxMerchantIPNURL\">
\t\t<input type=\"hidden\" value=\"";
        // line 35
        echo ($context["ipn_url"] ?? null);
        echo "\" name=\"productionMerchantIPNURL\">
\t\t<input type=\"hidden\" value=\"POST\" name=\"returnMethod\">
\t\t<button type=\"button\" class=\"btn btn-link\" id=\"sign-up\">";
        // line 37
        echo ($context["text_amazon_signup"] ?? null);
        echo "</button>
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t  </form>
\t  <div id=\"container-credentials\">
\t\t<div class=\"col-sm-5\">
\t\t  <textarea class=\"form-control\" id=\"input-credentials\" placeholder=\"";
        // line 42
        echo ($context["text_credentials"] ?? null);
        echo "\" rows=\"7\" name=\"credentials\"></textarea>
\t\t</div>
\t\t<div class=\"col-sm-5\">
\t\t  <button id=\"button-credentials\" class=\"btn btn-primary\" type=\"button\" >";
        // line 45
        echo ($context["text_validate_credentials"] ?? null);
        echo "</button>
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"panel panel-default\">
\t  <div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 51
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t  </div>
\t  <div class=\"panel-body\">
\t\t<form action=\"";
        // line 54
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-payment-region\">";
        // line 56
        echo ($context["entry_payment_region"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_payment_region\" id=\"amazon-login-pay-payment_region\" class=\"form-control\">
\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payment_regions"] ?? null));
        foreach ($context['_seq'] as $context["payment_region_code"] => $context["payment_region_name"]) {
            // line 60
            echo "\t\t\t\t\t";
            if (($context["payment_region_code"] == ($context["payment_amazon_login_pay_payment_region"] ?? null))) {
                // line 61
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["payment_region_code"];
                echo "\" selected=\"selected\">";
                echo $context["payment_region_name"];
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["payment_region_code"];
                echo "\">";
                echo $context["payment_region_name"];
                echo "</option>
\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['payment_region_code'], $context['payment_region_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-language\">";
        // line 70
        echo ($context["entry_language"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_language\" id=\"amazon-login-pay-language\" class=\"form-control\">
\t\t\t\t";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["language_code"] => $context["language_name"]) {
            // line 74
            echo "\t\t\t\t\t";
            if (($context["language_code"] == ($context["payment_amazon_login_pay_language"] ?? null))) {
                // line 75
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["language_code"];
                echo "\" selected=\"selected\">";
                echo $context["language_name"];
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 77
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["language_code"];
                echo "\">";
                echo $context["language_name"];
                echo "</option>
\t\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['language_code'], $context['language_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t  </select>
\t\t\t  ";
        // line 81
        if (($context["error_curreny"] ?? null)) {
            // line 82
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_curreny"] ?? null);
            echo "</div>
\t\t\t  ";
        }
        // line 84
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-merchant-id\">";
        // line 87
        echo ($context["entry_merchant_id"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_merchant_id\" value=\"";
        // line 89
        echo ($context["payment_amazon_login_pay_merchant_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_merchant_id"] ?? null);
        echo "\" id=\"amazon-login-pay-merchant-id\" class=\"form-control\" autocomplete=\"new-password\" />
\t\t\t  ";
        // line 90
        if (($context["error_merchant_id"] ?? null)) {
            // line 91
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_merchant_id"] ?? null);
            echo "</div>
\t\t\t  ";
        }
        // line 93
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-access-key\">";
        // line 96
        echo ($context["entry_access_key"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_access_key\" value=\"";
        // line 98
        echo ($context["payment_amazon_login_pay_access_key"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_access_key"] ?? null);
        echo "\" id=\"amazon-login-pay-access-key\" class=\"form-control\" autocomplete=\"new-password\" />
\t\t\t  ";
        // line 99
        if (($context["error_access_key"] ?? null)) {
            // line 100
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_access_key"] ?? null);
            echo "</div>
\t\t\t  ";
        }
        // line 102
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-access-secret\">";
        // line 105
        echo ($context["entry_access_secret"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <div class=\"input-group\">
\t\t\t  \t<input data-toggle-password type=\"password\" name=\"payment_amazon_login_pay_access_secret\" value=\"";
        // line 108
        echo ((($context["has_modify_permission"] ?? null)) ? (($context["payment_amazon_login_pay_access_secret"] ?? null)) : (($context["text_generic_password"] ?? null)));
        echo "\" placeholder=\"";
        echo ($context["entry_access_secret"] ?? null);
        echo "\" id=\"amazon-login-pay-access-secret\" class=\"form-control\" autocomplete=\"new-password\" />
\t\t\t  \t<div class=\"input-group-addon btn btn-default toggle-password\">
\t\t\t  \t    <i class=\"fa fa-eye\"></i>
\t\t\t  \t</div>
\t\t\t  </div>
\t\t\t  ";
        // line 113
        if (($context["error_access_secret"] ?? null)) {
            // line 114
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_access_secret"] ?? null);
            echo "</div>
\t\t\t  ";
        }
        // line 116
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-client-id\">";
        // line 119
        echo ($context["entry_client_id"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_client_id\" value=\"";
        // line 121
        echo ($context["payment_amazon_login_pay_client_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_client_id"] ?? null);
        echo "\" id=\"amazon-login-pay-client-id\" class=\"form-control\" autocomplete=\"new-password\" />
\t\t\t  ";
        // line 122
        if (($context["error_client_id"] ?? null)) {
            // line 123
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_client_id"] ?? null);
            echo "</div>
\t\t\t ";
        }
        // line 125
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group required\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-client-secret\">";
        // line 128
        echo ($context["entry_client_secret"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <div class=\"input-group\">
\t\t\t  \t<input data-toggle-password type=\"password\" name=\"payment_amazon_login_pay_client_secret\" value=\"";
        // line 131
        echo ((($context["has_modify_permission"] ?? null)) ? (($context["payment_amazon_login_pay_client_secret"] ?? null)) : (($context["text_generic_password"] ?? null)));
        echo "\" placeholder=\"";
        echo ($context["entry_client_secret"] ?? null);
        echo "\" id=\"amazon-login-pay-client-secret\" class=\"form-control\" autocomplete=\"new-password\" />
\t\t\t  \t<div class=\"input-group-addon btn btn-default toggle-password\">
\t\t\t  \t    <i class=\"fa fa-eye\"></i>
\t\t\t  \t</div>
\t\t\t  </div>
\t\t\t  ";
        // line 136
        if (($context["error_client_secret"] ?? null)) {
            // line 137
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_client_secret"] ?? null);
            echo "</div>
\t\t\t  ";
        }
        // line 139
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-ipn-token\"><span data-toggle=\"tooltip\" title=\"";
        // line 142
        echo ($context["help_ipn_token"] ?? null);
        echo "\">";
        echo ($context["entry_ipn_token"] ?? null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_ipn_token\" value=\"";
        // line 144
        echo ($context["payment_amazon_login_pay_ipn_token"] ?? null);
        echo "\" id=\"input-ipn-token\" class=\"form-control\" />
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-ipn-url\">";
        // line 148
        echo ($context["entry_ipn_url"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-link\"></i></span>
\t\t\t\t<input type=\"text\" readonly value=\"";
        // line 151
        echo ($context["ipn_url"] ?? null);
        echo "\" id=\"input-ipn-url\" class=\"form-control\" />
\t\t\t  </div>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-test\">";
        // line 156
        echo ($context["entry_login_pay_test"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_test\" id=\"amazon-login-pay-test\" class=\"form-control\">
\t\t\t\t";
        // line 159
        if ((($context["payment_amazon_login_pay_test"] ?? null) == "sandbox")) {
            // line 160
            echo "\t\t\t\t\t<option value=\"sandbox\" selected=\"selected\">";
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 162
            echo "\t\t\t\t\t<option value=\"sandbox\">";
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
\t\t\t\t";
        }
        // line 164
        echo "\t\t\t\t";
        if ((($context["payment_amazon_login_pay_test"] ?? null) == "live")) {
            // line 165
            echo "\t\t\t\t\t<option value=\"live\" selected=\"selected\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 167
            echo "\t\t\t\t\t<option value=\"live\">";
            echo ($context["text_live"] ?? null);
            echo "</option>
\t\t\t\t";
        }
        // line 169
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-mode\"><span data-toggle=\"tooltip\" title=\"";
        // line 173
        echo ($context["help_pay_mode"] ?? null);
        echo "\">";
        echo ($context["entry_login_pay_mode"] ?? null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_mode\" id=\"amazon-login-pay-mode\" class=\"form-control\">
\t\t\t\t";
        // line 176
        if ((($context["payment_amazon_login_pay_mode"] ?? null) == "payment")) {
            // line 177
            echo "\t\t\t\t\t<option value=\"payment\" selected=\"selected\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 179
            echo "\t\t\t\t\t<option value=\"payment\">";
            echo ($context["text_payment"] ?? null);
            echo "</option>
\t\t\t\t";
        }
        // line 181
        echo "\t\t\t\t";
        if ((($context["payment_amazon_login_pay_mode"] ?? null) == "auth")) {
            // line 182
            echo "\t\t\t\t\t<option value=\"auth\" selected=\"selected\">";
            echo ($context["text_auth"] ?? null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 184
            echo "\t\t\t\t\t<option value=\"auth\">";
            echo ($context["text_auth"] ?? null);
            echo "</option>
\t\t\t\t";
        }
        // line 186
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-Checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 190
        echo ($context["help_Checkout"] ?? null);
        echo "\">";
        echo ($context["entry_Checkout"] ?? null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_Checkout\" id=\"amazon-login-Checkout-mode\" class=\"form-control\">
\t\t\t\t";
        // line 193
        if ((($context["payment_amazon_login_pay_Checkout"] ?? null) == "account")) {
            // line 194
            echo "\t\t\t\t\t<option value=\"account\" selected=\"selected\">";
            echo ($context["text_account"] ?? null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 196
            echo "\t\t\t\t\t<option value=\"account\">";
            echo ($context["text_account"] ?? null);
            echo "</option>
\t\t\t\t";
        }
        // line 198
        echo "\t\t\t\t";
        if ((($context["payment_amazon_login_pay_Checkout"] ?? null) == "guest")) {
            // line 199
            echo "\t\t\t\t\t<option value=\"guest\" selected=\"selected\">";
            echo ($context["text_guest"] ?? null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 201
            echo "\t\t\t\t\t<option value=\"guest\">";
            echo ($context["text_guest"] ?? null);
            echo "</option>
\t\t\t\t";
        }
        // line 203
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-capture-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 207
        echo ($context["help_capture_status"] ?? null);
        echo "\">";
        echo ($context["entry_capture_status"] ?? null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_capture_status\" id=\"amazon-login-pay-capturet-status\" class=\"form-control\">
\t\t\t\t<option value=\"\">";
        // line 210
        echo ($context["text_no_capture"] ?? null);
        echo "</option>
\t\t\t\t";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 212
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 212) == ($context["payment_amazon_login_pay_capture_status"] ?? null))) {
                // line 213
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 213);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 213);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 215
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 215);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 215);
                echo "</option>
\t\t\t\t\t";
            }
            // line 217
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-pending-status\">";
        // line 222
        echo ($context["entry_pending_status"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_pending_status\" id=\"amazon-login-pay-pendingt-status\" class=\"form-control\">
\t\t\t\t";
        // line 225
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 226
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 226) == ($context["payment_amazon_login_pay_pending_status"] ?? null))) {
                // line 227
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 227);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 227);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 229
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 229);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 229);
                echo "</option>
\t\t\t\t\t";
            }
            // line 231
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
          <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-pending-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 236
        echo ($context["help_capture_oc_status"] ?? null);
        echo "\">";
        echo ($context["entry_capture_oc_status"] ?? null);
        echo "</span></label>
          <div class=\"col-sm-10\">
            <select name=\"payment_amazon_login_pay_capture_oc_status\" id=\"amazon-login-pay-capture-oc-status\" class=\"form-control\">
              ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 240
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 240) == ($context["payment_amazon_login_pay_capture_oc_status"] ?? null))) {
                // line 241
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 241);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 241);
                echo "</option>
                  ";
            } else {
                // line 243
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 243);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 243);
                echo "</option>
                  ";
            }
            // line 245
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "            </select>
          </div>
        </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-minimum-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 250
        echo ($context["help_minimum_total"] ?? null);
        echo "\">";
        echo ($context["text_minimum_total"] ?? null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_minimum_total\" value=\"";
        // line 252
        echo ($context["payment_amazon_login_pay_minimum_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_minimum_total"] ?? null);
        echo "\" id=\"amazon-login-pay-minimum-total\" class=\"form-control\" />
\t\t\t  ";
        // line 253
        if (($context["error_minimum_total"] ?? null)) {
            // line 254
            echo "\t\t\t\t  <div class=\"text-danger\">";
            echo ($context["error_minimum_total"] ?? null);
            echo "</div>
\t\t\t  ";
        }
        // line 256
        echo "\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-geo-zone\">";
        // line 259
        echo ($context["text_geo_zone"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_geo_zone\" id=\"amazon-login-pay-geo-zone\" class=\"form-control\">
\t\t\t\t";
        // line 262
        if ((($context["payment_amazon_login_pay_geo_zone"] ?? null) == 0)) {
            // line 263
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_all_geo_zones"] ?? null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 265
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_all_geo_zones"] ?? null);
            echo "</option>
\t\t\t\t";
        }
        // line 267
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 268
            echo "\t\t\t\t\t";
            if ((($context["payment_amazon_login_pay_geo_zone"] ?? null) == twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 268))) {
                // line 269
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 269);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 269);
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 271
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 271);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 271);
                echo "</option>
\t\t\t\t\t";
            }
            // line 273
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
          <div class=\"form-group\" id=\"buyer-multi-currency\">
              <label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-buyer-multi-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 278
        echo ($context["help_buyer_multi_currency"] ?? null);
        echo "\">
                ";
        // line 279
        echo ($context["text_buyer_multi_currency"] ?? null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                ";
        // line 281
        if (twig_test_empty(($context["store_buyer_currencies"] ?? null))) {
            // line 282
            echo "                    <div class=\"alert alert-info\">
                        <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 283
            echo ($context["text_info_buyer_multi_currencies"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 286
        echo "                <select name=\"payment_amazon_login_pay_buyer_multi_currency\" id=\"amazon-login-pay-buyer-multi-currency\" class=\"form-control\">
                  ";
        // line 287
        if (($context["payment_amazon_login_pay_buyer_multi_currency"] ?? null)) {
            // line 288
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 289
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 291
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 292
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 294
        echo "                </select>
              </div>
        </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-input-debug\"><span data-toggle=\"tooltip\" title=\"";
        // line 298
        echo ($context["help_debug"] ?? null);
        echo "\">";
        echo ($context["entry_debug"] ?? null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_debug\" id=\"amazon-login-pay-input-debug\" class=\"form-control\">
\t\t\t\t";
        // line 301
        if (($context["payment_amazon_login_pay_debug"] ?? null)) {
            // line 302
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 303
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 305
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 306
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t";
        }
        // line 308
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-sort-order\">";
        // line 312
        echo ($context["text_sort_order"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <input type=\"text\" name=\"payment_amazon_login_pay_sort_order\" value=\"";
        // line 314
        echo ($context["payment_amazon_login_pay_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_sort_order"] ?? null);
        echo "\" id=\"amazon-login-pay-sort-order\" class=\"form-control\" />
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-status\">";
        // line 318
        echo ($context["text_status"] ?? null);
        echo "</label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_status\" id=\"amazon-login-pay-status\" class=\"form-control\">
\t\t\t\t";
        // line 321
        if ((($context["payment_amazon_login_pay_status"] ?? null) == 1)) {
            // line 322
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 324
            echo "\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t";
        }
        // line 326
        echo "\t\t\t\t";
        if ((($context["payment_amazon_login_pay_status"] ?? null) == 0)) {
            // line 327
            echo "\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t";
        } else {
            // line 329
            echo "\t\t\t\t\t<option value=\"0\">";
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t";
        }
        // line 331
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t  <div class=\"form-group\">
\t\t\t<label class=\"col-sm-2 control-label\" for=\"amazon-login-pay-declined_codes\"><span data-toggle=\"tooltip\" title=\"";
        // line 335
        echo ($context["help_declined_codes"] ?? null);
        echo "\">";
        echo ($context["text_declined_codes"] ?? null);
        echo "</span></label>
\t\t\t<div class=\"col-sm-10\">
\t\t\t  <select name=\"payment_amazon_login_pay_declined_code\" id=\"amazon-login-pay-declined_code\" class=\"form-control\">
\t\t\t\t<option value=\"\">";
        // line 338
        echo ($context["text_amazon_no_declined"] ?? null);
        echo "</option>
\t\t\t\t";
        // line 339
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["declined_codes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["declined_code"]) {
            // line 340
            echo "\t\t\t\t\t";
            if ((($context["payment_amazon_login_pay_declined_code"] ?? null) == $context["declined_code"])) {
                // line 341
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["declined_code"];
                echo "\" selected=\"selected\">";
                echo $context["declined_code"];
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 343
                echo "\t\t\t\t\t\t<option value=\"";
                echo $context["declined_code"];
                echo "\">";
                echo $context["declined_code"];
                echo "</option>
\t\t\t\t\t";
            }
            // line 345
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['declined_code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        echo "\t\t\t  </select>
\t\t\t</div>
\t\t  </div>
\t\t</form>
\t  </div>
\t</div>
  </div>
  <script type=\"text/javascript\">
      \$('#button-credentials').on('click', function () {
        var json = \$('#input-credentials').val();
        try {
          var credentials = \$.parseJSON(\$('#input-credentials').val());
          \$('#amazon-login-pay-merchant-id').val(credentials['merchant_id']);
          \$('#amazon-login-pay-access-key').val(credentials['access_key']);
          \$('#amazon-login-pay-access-secret').val(credentials['secret_key']);
          \$('#amazon-login-pay-client-id').val(credentials['client_id']);
          \$('#amazon-login-pay-client-secret').val(credentials['client_secret']);
          \$('<input>').attr({
            type: 'hidden',
            value: 'true',
            name: 'language_reload'
          }).appendTo('#form-amazon-login-pay');
          \$('.pull-right > .btn-primary').click();
        } catch (e) {
          \$('.container-fluid:eq(1)').prepend('<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 370
        echo ($context["error_credentials"] ?? null);
        echo "</div>')
        }
      });
      //</script>
  <script type=\"text/javascript\">
      \$('input[name=\\'payment_amazon_login_pay_ipn_token\\']').change(function () {
        var base = '";
        // line 376
        echo ($context["https_catalog"] ?? null);
        echo "index.php?route=extension/payment/amazon_login_pay/ipn&token=';
        var allowedLength = 150 - base.length;
        var newVal = \$(this).val().substr(0, allowedLength);
        \$(this).val(newVal);
        \$('#input-ipn-url').val(base + newVal);
      });
      //</script>
  <script type=\"text/javascript\">
      \$('#amazon-login-pay-payment_region').on('change', function () {
        switch (\$(this).val()) {
          case 'EUR':
            \$('#amazon-login-pay-language').html('<option selected value=\"de-DE\">German</option>');
            break;
          case 'GBP':
            \$('#amazon-login-pay-language').html('<option selected value=\"en-GB\">English</option>');
            break;
          case 'USD':
            \$('#amazon-login-pay-language').html('<option selected value=\"en-US\">American English</option>');
            \$('#buyer-multi-currency').hide();
            break;
        }
        \$('<input>').attr({
          type: 'hidden',
          value: 'true',
          name: 'language_reload'
        }).appendTo('#form-amazon-login-pay');
        \$(\"#form-amazon-login-pay\").submit();
      });
      //</script>
  <script type=\"text/javascript\">
      \$('#amazon-login-pay-language').on('change', function () {
        var language = \$(this).val();
        var mod_lang = language.replace(\"-\", \"_\");
        \$('input[name=\"language\"]').val(mod_lang);
      });
      //</script>
  <script type=\"text/javascript\">
      \$('#sign-up').on('click', function () {
        \$(\"#registration-form\").submit();
        \$(\"#container-credentials\").show();
      });
      //</script>
<script type=\"text/javascript\">
\t\$(document).on('click', '.toggle-password', function(e) {
\t    let target = \$(this).closest('.form-group').find('input[data-toggle-password]');

\t    if (\$(target).attr('type') == 'password') {
\t        \$(target).attr('type', 'text');
\t        \$(this).find('.fa-eye').removeClass('fa-eye').addClass('fa-eye-slash');
\t    } else {
\t        \$(target).attr('type', 'password');
\t        \$(this).find('.fa-eye-slash').removeClass('fa-eye-slash').addClass('fa-eye');
\t    }
\t});
    \$(document).ready(function() {
        if (\$('#amazon-login-pay-payment_region').val() === 'USD') {
            \$('#buyer-multi-currency').hide();
        }
    });
</script>
</div>
";
        // line 437
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/payment/amazon_login_pay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1058 => 437,  994 => 376,  985 => 370,  959 => 346,  953 => 345,  945 => 343,  937 => 341,  934 => 340,  930 => 339,  926 => 338,  918 => 335,  912 => 331,  906 => 329,  900 => 327,  897 => 326,  891 => 324,  885 => 322,  883 => 321,  877 => 318,  868 => 314,  863 => 312,  857 => 308,  852 => 306,  847 => 305,  842 => 303,  837 => 302,  835 => 301,  827 => 298,  821 => 294,  816 => 292,  811 => 291,  806 => 289,  801 => 288,  799 => 287,  796 => 286,  790 => 283,  787 => 282,  785 => 281,  780 => 279,  776 => 278,  770 => 274,  764 => 273,  756 => 271,  748 => 269,  745 => 268,  740 => 267,  734 => 265,  728 => 263,  726 => 262,  720 => 259,  715 => 256,  709 => 254,  707 => 253,  701 => 252,  694 => 250,  688 => 246,  682 => 245,  674 => 243,  666 => 241,  663 => 240,  659 => 239,  651 => 236,  645 => 232,  639 => 231,  631 => 229,  623 => 227,  620 => 226,  616 => 225,  610 => 222,  604 => 218,  598 => 217,  590 => 215,  582 => 213,  579 => 212,  575 => 211,  571 => 210,  563 => 207,  557 => 203,  551 => 201,  545 => 199,  542 => 198,  536 => 196,  530 => 194,  528 => 193,  520 => 190,  514 => 186,  508 => 184,  502 => 182,  499 => 181,  493 => 179,  487 => 177,  485 => 176,  477 => 173,  471 => 169,  465 => 167,  459 => 165,  456 => 164,  450 => 162,  444 => 160,  442 => 159,  436 => 156,  428 => 151,  422 => 148,  415 => 144,  408 => 142,  403 => 139,  397 => 137,  395 => 136,  385 => 131,  379 => 128,  374 => 125,  368 => 123,  366 => 122,  360 => 121,  355 => 119,  350 => 116,  344 => 114,  342 => 113,  332 => 108,  326 => 105,  321 => 102,  315 => 100,  313 => 99,  307 => 98,  302 => 96,  297 => 93,  291 => 91,  289 => 90,  283 => 89,  278 => 87,  273 => 84,  267 => 82,  265 => 81,  262 => 80,  256 => 79,  248 => 77,  240 => 75,  237 => 74,  233 => 73,  227 => 70,  221 => 66,  215 => 65,  207 => 63,  199 => 61,  196 => 60,  192 => 59,  186 => 56,  181 => 54,  175 => 51,  166 => 45,  160 => 42,  152 => 37,  147 => 35,  143 => 34,  139 => 33,  134 => 32,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  95 => 21,  90 => 20,  83 => 17,  81 => 16,  75 => 12,  64 => 10,  60 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/amazon_login_pay.twig", "");
    }
}
