<?php
/**
 * Created by Ingenico.
 * Date: 11/1/16
 * Time: 8:36 AM
 */
namespace NpsSDK;
class Constants
{
    const SDK_VERSION = "1.0";
    const PAY_ONLINE_2P = "PayOnLine_2p";
    const AUTHORIZE_2P = "Authorize_2p";
    const QUERY_TXS = "QueryTxs";
    const SIMPLE_QUERY_TX = "SimpleQueryTx";
    const REFUND = "Refund";
    const CAPTURE = "Capture";
    const AUTHORIZE_3P = "Authorize_3p";
    const BANK_PAYMENT_3P = "BankPayment_3p";
    const CASH_PAYMENT_3P = "CashPayment_3p";
    const CHANGE_SECRET_KEY = "ChangeSecretKey";
    const FRAUD_SCREENING = "FraudScreening";
    const NOTIFY_FRAUD_SCREENING_REVIEW = "NotifyFraudScreeningReview";
    const PAY_ONLINE_3P = "PayOnLine_3p";
    const SPLIT_AUTHORIZE_3P = "SplitAuthorize_3p";
    const SPLIT_PAY_ONLINE_3P = "SplitPayOnLine_3p";
    const BANK_PAYMENT_2P = "BankPayment_2p";
    const SPLIT_PAY_ONLINE_2P = "SplitPayOnLine_2p";
    const SPLIT_AUTHORIZE_2P = "SplitAuthorize_2p";
    const QUERY_CARD_NUMBER = "QueryCardNumber";
    const GET_IIN_DETAILS = "GetIINDetails";
    const WSDL_FOLDER = "/NpsSDK/wsdl/";
    const STAGING_WSDL_FILE = "staging.wsdl";
    const PRODUCTION_WSDL_FILE = "staging.wsdl";
    const SANDBOX_WSDL_FILE = "staging.wsdl";
    const DEVELOPMENT_WSDL_FILE = "staging.wsdl";
    const STAGING_ENVIRONMENT = "staging";
    const PRODUCTION_ENVIRONMENT = "production";
    const SANDBOX_ENVIRONMENT = "sandbox";
    const DEVELOPMENT_ENVIRONMENT = "development";
    /*const STAGING_URL = dirname(__FILE__) . WSDL_FOLDER . STAGING_WSDL_FILE;
    
    const PRODUCTION_URL = dirname(__FILE__) . WSDL_FOLDER . PRODUCTION_WSDL_FILE;
    const SANDBOX_URL = dirname(__FILE__) . WSDL_FOLDER . SANDBOX_WSDL_FILE;
    const DEVELOPMENT_URL = dirname(__FILE__) . WSDL_FOLDER . DEVELOPMENT_WSDL_FILE;*/
}