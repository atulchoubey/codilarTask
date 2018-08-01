define([
    "uiComponent",
    "ko",
    "Codilar_Grid/js/model/vendorModel",
    "Codilar_Grid/js/model/stepNavigator",
    "Codilar_Grid/js/model/productModel"
  ], function(Component, ko, vendorModel, stepNavigator, productModel) {
      "use strict";

      var status = function() {
          if (stepNavigator.getCurrentStep() == "vendor") {
              return true;
          } else {
              return false;
          }
      };
      status();
      return Component.extend({
          vendorName: ko.observable(""),
          initialize: function() {
              this._super();
          },
          fetchVendors: function() {
              return vendorModel.getVendors();
          },
          isVisible: function() {
              return status();
          },
          getVendorProducts: function(vendor){
                stepNavigator.setCurrentStep("product");
                console.log(productModel.getVendors());
          }
      });
  });
  