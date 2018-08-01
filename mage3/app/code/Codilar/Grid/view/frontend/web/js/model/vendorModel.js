define([
    'ko',
    'jquery'
], function(ko, $) {
    var _vendors = ko.observableArray([]);
    var _fetchVendors = function () {
        $.ajax({
            url:"http://localhost/codilarTask/mage3/rest/V2/Vendor/getVendors?pageSize=3&pageNumber=1",
            method:"GET",
            success:function(response) {
                _vendors(response);
            }
        });
    };
    _fetchVendors();
    return {
        fetchVendors: function() {
            _fetchVendors();
        },
        getVendors: function (){
            return _vendors;
       }
    };
});