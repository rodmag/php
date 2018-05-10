var Sdk = require('../node_modules/nps_sdk/lib/nps-sdk');
var constants = require('../node_modules/nps_sdk/lib/constants')
var sdk = new Sdk();

sdk.connect({environment: constants.STAGING, 
            secretKey: '3dcy5Dvh1faqQZuWpust2KDml6AVqRFs2po52jk3MKtmtmGgg8YhRlTCpdhe2uU2'});


sdk.getIinDetails({
    'psp_Version': '2.2',
    'psp_MerchantId': 'globalc',
    'psp_IIN': '424242',
    'psp_PosDateTime': '2016-12-01 12:00:00'
},
function (error, response) {
    if (error) {
        console.log(error)
    } else {
        console.log(response);
    }
});
