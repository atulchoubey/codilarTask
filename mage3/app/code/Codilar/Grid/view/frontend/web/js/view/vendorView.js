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
      var totalPages = 3;
      var pageSize = 2;
      return Component.extend({

      vendorName: ko.observable(""),
      pageNumber: ko.observable(1),


      initialize: function() {
        this._super();
      },
      fetchVendors: function() {
        return vendorModel.getVendors(pageSize,this.pageNumber());
      },

      isVisible: function() {
        return status();
      },

      getVendorProducts: function(vend) {
        productModel.setVendorID(vend.entity_id);
        productModel.setVendorName(vend.vendor);
        stepNavigator.setCurrentStep("product");
      },
      hasPrev: function(){
        console.log("inside next");
        if(this.pageNumber == 1){
          console.log("inside next if");
          return false;
        } else{
          return true;
        }
      },
      hasNext: function(){
        console.log("inside next");
        if(this.pageNumber == totalPages){
          return false;
        } else{
          return true;
        }
      },
      next: function() {
        if (this.pageNumber() < totalPages) {
          this.pageNumber(this.pageNumber() + 1);
          vendorModel.setNumber(this.pageNumber);
        }
      },
      previous: function() {
        if (this.pageNumber() != 1) {
          this.pageNumber(this.pageNumber() - 1);
          vendorModel.setNumber(this.pageNumber);
        }
      }
    });
});
