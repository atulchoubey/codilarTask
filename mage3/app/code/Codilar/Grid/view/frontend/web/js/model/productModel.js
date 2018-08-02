define([
    'ko',
    'jquery'
], function(ko, $) {
    var _Products = ko.observableArray([]);
    // var vId = ko.observable(0);
    // var _fetchProducts = function () {
    //     $.ajax({
    //         data: { vendorId: vId()},
    //         url:"http://localhost/codilarTask/mage3/rest/V2/Vendor/getProducts",
    //         method:"GET",
    //         success:function(response) {
    //             _Products(response);
    //         }
    //     });
    // };
    // _fetchProducts();
    var _vName = ko.observable();
    return {
        initialize: function(){
            this._super();
        },
        fetchProducts: function() {
            _fetchProducts();
        },
       setVendorID: function(vId){
            
            // vId(vendorId);
            $.ajax({
                data: { vendorId: vId},
                url:"http://localhost/codilarTask/mage3/rest/V2/Vendor/getProducts",
                method:"GET",
                success:function(response) {
                    _Products(response);
                }
            });
       },
       setVendorName: function(vName){
            _vName(vName);
       },

       getName: function(){
            return _vName();
       },

       getProducts: function (){
         return _Products;
       },
    };
});