window.theme=window.theme||{},theme.customerTemplates=function(){function n(){$("#RecoverPassword").on("click",function(e){e.preventDefault(),r()}),$("#HideRecoverPasswordLink").on("click",function(e){e.preventDefault(),r()})}function r(){$("#RecoverPasswordForm").toggleClass("hide"),$("#CustomerLoginForm").toggleClass("hide")}function i(){var e=$(".reset-password-success");!e.length||$("#ResetSuccess").removeClass("hide")}function d(){var e=$("#AddressNewForm");!e.length||(Shopify&&new Shopify.CountryProvinceSelector("AddressCountryNew","AddressProvinceNew",{hideElement:"AddressProvinceContainerNew"}),$(".address-country-option").each(function(){var o=$(this).data("form-id"),t="AddressCountry_"+o,s="AddressProvince_"+o,a="AddressProvinceContainer_"+o;new Shopify.CountryProvinceSelector(t,s,{hideElement:a})}),$(".address-new-toggle").on("click",function(){e.toggleClass("hide")}),$(".address-edit-toggle").on("click",function(){var o=$(this).data("form-id");$("#EditAddress_"+o).toggleClass("hide")}),$(".address-delete").on("click",function(){var o=$(this),t=o.data("form-id"),s=o.data("confirm-message");confirm(s||"Are you sure you wish to delete this address?")&&Shopify.postLink("/account/addresses/"+t,{parameters:{_method:"delete"}})}))}function c(){var e=window.location.hash;e==="#recover"&&r()}return{init:function(){c(),n(),i(),d()}}}(),theme.init=function(){theme.customerTemplates.init()},$(theme.init);
//# sourceMappingURL=/s/files/1/0137/0207/0330/t/5/assets/theme.js.map?v=13350827956545284162
